<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{

    protected $fillable = ['body', 'user_id'];


    /**
     * Return User who is an owner of the Jokes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }


}
