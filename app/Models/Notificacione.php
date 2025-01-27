<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacione
 *
 * @property $id_notificacion
 * @property $emisor_notificacion
 * @property $receptor_notificacion
 * @property $descripcion_notificacion
 * @property $estado_notificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro $maestro
 * @property Maestro $maestro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notificacione extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_notificacion";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_notificacion', 'emisor_notificacion', 'receptor_notificacion', 'descripcion_notificacion', 'estado_notificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maestro()
    {
        return $this->belongsTo(\App\Models\Maestro::class, 'emisor_notificacion', 'id_maestro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maestros()
    {
        return $this->belongsTo(\App\Models\Maestro::class, 'receptor_notificacion', 'id_maestro');
    }
    
}
