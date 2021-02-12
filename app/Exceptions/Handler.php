<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

  /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @param  string|null  $guard
    * @return mixed
    */
//    public function handle($request, Closure $next, $guard = null)
//    {
//        switch($guard){
//            case 'admin':
//                if (Auth::guard($guard)->check()) {
//                    return redirect('/admin');
//                }
//                break;
//            default:
//                if (Auth::guard($guard)->check()) {
//                    return redirect('/');
//                }
//                break;
//        }
//        return $next($request);
//    }
//
//    /**
//     * @param \Illuminate\Http\Request $request
//     * @param AuthenticationException $exception
//     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
//     */
//    protected function unauthenticated($request, AuthenticationException $exception)
//    {
//        if ($request->expectsJson()) {
//            return response()->json(['message' => $exception->getMessage()], 401);
//        }
//        $guard = Arr::get($exception->guards(), 0);
////        $guard = array_get($exception->guards(), 0);
//        switch($guard){
//            case 'admin':
//                $login = 'admin.login';
//                break;
//            default:
//                $login = 'login';
//                break;
//        }
//        return redirect()->guest(route($login));
//    }

}
