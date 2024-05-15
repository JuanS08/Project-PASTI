<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class CheckToken
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('token')) {
            return redirect('/guest/login')->with('error', 'User must log in first');
        }

        return $next($request);
    }
}