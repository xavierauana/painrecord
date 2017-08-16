<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecordRequest;
use App\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecordRequest $request) {

        $newRecord = Record::create([
            'type'      => $request->get('type'),
            'longitude' => $request->get('longitude'),
            'latitude'  => $request->get('latitude'),
        ]);

        return response()->json($newRecord);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Record              $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record) {
        //
    }
}
