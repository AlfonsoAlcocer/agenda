<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modificacione
 *
 * @property $id_modificacion
 * @property $id_modulo
 * @property $id_maestro
 * @property $id_grupo
 * @property $estado_modificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Grupo $grupo
 * @property Maestro $maestro
 * @property Modulo $modulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modificacione extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = "modificacion";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_modificacion', 'id_modulo', 'id_maestro', 'id_grupo', 'estado_modificacion'];


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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class, 'id_modulo', 'id_modulo');
    }
    
}
