<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GeneralData
 *
 * @property int $id
 * @property string $logo
 * @property string $footer_text
 * @property array $social_network
 * @property string $phone_number
 * @property string $email
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData query()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereFooterText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereSocialNetwork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralData whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GeneralData extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_text', 'social_network', 'phone_number', 'email', 'address'
    ];

    protected $casts = [
        'social_network' => 'array'
    ];
}
