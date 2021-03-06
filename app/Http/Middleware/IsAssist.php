<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAssist
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
        if( Auth::user()->admin == 2 || Auth::user()->admin == 1){
            
            return $next($request);
        }else{
            return redirect()->back()->with('error','الصفحة التي تحاول الوصول لها ليست ضمن صلاحياتك');
        }
    }
}
