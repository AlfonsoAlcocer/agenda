<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialHorario
 *
 * @property $id_historial
 * @property $cuatrimestre_horario
 * @property $id_modulo
 * @property $descripcion_modulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Modulo $modulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialHorario extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_historial";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_historial', 'cuatrimestre_horario', 'id_modulo', 'descripcion_modulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class, 'id_modulo', 'id_modulo');
    }
    
}
