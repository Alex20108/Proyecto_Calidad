<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 *
 * @property $ID
 * @property $Nombre
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categorium extends Model
{
    
    protected $perPage = 20;
    protected $table = 'categoria';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'Nombre',];
    protected $guarded = ['ID'];
    protected $casts = [
    'Estado' => 'boolean',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'ID_Categoria', 'ID');
    }
    
    
}
