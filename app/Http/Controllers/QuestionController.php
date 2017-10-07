<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Question;

use Telegram;

class QuestionController extends Controller
{

	public function index() {
		$response = Telegram::getUpdates();

		return view('questions.index', compact('response'));
	}
    
	public function show(Question $question) {

		return view('questions.show', compact('question'));

	}

}
