<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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

        if ($userRole == 'admin'  ){
            return redirect()->route('admin.Admin');
        }
        else{
            return $next($request);

        }
    }
}
