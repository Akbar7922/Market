<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopOrderProduct
 *
 * @property int $id
 * @property int $shop_order_id
 * @property int $shop_product_id
 * @property float $price
 * @property int $count
 * @property int $discount_id
 * @property int $register_user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $registerUser
 * @property-read \App\Models\ShopOrder|null $shopOrder
 * @property-read \App\Models\ShopProduct|null $shopProduct
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereRegisterUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereShopOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereShopProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShopOrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_order_id',
        'shop_product_id',
        'discount_id',
        'price',
        'count',
        'register_user_id',
    ];
    public function shopOrder(){
        return $this->belongsTo(ShopOrder::class);
    }
    public function shopProduct(){
        return $this->belongsTo(ShopProduct::class);
    }
    public function registerUser(){
        return $this->belongsTo(User::class , 'register_user_id');
    }
}
