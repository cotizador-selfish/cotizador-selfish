<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetTitleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Verificar si hay una ruta definida en la solicitud
        if ($request->route()) {
            // Obtener el nombre de la ruta actual
            $routeName = $request->route()->getName();

            // Establecer el título de la página basado en la ruta
            switch ($routeName) {
                case 'home':
                    $title = 'Página de inicio';
                    break;
                case 'panel2':
                    $title = 'Panel 2';
                    break;
                default:
                    $title = 'Título predeterminado'; // Puedes establecer un título predeterminado si no coincide con ninguna ruta específica
                    break;
            }

            // Compartir el título con todas las vistas
            view()->share('title', $title);
        } else {
            // Si no hay una ruta definida, establecer un título predeterminado
            view()->share('title', 'Título predeterminado');
        }

        return $next($request);
    }
}
