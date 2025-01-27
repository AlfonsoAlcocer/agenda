<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HorariosOficiale
 *
 * @property $id_horariooficial
 * @property $cuatrimestre_horario_oficial
 * @property $id_modulo
 * @property $descripcion_modulo
 * @property $estado_horario
 * @property $created_at
 * @property $updated_at
 *
 * @property Modulo $modulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HorariosOficiale extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_horariooficial";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_horariooficial', 'cuatrimestre_horario_oficial', 'id_modulo', 'descripcion_modulo', 'estado_horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class, 'id_modulo', 'id_modulo');
    }
    
}
