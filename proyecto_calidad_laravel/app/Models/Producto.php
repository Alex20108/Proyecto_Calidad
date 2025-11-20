<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $ID
 * @property $Nombre
 * @property $Precio
 * @property $Material
 * @property $Descripcion
 * @property $ID_Categoria
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Categorium $categorium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 20;
    protected $table = 'producto';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ID', 'Nombre', 'Precio', 'Material', 'Descripcion', 'ID_Categoria', 'Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorium()
    {
        return $this->belongsTo(\App\Models\Categorium::class, 'ID_Categoria', 'ID');
    }
    
}
