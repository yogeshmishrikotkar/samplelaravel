<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;

/**
 * App\Card
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Note[] $notes
 * @mixin \Eloquent
 */
class Card extends Model
{
    
    public function notes(){
      return  $this->hasMany(Note::class);
    }
    
    public function pathTo() {
       return '/cards/'.$this->id;
    }
}
