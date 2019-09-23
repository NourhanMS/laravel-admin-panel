<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    protected $titles_array = ['Mr', 'Mrs', 'Ms', 'Dr', 'Mx','professor'];

    public function get_all_titles()
    {
        return $this->titles_array;
    }

    public function get( $id )
    {
        return $this->titles_array[$id];
    }
}
