<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsuarioMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     // Vai verificar se o está logado, e se estiver vai verificar se o usuário é o mesmo que o nome que está no user_type
    public function handle(Request $request, Closure $next, $user_type)
    {
        if(auth()->check() && auth()->user()->user_type === $user_type){
            return $next($request);
        }

        abort('403,"acesso não autorizado');
    }
}


