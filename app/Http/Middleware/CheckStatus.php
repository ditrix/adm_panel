<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\Support\Facades\Auth;

//use App\Models\User;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);   /////// ???????????? ERROR ??
        //$user = Auth::user();
        if(Auth::check() && Auth::user()->isAdministrator()) {
            return $next($request);
        } else {
            return redirect('/');
        }

    }
}
