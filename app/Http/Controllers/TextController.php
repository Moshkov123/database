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
    public function add(Request $request)
    {

        $validated = $request->validate([
            'heading' => 'required|string|max:25',
            'text'    => 'required|string',
            'categorie_id'    => 'required',
        ]);

        Text::create($validated);
        $texts = Text::all();

        return view('text', ['texts' => $texts]);
    }
}
