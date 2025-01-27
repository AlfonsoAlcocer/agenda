<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $id_maestro
 * @property $id_usuario
 * @property $nombre_maestro
 * @property $apellidos_maestro
 * @property $idioma_maestro
 * @property $estado_maestro
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Modificacione[] $modificaciones
 * @property Modulo[] $modulos
 * @property Solicitude[] $solicitudes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maestro extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "id_maestro";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_maestro', 'id_usuario', 'nombre_maestro', 'apellidos_maestro', 'idioma_maestro', 'estado_maestro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modificaciones()
    {
        return $this->hasMany(\App\Models\Modificacione::class, 'id_maestro', 'id_maestro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modulos()
    {
        return $this->hasMany(\App\Models\Modulo::class, 'id_maestro', 'id_maestro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudes()
    {
        return $this->hasMany(\App\Models\Solicitude::class, 'id_maestro', 'emisor_solicitudes');
    }
    
}
