<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $biography
 * @property string|null $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsiteUrl($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User $user
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDeletedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @property string|null $logo
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'website_url',
        'biography',
        'logo'
    ];

    public function logo() {
    	return "/images/companies/" . $this->logo;
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobPosts(){
        return $this->hasMany(JobPost::class);
    }

    public static function boot () {
        parent::boot();

        static::saving(function(Company $company) {
            if( ! \App::runningInConsole() ) {
                $company->user_id = 2;
            }
        });
    }
}
