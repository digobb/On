<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;


class Usuario extends RModel implements Authenticatable // https://laravel.com/docs/8.x/authentication#the-authenticatable-contract
{
    protected $table = "usuarios"; //tabela que irá visualizar no bd
    protected $fillable = ['login', 'password', 'nome', 'celular', 'dataNascimento'];


    public function getAuthIdentifierName()
    {
        return $this->getKey();
    }

    public function getAuthIdentifier()
    {
        return $this->login;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getRememberToken()
    {
    }
    public function setRememberToken($value)
    {
    }
    public function getRememberTokenName()
    {
    }
}
