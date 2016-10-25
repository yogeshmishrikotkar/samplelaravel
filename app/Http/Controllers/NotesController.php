<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller {

    //
    public function addNewNote(Request $request, Card $card) {
        
        $this->validate($request,[
            'title'=>'required'
            ]);
        $note = new Note;
        $note->title = $request->title;
        $card->notes()->save($note);
        return back();
    }

    public function edit(Note $note) {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return redirect('/cards/' . $note->card_id);
    }

}
