<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $telefono
 * @property $correo_electronico
 * @property $contacto_principal
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'direccion', 'telefono', 'correo_electronico', 'contacto_principal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany(\App\Models\Proyecto::class, 'id', 'empresa_id');
    }
    
}
