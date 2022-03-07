<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewslettersController extends Controller
{

    public function index()
    {
        return view('newsletters');
    }

    public function store(Request $request){
        $request->validate($this->rules());

        return $request;

    }

    private function rules() {
        return [ 'newsletter' => 'required|min:50'];
    }

}
