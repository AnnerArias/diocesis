<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluacione
 *
 * @property $id
 * @property $proyecto_id
 * @property $evaluador_id
 * @property $fecha_evaluacion
 * @property $comentarios
 * @property $puntuacion
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['proyecto_id', 'evaluador_id', 'fecha_evaluacion', 'comentarios', 'puntuacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'evaluador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'proyecto_id', 'id');
    }
    
}
