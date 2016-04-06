<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \Badcow\LoremIpsum\Generator;


class LoremipsumController extends Controller {

    /*
    =========================
    * Main page
    =========================
    */
    public function getIndex() {

        return view('loremipsum.mainpage');
    }

    /*
    /*==============================
     * Page for lorem ipsum text
     ================================
     */
    public function getText() {

        return view('loremipsum.loripsgen');
    }

    public function postText(Request $request) {


        $this->validate($request,[
            'length' => 'required|numeric|min:1|max:23'
        ]);

        $generator = new Generator();
        $length = $request->input('length');
        $paragraphs = $generator->getParagraphs($request->input('length'));

        return view('loremipsum.postloremipsum')->with(['para'=>$paragraphs]);

    }
    /*
    ===============================
    * Page for generating users
    ===============================
    */
    public function getUser() {

        return view('loremipsum.usergen');
    }

    public function postUser(Request $request) {


        $this->validate($request,[
            'users' => 'required|numeric|min:1|max:14'
        ]);

        $temp = $request->input('users');
        $username = array('Amanda Cox','Bob Dylan','Celina Cook',
                        'Pat Tyrell','Charles Mayer','Dominic Tyson',
                        'Rachel Austin','Randy Tedd','Stephanie Miller',
                        'Steve Hand','Shao Zhang','Amrit Kapadia',
                        'Xueling Huang','Kapil Khanna');
        
        $user_out = array_fill(0,$temp-1,0);
        for ($i=0; $i < $temp; $i++) {

            $ind = rand(0,sizeof($username)-1);
            $user_out[$i] = $username[$ind];

        }

        return view('loremipsum.postusergen')->with(['user'=>$user_out]);

    }
}
