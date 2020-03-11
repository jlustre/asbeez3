<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body'];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function question() {
    	return $this->belongsTo(Question::class);
    }

    public function getBodyHtmlAttribute() {
        return \Parsedown::Instance()->Text($this->body);
    }
}
