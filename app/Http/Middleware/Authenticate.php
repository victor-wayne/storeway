<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        if($request->path() == 'order-detail') return $next($request);

        if(auth()->user()->type != 'admin'){
            $message = ' Cliente solo en esta seccion';
            return redirect()->route('store')->with('message', $message);
        }
        return $next($request);
    }
}
