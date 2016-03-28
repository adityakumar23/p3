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

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('length'));
        #return view('loremipsum.loripsgen')->with('para',$paragraphs);
        echo implode('<p>', $paragraphs);

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
        $temp = $request->input('users');
        $username = array('user1','user2','user3','user4','user5');
        #echo $temp;
        for ($i=0; $i < $temp; $i++) {
            #echo $faker->name, "\n";
            echo $username[$i];

        }
        #return 'INPUT DONE';

    }
}
