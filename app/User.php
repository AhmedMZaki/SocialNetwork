<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
  public function getAuthIdentifierName(){}
  public function getAuthIdentifier(){}
  public function getAuthPassword(){}
  public function getRememberToken(){}
  public function setRememberToken($value){}
  public function getRememberTokenName(){}

}
