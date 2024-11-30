<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $key
 * @property string $value
 * @property int $is_active
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ConfigueFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Configue whereValue($value)
 * @mixin \Eloquent
 */
class Configue extends Model
{
    /** @use HasFactory<\Database\Factories\ConfigueFactory> */
    use HasFactory;
}
