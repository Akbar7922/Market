<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advertising
 *
 * @property int $id
 * @property string $title
 * @property string $pic
 * @property string $link
 * @property string $start_date
 * @property string $end_date
 * @property int $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertising whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Advertising extends Model
{
    use HasFactory;
}
