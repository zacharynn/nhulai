<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
    protected $table = 'author';

    protected $fillable = ['name'];

    public function kinh() {
        return $this->hasOne('App\Models\Kinh');
    }

    public function audios() {
        return $this->hasMany('App\Models\Audio');
    }
}
