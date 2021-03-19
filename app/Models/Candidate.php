<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Candidate
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string $salary
 * @property string $working_experience
 * @property string $education
 * @property string $languages
 * @property string $skills
 * @property string $resume
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereWorkingExperience($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @property-read \App\Models\User $user
 */
class Candidate extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobPosts(){
        return $this->belongsToMany(JobPost::class);
    }

    public function viewedJobs(){
        return $this->belongsToMany(JobPost::class)
                    ->wherePivot('viewed', 0);
    }
}
