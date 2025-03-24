<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 *
 * @property $id
 * @property $proyecto_id
 * @property $nombre
 * @property $tipo
 * @property $fecha_carga
 * @property $ruta_almacenamiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Documento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['proyecto_id', 'nombre', 'tipo', 'fecha_carga', 'ruta_almacenamiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'proyecto_id', 'id');
    }
    
}
