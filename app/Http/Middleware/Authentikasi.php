<?php

namespace App\Http\Middleware;

use Closure;

class Authentikasi
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
        if(!session('user')){
            return redirect('login')->withErrors('Silahkan Login Untuk Mengakses Halaman');
        }
        return $next($request);
    }
}
