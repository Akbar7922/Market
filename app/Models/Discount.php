<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Discount
 *
 * @property int $id
 * @property int $shop_id
 * @property int $shop_product_id
 * @property int $category_id
 * @property int $brand_id
 * @property float $discount_price
 * @property float $discount_percentage
 * @property int $user_id
 * @property int $group_id
 * @property string $start_date
 * @property string $end_date
 * @property string $discount_code
 * @property int $isActive
 * @property int $register_user_id
 * @property int $isDel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Discount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discount query()
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereDiscountCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereRegisterUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereShopProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discount whereUserId($value)
 * @mixin \Eloquent
 */
class Discount extends Model
{
    use HasFactory;
}
