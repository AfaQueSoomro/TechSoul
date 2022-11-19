<?php

namespace App\Http\Controllers;

use App\Models\Project_requirment;
use Illuminate\Http\Request;

class Project_requirmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $requirment = Project_requirment::all();
        // return view("requirment.index")->with('requirment', $requirment);
        return view("requirment.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("requirment.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Project_requirment::create($input);
        return redirect("requirment") > with("flash_message", "Requirment Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project_requirment  $project_requirment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirment = Project_requirment::find($id);
        return redirect("requirment.show")->with("requirment", $requirment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project_requirment  $project_requirment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requirment = Project_requirment::find($id);
        return redirect("requirment.edit")->with("requirment", $requirment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project_requirment  $project_requirment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Project_requirment::find($id);
        $input = $request->all();
        $invoice->update($input);
        return redirect("requirment")->with("flash_message", "Requirment Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project_requirment  $project_requirment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Invoice::destroy($id);
        // return redirect("requirment")->with("flash_message", "Record Deleted");
    }
}
