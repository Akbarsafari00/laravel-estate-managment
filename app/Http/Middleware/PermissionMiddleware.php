<?php namespace App\Http\Middleware;

use App\Core\Adapters\Theme;
use Auth;
use Closure;

class PermissionMiddleware
{

    public function handle($request, Closure $next,$permission)
    {

        if ($request->user()->hasPermissionTo($permission)) {
            return $next($request);
        }

        return redirect('/unauthorized');

    }

}
