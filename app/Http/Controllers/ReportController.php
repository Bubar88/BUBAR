<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        //return $reports;
        return view('reports.index')->with('reports',$reports);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'requred|max;50',
            'description' => 'required'
        ]);

        $reports = new App\Models\Report;
        $reports->title = $request->title;
        $reports->description=
        $request->description;
        $reports->priority = $request->priority;
        $reports->save();
        return redirect('/report');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reports = Report::find($id);
        //return $reports;
        return view('reports.show')->with('report',$reports);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $reports = Report::find($id);
        return view('reports.edit')->with('report',$reports);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=> 'requred|max;50',
            'description' => 'required'
        ]);

        $reports = Report::find($id);
        $reports->title = $request->title;
        $reports->description=
        $request->description;
        $reports->priority = $request->priority;
        $reports->update();
        return redirect('/report');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $reports = Report::find($id);
        $reports->delete();
        return redirect('/report');

    }
}
