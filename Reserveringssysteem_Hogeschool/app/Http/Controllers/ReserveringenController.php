<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ReserveringenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $db = DB::table('events')->where('status', '0')->get();
        $db_count = DB::table('events')->where('status', '1')->count();

        $db_get_30 = DB::table('events')->where('status', '0')->get();
        $db_get_7 = DB::table('events')->where('status', '1')->whereDate('date', '>', Carbon::now()->subDays(7))->get();
        $db_get_1 = DB::table('events')->where('status', '1')->whereDate('date', '>', Carbon::now()->subDays(1))->get();

        return view('reserveringen.overzicht', compact('db', 'db_count', 'db_get_30', 'db_get_7', 'db_get_1', 'data2'));
    }

    public function toevoegen()
    {
        return view('reserveringen.toevoegen');
    }

    public function toevoegendb(Request $request)
    {
        $data = ['title'=>$request->time, 'voornaam'=>$request->voornaam, 'achternaam'=>$request->achternaam, 'email'=>$request->email, 'plaats'=>$request->plaats, 'adres'=>$request->adres, 'postcode'=>$request->postcode, 'telefoonnummer'=>$request->tel, 'tijd'=>$request->time, 'date'=>$request->datum, 'status'=>1];
        DB::table('events')->insert($data);

        return redirect('http://localhost/Reserveringssysteem_Hogeschool/public/reserveringen/toevoegen');
    }

        public function edit_r(Request $request)
    {
        $db_get_1 = DB::table('events')->where('id', $request->idr)->get();



        return view('reserveringen.edit', compact('db_get_1'));
    }

}
