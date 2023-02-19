<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @method static create()
 * @property int $id
 * @property string $name
 * @property string|null $family
 * @property string $mobile
 * @property string|null $tell
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $unique_code
 * @property int $city_id
 * @property string|null $addresses
 * @property int $user_type_id
 * @property string|null $user_unique_code
 * @property float $wallet
 * @property string|null $socialNetworks
 * @property int $level
 * @property string|null $pic
 * @property int $isActive
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $isMale
 * @property int $register_user_id
 * @property int $isDel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cart[] $carts
 * @property-read int|null $carts_count
 * @property-read \App\Models\City|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GroupMember[] $groups
 * @property-read int|null $groups_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read User $registerUser
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\UserType $userType
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddresses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsMale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegisterUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialNetworks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWallet($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'mobile',
        'tell',
        'email',
        'password',
        'unique_code',
        'addresses',
        'city_id',
        'user_type_id',
        'user_unique_code',
        'wallet',
        'socialNetworks',
        'level',
        'pic',
        'isActive',
        'isDel',
        'isMale',
        'register_user_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function groups(){
        return $this->hasMany(GroupMember::class)
            ->where('isDel' , 0);
    }

    public function getGender(): string
    {
        if ($this->isMale == 1)
            return 'آقا';
        return 'خانم';
    }

    public function getCreatedAt()
    {
        $date = new Carbon($this->created_at);
        return verta($date);
    }

    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function userType(): BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }

    public function registerUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'register_user_id');
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function activation() : string
    {
        if ($this->isActive == 1)
            return 'غیرفعال کردن';
        return 'فعال کردن';
    }
    public function getStatus() : string
    {
        if ($this->isActive == 1)
            return 'فعال';
        return 'غیرفعال';
    }
}
