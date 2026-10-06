<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
       public function index()
    {
        $text = Text::all();
    
        return view('text', ['texts' => $text ]);
    }
}
