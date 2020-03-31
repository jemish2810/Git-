<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->user()->isAdmin == 1) {
            return $next($request);
        }else{
            echo "<script>
                alert('You are not Admin..');
                window.location.href='/home';
                </script>";
        }

    }
}
