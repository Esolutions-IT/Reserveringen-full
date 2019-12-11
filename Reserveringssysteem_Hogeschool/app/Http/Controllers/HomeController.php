<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
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

        $db_count_30 = DB::table('events')->where('status', '0')->count();
        $db_count_7 = DB::table('events')->where('status', '1')->whereDate('date', '>', Carbon::now()->subDays(7))->count();
        $db_count_1 = DB::table('events')->where('status', '1')->whereDate('date', '>', Carbon::now()->subDays(1))->count();

        return view('home', compact('db', 'db_count', 'db_count_30', 'db_count_7', 'db_count_1'));
    }

    public function accept($id){
        $data=['status'=>1];
        DB::table('events')->where('id', $id)->update($data);
        return view('accept', compact('data'));
    }

    public function destroy($id) {
        DB::table('events')->delete($id);
        return view('delete');
    }
}
