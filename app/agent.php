<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class agent extends \Eloquent implements Authenticatable
{
    //
    use AuthenticableTrait;
}
