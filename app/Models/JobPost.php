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
 */
class JobPost extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'job_type_id',
        'description',
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
        return $this->hasMany(Candidate::class);
    }
}
