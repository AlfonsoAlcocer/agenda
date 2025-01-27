<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modulo
 *
 * @property $id_modulo
 * @property $id_maestro
 * @property $id_grupo
 * @property $dia_modulo
 * @property $hora_inicio
 * @property $hora_fin
 * @property $materia_modulo
 * @property $estado_modulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Grupo $grupo
 * @property Maestro $maestro
 * @property HistorialHorario[] $historialHorarios
 * @property HorarioOficial[] $horarioOficials
 * @property Modificacione[] $modificaciones
 * @property Solicitude[] $solicitudes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modulo extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_modulo";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_modulo', 'id_maestro', 'id_grupo', 'dia_modulo', 'hora_inicio', 'hora_fin', 'materia_modulo', 'estado_modulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo()
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'id_grupo', 'id_grupo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maestro()
    {
        return $this->belongsTo(\App\Models\Maestro::class, 'id_maestro', 'id_maestro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialHorarios()
    {
        return $this->hasMany(\App\Models\HistorialHorario::class, 'id_modulo', 'id_modulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarioOficials()
    {
        return $this->hasMany(\App\Models\HorarioOficial::class, 'id_modulo', 'id_modulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modificaciones()
    {
        return $this->hasMany(\App\Models\Modificacione::class, 'id_modulo', 'id_modulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudes()
    {
        return $this->hasMany(\App\Models\Solicitude::class, 'id_modulo', 'id_modulo');
    }
    
}
