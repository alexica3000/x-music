<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

/**
 * Class IsAdminMiddleware
 * @package App\Http\Middleware
 */
class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var User $user */
        $user = auth()->user();

        if ($user && $user->isAdmin()) {
            return $next($request);
        }

        return redirect('/');
    }
}
