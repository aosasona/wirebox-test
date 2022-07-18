<?php

namespace App\Http\Controllers;

use \App\Models\DictionaryTerm;


use Illuminate\Http\Request;

class DictionaryTermController extends Controller
{
    // Get all dictionary terms
    public function index()
    {
        $dictionary_terms = DictionaryTerm::with("user")->get()->sortBy("term");

        return view('dictionary_terms.index', compact('dictionary_terms'));
    }

    // Add a new dictionary term -  View
    public function create()
    {
        return view('dictionary_terms.add');
    }

    // Add a new dictionary term -  POST
    public function store(Request $request)
    {

        $form_data = $request->validate([
            'term' => 'required|min:2|string|unique:dictionary_terms|max:255',
            'description' => 'required|min:6|string',
        ]);

        $term = $request->old('term');
        $description = $request->old('description');


        $dictionary_term = new DictionaryTerm();
        $dictionary_term->term = $request->term;
        $dictionary_term->description = $request->description;
        $dictionary_term->save();
        return redirect()->back()->with('success', 'Dictionary term added successfully')->withErrors($form_data);
    }
}
