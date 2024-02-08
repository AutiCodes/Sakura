<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Spatie\Permission\Exceptions\UnauthorizedException as SpatieUnauthorizedException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     * 
     * Registers a custom response from unauthorized exceptions.
     * @param Throwable $exception
     * @param Request $request
     * @return Redirect /admin-login
     */
    public function register()
    {
        $this->renderable(function (SpatieUnauthorizedException $exception, $request) {
            return redirect('/admin-login');
        });
    }
}
