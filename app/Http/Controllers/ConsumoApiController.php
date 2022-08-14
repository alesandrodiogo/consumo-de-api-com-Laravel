<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsumoApiController extends Controller
{
    public function index(){

            $user = 'your user name';
            $pass = 'your password';

        $response = Http::withBasicAuth($user, $pass)->get('https://api.github.com/users/alesandrodiogo/repos');
        dd($response->json());

    }
}
