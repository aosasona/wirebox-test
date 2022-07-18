<?php

namespace App\Http\Controllers;

use \App\Models\DictionaryTerm;


use Illuminate\Http\Request;

class DictionaryTermController extends Controller
{
    // Get all dictionary terms
    public function index()
    {
        $dictionaryTerms = DictionaryTerm::all();
        return view('dictionary_terms.index', compact('dictionaryTerms'));
    }

    // Add a new dictionary term -  View
    public function createView()
    {
        return view('dictionary_terms.add');
    }

    // Add a new dictionary term -  POST
    public function create(Request $request)
    {
        if (!$request->has('term') || !$request->has('description')) {
            return redirect()->route('dictionary-terms-add')->with('error', 'Please fill in all fields');
        }
        $dictionaryTerm = new DictionaryTerm();
        $dictionaryTerm->term = $request->term;
        $dictionaryTerm->description = $request->description;
        $dictionaryTerm->save();
        dd($request->all());
        // return redirect()->route('dictionary-terms-index');
    }
}
