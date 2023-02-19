<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $unique_name
 * @property int $isGroup
 * @property string $pic
 * @property int $register_user_id
 * @property int $isActive
 * @property int $isDel
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereIsGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereRegisterUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUniqueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Group extends Model
{
    use HasFactory;
}
