<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\JobPost
 *
 * @property int $id
 * @property int $company_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Candidate[] $candidates
 * @property-read int|null $candidates_count
 * @property-read \App\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereSlug($value)
 * @property int $job_type_id
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereJobTypeId($value)
 * @property \datetime|null $deadline
 * @property string $tag
 * @property-read mixed $custom_tag
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereTag($value)
 * @property int $province_id
 * @property-read \App\Models\JobType $jobType
 * @property-read \App\Models\Province $province
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereProvinceId($value)
 * @property int $currency_id
 * @property string|null $salary
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereSalary($value)
 * @property int $experience_id
 * @property int $vacancies
 * @property array|null $location
 * @property string $how_to_apply
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Technology[] $technologies
 * @property-read int|null $technologies_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereExperienceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereHowToApply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereVacancies($value)
 * @property-read \App\Models\Country $country
 * @property-read \App\Models\Department $department
 * @property-read \App\Models\Experience $experience
 */
class JobPost extends Model
{
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    use HasFactory;

    const FEATURED = 1;
    const URGENT = 2;
    const IMMEDIATE = 3;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'job_type_id',
        'province_id',
        'description',
        'deadline',
        'tag',
        'experience_id',
        'location',
        'salary',
        'how_to_apply',
        'vacancies',
        'company_id'
    ];

    protected $appends = [
        'custom_tag'
    ];

    protected $casts = [
        'deadline' => 'datetime:Y-m-d',
        'location' => 'array'
    ];


    public static function boot () {
        parent::boot();

        static::saving(function(JobPost $jobPost) {
            if( ! \App::runningInConsole() ) {
                $province = null;
                $department = null;
                $country = null;
                if(request()->country_id != null){
                    $country = Country::findOrFail(request()->country_id);
                }
                if(request()->department_id != null){
                    $department = Department::with('country')
                        ->findOrFail(request()->department_id);
                    $country = $department->country;
                }
                if(request()->province_id != null){
                    $province = Province::with('department.country')
                        ->findOrFail(request()->province_id);
                    $department = $province->department;
                    $country = $province->department->country;
                }
                $location = [
                    'province_id' => $province ? $province->id : null,
                    'department_id' => $department ? $department->id : null,
                    'country_id' => $country ? $country->id : request()->country_id
                ];
                if(request()->isMethod('post')) {
                    $jobPost->slug = Str::slug($jobPost->title, "-") . "-" . strtotime(Carbon::now());
                }
                $jobPost->location = $location;
            }
        });
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function candidates(){
        return $this->belongsToMany(Candidate::class);
    }

    public function jobType(){
        return $this->belongsTo(JobType::class);
    }

    public function getCustomTagAttribute(){
        return [
            self::FEATURED => ['class' => 'featured', 'text' => __('Featured')],
            self::URGENT => ['class' => 'featured red', 'text' => __('Urgent')],
            self::IMMEDIATE => ['class' => 'featured', 'text' => __('Immediate hiring')]
        ][$this->tag];
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public function experience(){
        return $this->belongsTo(Experience::class);
    }

    public function country(){
        return $this->belongsTo(Country::class, 'location->country_id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'location->department_id');
    }

    public function province(){
        return $this->belongsTo(Province::class, 'location->province_id');
    }

    public function customLocation(){
        if($this->location['province_id'] != null){
            return "{$this->province->name}, {$this->department->name}, {$this->country->name}";
        }
        if($this->location['department_id'] != null){
            return "{$this->department->name}, {$this->country->name}";
        }
        return "{$this->country->name}";
    }
}
