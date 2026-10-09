<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Lending::all();
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
    public function show($user_id, $copy_id, $start)
    {
        $record = Lending::where("user_id", $user_id)
        ->where("copy_id", $copy_id)
        ->where("start", $start)
        ->get();
        return $record[0];
        //->findOrFail();
    }

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, $user_id, $copy_id, $start)
    {
        $record = $this->show($user_id, $copy_id, $start);
        $record->fill($request->all());
        $record->save();
    } */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id, $copy_id, $start)
    {
        $record = $this->show($user_id, $copy_id, $start);
        $record->delete();
    }
}
