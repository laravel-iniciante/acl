<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Books;



class DefaultController extends Controller
{

	public function index()
	{

	    auth()->loginUsingId(5);
	    $book = Books::findOrFail(51);

	    if(!auth()->user()->can('show-book', $book)){
	    	abort(403,'Você não é dono deste livro');
	    }

	    // if( Gate::denies('show-book', $book) ){
	    // 	abort(403,'Você não é dono deste livro');
	    // }

	    return view('welcome', compact('book'));		
	}

}
