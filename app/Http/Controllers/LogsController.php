<?php

namespace App\Http\Controllers;

use App\Models\Logs;    

use Illuminate\Http\Request;

class LogsController extends Controller
{
    //
    public function index(Logs $logs)
    {
        $data = [
            'logsy' => $logs::orderBy('id_logs', 'desc')->get()
        ];

        return view('logs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Logs $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logs $logs)
    {
        //
    }
}
