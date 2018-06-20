<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archiever extends Model
{
    protected $table = 'archiever';
    protected $fillable = [
    	'judul', 'isi', 'user_id', 'created_at', 'updated_at'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
