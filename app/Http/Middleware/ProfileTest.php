<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileTest
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
        // $numero = DB::table('passwords')
        //     ->select('numero')
        //     ->get();
        // foreach ($numero as $numeros) {
        //     $numeros->numero;
        // }
        // // if ($request->input('password') == $numeros) {
        // //     return redirect()->route('welcome');
        // // }
        // if (!$request->input('button2') == "block") {
        //     return redirect()->route('welcome');
        // }

        return $next($request);
    }
}
