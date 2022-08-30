<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre1
 * @property $apellido1
 * @property $apellido2
 * @property $emailempleado
 * @property $telempleado
 * @property $empresa_id
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'nombre1' => 'required|string|max:50',
		'apellido1' => 'required|string|max:25',
    'apellido2' => 'nullable',
		'emailempleado' => 'required|email',
		'telempleado' => 'required|numeric',
		'empresa_id' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre1','apellido1','apellido2','emailempleado','telempleado','empresa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
    

}
