<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompresorStoreRequest;
use App\Http\Requests\CompresorUpdateRequest;
use Carbon\Carbon;
use App\CompresorReports;
use App\User;

class CompresorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $creports = CompresorReports::all();
        return view('reportes.compresor.index', ['creports' => $creports]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::parse(Carbon::now())->format('Y-m-d');
        return view('reportes.compresor.create',['date'=>$date]);  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompresorStoreRequest $request)
    {

        $compresor = new CompresorReports();

        $date = Carbon::parse($request->date)->format('Y-m-d');

        $compresor->date = $date;
        $compresor->oil_level = $request->level;
        $compresor->temperature = $request->temperature;
        $compresor->observations = $request->observations;
        $compresor->user_report = auth()->id();

        $compresor->save();

        return redirect('reportes/compresor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compresor = CompresorReports::findOrFail($id);
        $user = User::findOrFail($compresor->user_report);
        return view('reportes.compresor.show',[  'creport'=> $compresor , 'ureport'=> $user ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('reportes.compresor.edit',[   'creport'=> CompresorReports::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompresorUpdateRequest $request, $id)
    {

        $compresor = CompresorReports::findOrFail($id);

        $compresor->oil_level = $request->level;
        $compresor->temperature = $request->temperature;
        $compresor->observations = $request->observations;

        $compresor->update();

        return redirect('reportes/compresor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creport = CompresorReports::findOrFail($id);
        $creport->delete();
        return redirect('/reportes/compresor');
    }

    public function pdf($id){
    
        $compresor = CompresorReports::findOrFail($id);
        $user = User::findOrFail($compresor->user_report);
        
        $pdf = \PDF::loadView('/reportes/compresor/pdf', compact('compresor','user'));
        return $pdf->stream('compresorReport');
    }

}
