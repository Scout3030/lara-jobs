<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserSocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_uid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereProviderUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocialAccount whereUserId($value)
 * @mixin \Eloquent
 */
class UserSocialAccount extends Model
{
    use HasFactory;
}
