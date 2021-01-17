<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\JobType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class JobType extends Model
{
    use HasFactory;
}
