<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatorController extends Controller
{
    public function update(Request $request){
        $request->validate(['avator'=>'image']);
        #dd($request->all()); 
        return redirect(route('profile/edit'));
    }
}