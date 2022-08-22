<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $direccion
 * @property $emailempresa
 * @property $telempresa
 * @property $logo
 * @property $web
 *
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'emailempresa' => 'required',
		'telempresa' => 'required',
		'logo' => 'required',
		'web' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','emailempresa','telempresa','logo','web'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'empresa_id', 'id');
    }
    

}
