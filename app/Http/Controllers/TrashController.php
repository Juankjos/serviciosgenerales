<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrashStoreRequest;
use App\Http\Requests\TrashUpdateRequest;
use Carbon\Carbon;
use App\TrashReports;
use App\Areas;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $treports = TrashReports::all();
        return view('reportes.desechos.index', ['treports' => $treports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::parse(Carbon::now())->format('Y-m-d');
        return view('reportes.desechos.create',['date'=>$date, 'areports' => Areas::all()]);  

    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrashStoreRequest $request)
    {
        $trash = new TrashReports();

        $date = Carbon::parse($request->date)->format('Y-m-d');
        
        $trash->area_report = $request->area;
        $trash->date = $date;
        $trash->quantity = intval($request->quantity);
        $trash->user_report = auth()->id();

        $trash->save();

        return redirect('reportes/desechos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('reportes.desechos.show',[ 'treports'=> TrashReports::findOrFail($id), 'areports' => Areas::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('reportes.desechos.edit',[ 'treports'=> TrashReports::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(TrashUpdateRequest $request, $id)
    {
        $trash = TrashReports::findOrFail($id);

        $trash->area_report = $request->area;
        $trash->quantity = intval($request->quantity);
        $trash->save();

        return redirect('reportes/desechos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trash = TrashReports::findOrFail($id);

        $trash->delete();

        return redirect('/reportes/desechos');
    }
}
