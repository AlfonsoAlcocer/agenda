<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitude
 *
 * @property $id_solicitud
 * @property $emisor_solicitudes
 * @property $id_modulo
 * @property $estado_solicitud
 * @property $descripcion_solicitud
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro $maestro
 * @property Modulo $modulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_solicitud";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_solicitud', 'emisor_solicitudes', 'id_modulo', 'estado_solicitud', 'descripcion_solicitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maestro()
    {
        return $this->belongsTo(\App\Models\Maestro::class, 'emisor_solicitudes', 'id_maestro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class, 'id_modulo', 'id_modulo');
    }
    
}
