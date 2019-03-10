<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function phonebook(){
        return Phonebook::all();
    }
    public function deletecontact(Request $request){

        $update = Phonebook::find($request->id);
        $update->deleted = $request->deleted;
        $update->save();
        return $update;
    }

    public function delete(Request $request){

        $update = Phonebook::find($request->id);
        $update->delete();
    }
}
