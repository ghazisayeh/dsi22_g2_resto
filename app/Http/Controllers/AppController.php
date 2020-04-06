<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('welcome');
    }
   
    public function team(){
        $teamate=[[
            'name' => 'Ghazi Sayeh',
            'age' => '20',
            'email' => 'ghazisayeh01@gmail.com'],
            ['name' => 'Bilel Mersani',
            'age' => '21',
            'email' => 'bilelmersani@gmail.com'],
            ['name' => 'Abderrahim Kaabachi',
            'age' => '20',
            'email' => 'rhouma@gmail.com']
        ];
        return view('team', ['team' => $teamate]);
    }

    public function about(){
        //passage de variables du controller au view
        $author = 'DSI22g2';
        
        //1er methode
        return view('about', ['auteur' => $author]);

        //2eme methode
        //return view('about')->with('auteur' => $author);

        //3eme methode
        //return view('about', compact('author'));
    }
}
