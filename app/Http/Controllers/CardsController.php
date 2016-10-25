<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Card;
class CardsController extends Controller
{
    //
    
    public function index(){
       // echo 'dddddd'.database_path('database.sqlite');
//        $cards = DB::table('cards')->get();
//        
//        foreach ($cards as $card) {
//            echo ' ' . $card->title;
//        }
//        echo '2222222222';
//        return  view('card.index',  compact('cards'));
        $cards = Card::all();
        return   view('card.index',  compact('cards'));
    }
    
     public function show(Card $card){
        return   view('card.show',  compact('card'));
    }
}
