<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ad_Usuario_Sistema extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='ad_usuarios_sistemas';
    //public $timestamps = false;
    protected $primaryKey = 'id_usuario';
    protected $username = 'id_usuario';
    protected function username()
    {
        return $this->id_usuario;
    }

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario', 'descripcion', 'estado','fecha_creacion','fecha_ultima_conexion','clave','id_persona','remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->clave;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'clave', 'remember_token',
    ];

/*
    public function isAdmin(){
        return $this->role()->id==='1';
    }
*/
}
