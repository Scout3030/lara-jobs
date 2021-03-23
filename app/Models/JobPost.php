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
 */
class JobPost extends Model
{
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
        'experience'
    ];

    protected $appends = [
        'custom_tag',
    ];

    protected $casts = [
        'deadline' => 'datetime:Y-m-d',
        'experience' => 'array'
    ];


    public static function boot () {
        parent::boot();

        static::saving(function(JobPost $jobPost) {
            if( ! \App::runningInConsole() ) {
                $jobPost->slug = Str::slug($jobPost->title, "-")."-".strtotime(Carbon::now());
                $jobPost->company_id = auth()->user()->company->id;
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
        $tags = [
            self::FEATURED => ['class' => 'featured', 'text' => __('Featured')],
            self::URGENT => ['class' => 'featured red', 'text' => __('Urgent')],
            self::IMMEDIATE => ['class' => 'featured', 'text' => __('Immediate hiring')]
        ];
        return $tags[$this->tag];
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
