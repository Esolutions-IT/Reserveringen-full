<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\PDF;

class KlantenController extends Controller
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
        $db_get_1 = DB::table('klanten_reservering')->get();



        return view('klanten.overzicht', compact('db_get_1'));
    }

    public function get_klanten_data(Request $request){
        $klanten_data = DB::table('klanten_reservering')->where('id', $request->id_pdf)->get();
        return $klanten_data;
    }

    public function klantpdf(Request $request){
        $klanten_data = $this->get_klanten_data($request);
        return view('klanten.klantenpdf')->with('klanten_data', $klanten_data);
    }

    public function pdf(Request $request){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->covert_costumer_data_to_html($request));
        return $pdf->stream();
    }

    public function covert_costumer_data_to_html(Request $request)
    {
        $klanten_data = $this->get_klanten_data($request);
        $output = '
     <h3 align="center">Klant Informatie</h3><br />
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Volledige naam</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Telefoonnummer</th>
   </tr>
     ';
        foreach ($klanten_data as $customer) {
            $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">' . $customer->achternaam . ", " . $customer->voornaam . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer->email . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer->telefoon . '</td>
      </tr>
      
          
      
     
     
      
      ';
            }
            $output .= '</table><br />';

        $output .= '<table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Plaats</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Adres</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postcode</th>
   </tr>
     ';
        foreach ($klanten_data as $customer2) {
            $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">' . $customer2->plaats . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer2->adres . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer2->postcode . '</td>
      </tr>
      
      </table>';
        }
            return $output;
        }

    public function destroy($id) {
        DB::table('klanten')->delete($id);
        return view('delete');
    }

}


