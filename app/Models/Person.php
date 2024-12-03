<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person query()
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $document_number
 * @property string $birthdate
 * @property string $type
 * @property string $status
 * @property string $notes
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereUpdatedAt($value)
 * @mixin IdeHelperPerson
 * @property string|null $photo
 * @property string|null $phone
 * @property string|null $cellphone
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person whereCellphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Person wherePhoto($value)
 * @mixin \Eloquent
 */
class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'email',
        'document_number',
        'birthdate',
        'type',
        'status',
        'notes',
        'photo',
        'phone',
        'cellphone'
    ];
}
