<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return Redirect::to("test-completado");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
    public function Ascending($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    public function thanksPage(Request $request)
    {
        $array1 = $request->input('administrative');
        $array2 = $request->input('humanistic');
        $array3 = $request->input('artistic');
        $array4 = $request->input('medicine');
        $array5 = $request->input('engineering');
        $array6 = $request->input('science');
        $array7 = $request->input('security');
        $administrative = array_sum($array1);
        $humanistic = array_sum($array2);
        $artistic = array_sum($array3);
        $medicine = array_sum($array4);
        $engineering = array_sum($array5);
        $science = array_sum($array6);
        $security = array_sum($array7);
        $chaside = array("administrative" => $administrative, "humanistic" => $humanistic, "artistic" => $artistic, "medicine" => $medicine, "engineering" => $engineering, "science" => $science, "security" => $security);

        uasort($chaside, array($this, "Ascending"));

        $last = end($chaside);
        $highScore = key($chaside);
        array_pop($chaside);
        $last1 = end($chaside);
        $highScore2 = key($chaside);

        DB::table('profiles')->insert([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'numero' => $request->input('numero'),
            'correo' => $request->input('correo'),
            'colegio' => $request->input('colegio'),
            'C' => $administrative,
            'H' => $humanistic,
            'A' =>  $artistic,
            'S' => $medicine,
            'I' => $engineering,
            'D' => $science,
            'E' => $security,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        //envio de gmail a cada estudiante
        $data["email"] = "quesolauranico@gmail.com";
        $data["title"] = "gmail seend exit";
        $data["body"] = "email test";

        $pdf = PDF::loadView('mail', $data);
        Mail::send('mail', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "test.pdf");
        });
        // print_r($highScore);
        // print_r($highScore2);
        return view('profiler', ["highScore" => $highScore, "highScore2" => $highScore2]);
        return  View('mail', ["highScore" => $highScore, "highScore2" => $highScore2]);
    }
}
