<?php

namespace App\Http\Middleware;

use Closure;

class PatientLoggedIn
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
        if($request->session()->get('is_patient')){
            return $next($request);
        } else {
            return redirect(route('patient.index'));
        }

    }
}