<?php

namespace App\Http\Middleware;

use Closure;

class IsMainDealer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('jabatan') && session('jabatan') != 'main_dealer'){
            return redirect('home');
        }
        return $next($request);
    }
}
