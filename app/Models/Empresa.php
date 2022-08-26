<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombrempresa
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
    
    static $rulesCreate = [
		'nombrempresa' => 'required',
		'direccion' => 'required',
		'emailempresa' => 'required',
		'telempresa' => 'required',
		'logo' => 'required',
		'web' => 'required',
    ];

    static $rulesEdit = [
      'nombrempresa' => 'required',
      'direccion' => 'required',
      'emailempresa' => 'required',
      'telempresa' => 'required',
      'web' => 'required',
      ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrempresa','direccion','emailempresa','telempresa','logo','web'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'empresa_id', 'id');
    }
    

}
