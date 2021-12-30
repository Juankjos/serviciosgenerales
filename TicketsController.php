<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use Carbon\Carbon;
use DB;

class TicketsController extends Controller
{
    public function index(Request $request)
    {
        $DateIni = $request->get('DateIni');
        $DateEnd = $request->get('DateEnd');

    if($DateIni == '' || $DateEnd == ''){

            $DateIni = '2021-01-01';
            $DateEnd = Carbon::parse(Carbon::now())->timezone('America/Mexico_City')->format('Y-m-d');

            $creports = DB::table('ticket_reports')
            ->select('ticket_reports.id', 'ticket_reports.date', 'ticket_reports.date');

            return view('tickets.index', ['creports' => $creports, 'DateIni' => $DateIni, 'DateEnd' => $DateEnd]);
        }else{

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view('tickets.create');
    }

}