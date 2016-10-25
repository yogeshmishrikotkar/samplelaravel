<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card;

/**
 * App\Note
 *
 * @property-read \App\Card $card
 * @mixin \Eloquent
 */
class Note extends Model
{
    public $fillable =['title'];
    //
    public function card() {
        return $this->belongsTo(Card::class);
    }
    
    public function pathFor() {
        return '/notes/'.$this->id.'/edit';
    }
}
