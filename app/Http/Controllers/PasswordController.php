<?php

namespace App\Http\Controllers;

use App\Models\password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numero = DB::table('passwords')
            ->select('numero')
            ->get();
        // $x = ['valor' => $numero];
        return view('password_code', ['numero' => $numero]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function show(password $password)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function edit(password $password)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, password $password)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function destroy(password $password)
    {
        //
    }
}
