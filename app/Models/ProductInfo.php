<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $product_id
 * @property int $is_active
 * @property int $in_stock
 * @property string|null $last_stock_update
 * @property string|null $last_purchase_date
 * @property string|null $last_sale_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereLastPurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereLastSaleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereLastStockUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductInfo extends Model
{
    //
}
