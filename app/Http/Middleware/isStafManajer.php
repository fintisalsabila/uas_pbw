<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isStafManajer
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
        // baca siapa user yg sedang login
        $user = Auth::user();
        // Jika user belum login ATAU role user bukan Staf
        if (!$user || 
            !($user->role == 'Staf' || $user->role == 'Manajer') ) { 
            return redirect('/login');
        }
        return $next($request);
    }
}
