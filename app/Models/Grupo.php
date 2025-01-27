<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 *
 * @property $id_grupo
 * @property $nombre_grupo
 * @property $carrera_grupo
 * @property $num_alumnos_grupo
 * @property $estado_grupo
 * @property $created_at
 * @property $updated_at
 *
 * @property Modificacione[] $modificaciones
 * @property Modulo[] $modulos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_grupo";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_grupo', 'nombre_grupo', 'carrera_grupo', 'num_alumnos_grupo', 'estado_grupo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modificaciones()
    {
        return $this->hasMany(\App\Models\Modificacione::class, 'id_grupo', 'id_grupo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modulos()
    {
        return $this->hasMany(\App\Models\Modulo::class, 'id_grupo', 'id_grupo');
    }
    
}
