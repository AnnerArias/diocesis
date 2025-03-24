<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $tipo
 * @property $fecha_inicio
 * @property $fecha_finalizacion_estimada
 * @property $estado_id
 * @property $empresa_id
 * @property $usuario_responsable_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property Estado $estado
 * @property User $user
 * @property Documento[] $documentos
 * @property Evaluacione[] $evaluaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'tipo', 'fecha_inicio', 'fecha_finalizacion_estimada', 'estado_id', 'empresa_id', 'usuario_responsable_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'empresa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_responsable_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany(\App\Models\Documento::class, 'id', 'proyecto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciones()
    {
        return $this->hasMany(\App\Models\Evaluacione::class, 'id', 'proyecto_id');
    }
    
}
