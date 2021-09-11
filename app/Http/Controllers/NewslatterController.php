<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Newslatter;
use Exception;
use Illuminate\Validation\ValidationException;


class NewslatterController extends Controller
{
    public function __invoke(Newslatter $newslatter){

    request()->validate(['email' => 'required|email']);

    try {
        // $newslatter = new Newslatter();
        $newslatter->subscribe(request('email'));
    } 
    catch (Exception $e) {
        throw ValidationException::withMessages([
            'email' => 'This email could not be add to our newslatter',
        ]);
    }

    return redirect('/')->with('success', 'You are new sighned op for my our newslatter :)');

    }
}