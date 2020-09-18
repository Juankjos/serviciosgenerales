<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WaterStoreRequest;
use App\Http\Requests\WaterUpdateRequest;
use Carbon\Carbon;
use App\WaterReports;

class WaterController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

 
public function index(Request $request)
{

$wreports = WaterReports::all();
return view('reportes.agua.index', ['wreports' => $wreports]);

}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{

$date = Carbon::parse(Carbon::now())->format('Y-m-d');
return view('reportes.agua.create',['date'=>$date]);  

}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */



public function store(WaterStoreRequest $request)
{
$water = new WaterReports();

$date = Carbon::parse($request->date)->format('Y-m-d');

$water->date = $date;
$water->start_hour = $request->start_hour;
$water->final_hour = $request->final_hour;
$water->initial_read = $request->initial_read;
$water->final_read = $request->final_read;
$water->cloration = $request->cloration;
$water->consumption = $request->consumption;
$water->consumption_total = $request->consumption_t;
$water->observations = $request->observations;
$water->user_report = auth()->id();

$water->save();

return redirect('reportes/agua');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
return view('reportes.agua.show',['wreport'=> WaterReports::findOrFail($id)]);
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{

return view('reportes.agua.edit',['wreport'=> WaterReports::findOrFail($id)]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */


public function update(WaterUpdateRequest $request, $id)
{
$water = WaterReports::findOrFail($id);

$water->initial_read = $request->initial_read;
$water->final_read = $request->final_read;
$water->cloration = $request->cloration;
$water->consumption = $request->consumption;
$water->consumption_total = $request->consumption_t;
$water->observations = $request->observations;

$water->update();   

return redirect('/reportes/agua');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
$wreport = WaterReports::findOrFail($id);

$wreport->delete();

return redirect('/reportes/agua');
}
}
