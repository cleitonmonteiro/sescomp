<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exc){
        
        if($request->expectsJson()){//tratar da API
            return response()->json(['message'=>$exc->getMessage()], 401);
        }
        $guard = $exc->guards()[0];

        $pag = "";
        switch($guard) {
            case 'admin':
                $pag = "admin.login";
                break;
            case 'presenter':
                $pag = "presenter.login";
                break;
            case 'supporter':
                $pag = "supporter.login";
                break;
            default:
                $pag = "login";
                break;
        }
         
        return redirect()->guest(route($pag));
    }
}
