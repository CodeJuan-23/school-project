<?php
 
namespace App\Models\v1;

use BinaryCabin\LaravelUUID\Traits\HasUUID; 
use Illuminate\Database\Eloquent\Model;
 
class Alumno extends Model
{
    use HasUUID;

    protected $table = 'alumnos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
}
