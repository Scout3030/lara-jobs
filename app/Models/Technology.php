<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Technology
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Technology newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology query()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function jobPosts(){
        return $this->belongsToMany(JobPost::class);
    }
}
