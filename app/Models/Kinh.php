<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kinh extends Model {
    protected $table = 'kinh';

    protected $fillable = ['title','desc'];

    public function authors() {
        return $this->hasMany('App\Models\Author');
    }
}
