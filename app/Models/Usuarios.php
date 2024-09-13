<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'admin'
    ];
    function getAuthPasswordName(){
        return 'password';
    }
    function getAuthIdentifierName()
    {
        return 'id';
    }

    function getAuthIdentifier()
    {
        return $this->id;
    }

    function getAuthPassword()
    {
        return $this->password;
    }
    function getRememberToken()
    {

    }
    function setRememberToken($value)
    {

    }
    function getRememberTokenName()
    {

    }
}
