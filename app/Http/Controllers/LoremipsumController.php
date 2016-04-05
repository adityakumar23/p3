<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
#added below for passing form data (adityak)
use Illuminate\Http\Request;
use \Badcow\LoremIpsum\Generator;
#use \Fzaninotto\Faker;

class LoremipsumController extends Controller {

    /**
    * Main page
    */
    public function getIndex() {
        /*return 'THIS PAGE IS THE HOME PAGE FOR LOREM IPSUM';*/
        return view('loremipsum.mainpage');
    }

    /**
     * Page for lorem ipsum text
     */
    public function getText() {
        #return 'THIS PAGE FOR GENERATING TEXT';
        return view('loremipsum.loripsgen');
    }

    public function postText(Request $request) {

        #return view('loremipsum.loripsgen')->with('length'=>$length);
        #check for error validati
        $this->validate($request,[
            'length' => 'required|numeric|min:1|max:5'
        ]);
        #dd($request);
        $generator = new Generator();
        $length = $request->input('length');
        $paragraphs = $generator->getParagraphs($request->input('length'));
        #var_dump($paragraphs);
        #$view = View::make('para',$paragraphs);
        #return view('loremipsum.postloremipsum',['para'=>$paragraphs]);
        #$view=View::make('loremipsum.postloremipsum',$paragraphs);
        #for($i=0; $i<sizeof($paragraphs);$i++){
        return view('loremipsum.postloremipsum')->with(['para'=>$paragraphs]);
        #}
        #return view($view);
        #->with('len',$length);
        #->with('paragraphs',$paragraphs);

        #return view('loremipsum.loripsgen',['length' => $length, 'para' => $paragraphs]);

    }
    /*
    * Page for generating users
    */
    public function getUser() {
        #return 'THIS PAGE FOR GENERATING USERS';
        return view('loremipsum.usergen');
    }

    public function postUser(Request $request) {

        #require_once '\vendor\fzaninotto\faker\src\autoload.php';
        #$faker = Faker\Factory::create();
        $this->validate($request,[
            'users' => 'required|numeric|min:1|max:14'
        ]);

        $temp = $request->input('users');
        $username = array('Amanda Cox','Bob Dylan','Celina Cook',
                        'Pat Tyrell','Charles Mayer','Dominic Tyson',
                        'Rachel Austin','Randy Tedd','Stephanie Miller',
                        'Steve Hand','Shao Zhang','Amrit Kapadia',
                        'Xueling Huang','Kapil Khanna');
        #echo $temp;
        $user_out = array_fill(0,$temp-1,0);
        for ($i=0; $i < $temp; $i++) {
            #echo $faker->name, "\n";
            $ind = rand(0,sizeof($username)-1);
            $user_out[$i] = $username[$ind];
            #echo $username[$i];
        }
        #return 'INPUT DONE';
        return view('loremipsum.postusergen')->with(['user'=>$user_out]);

    }
}
