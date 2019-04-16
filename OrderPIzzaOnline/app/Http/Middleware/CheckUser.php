<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUser
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
        $user = Auth::user();
        $userRole = $user->role;

        if ($userRole == 'user'  ){
            return redirect()->route('index.Index');
        }
        else{
            return $next($request);

        }
    }
}
