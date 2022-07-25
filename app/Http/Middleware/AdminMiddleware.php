<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        
        if(auth()->user()->role == 1){
            // dd($request);
            return $next($request);
        }
        return redirect('/login')->with('success', 'Login to access website info.');
        
        
        
    }
}
