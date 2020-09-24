<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  
     public function show($id)
    {

    //méthode ORM, qui utilise les requètes et renvoi qqch ( sans avoir besoin de taper une requète SQL ou autre)
       //$user =  User::get();
        //$user = User::where('id', $id)->first();
        $user = User::find($id);


        $emprunt = DB::table('emprunts')
        ->join('adherents','AdherentId','=','adherents.id')
        ->select("*")
        ->where('emprunts.AdherentId', "=",$id)
        ->get();
        //dd==> outils de debugage
       
       dd( DB::select('SELECT * FROM emprunts'));
       DB::
    //     $loanHistory = DB::table('loans')
    //     ->join('users', 'user_id', '=', 'users.id')
    //     ->select("*")
    //     ->where('loans.user_id', "=", $book->id)
    //     ->get();
    // // dd($loanHistory);
        
        return view('user', compact('user'));
    }
}
