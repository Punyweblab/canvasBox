<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'name'
    ];
    
    /**
     * Project to posts relationship
     */
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
