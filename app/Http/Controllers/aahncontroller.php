<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aahncontroller extends Controller
{
        public function index(){
        // do other processing here
        return view("users/home");
        /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
}

 

 

