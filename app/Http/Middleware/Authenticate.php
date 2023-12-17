<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json(['error'=>'Unauthenticated.'], 401));
    }
}
