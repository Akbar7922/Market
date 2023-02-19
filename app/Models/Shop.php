<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Shop
 *
 * @property int $id
 * @property int $manager_user_id
 * @property string $name
 * @property string $manager_moblie
 * @property string $manager_natoinalCode
 * @property int $category_id
 * @property string $tell
 * @property string $addresses
 * @property int $main_shop_id
 * @property string $hoursOfWork
 * @property int $isOpen
 * @property int $isActive
 * @property string|null $logo
 * @property int $shopType
 * @property string|null $license
 * @property string $contract
 * @property string $start_contract_date
 * @property string $end_contract_date
 * @property string|null $manager_pic
 * @property int $register_user_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $isDel
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereAddresses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereEndContractDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereHoursOfWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereMainShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereManagerMoblie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereManagerNatoinalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereManagerPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereManagerUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereRegisterUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereStartContractDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereTell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    use HasFactory;
}
