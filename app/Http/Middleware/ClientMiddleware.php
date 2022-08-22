<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientMiddleware
{
    public function handle(Request $request, Closure $next)
  {
    if(!$request->session()->has('client')){
        return redirect()->route('user.login');
    }
    return $next($request);
  }
}
