<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model {
    protected $table = 'audio';

    public function author() {
        return $this->hasOne('App\Models\Author');
    }
}
