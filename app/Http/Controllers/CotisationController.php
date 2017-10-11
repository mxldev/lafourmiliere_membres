<?php

namespace App\Http\Controllers;

use App\User;
use App\Cotisation;
use Illuminate\Http\Request;

use App\Http\Requests;

class CotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userid)
    {
        $user = User::findOrFail($userid);
        return view('cotisation.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userid)
    {
        $this->validate($request, [
            'amount' => 'required|min:2',
            'season' => 'required|min:2',
        ]);

        $user = User::findOrFail($userid);

        /*$cotisation = new Cotisation;
        $cotisation->amount = $request->amount;
        $cotisation->season = $request->season;
        $cotisation->user()->associate($user);
        $cotisation->save(); */

        $cotisation = new Cotisation;
        $cotisation->amount = $request->amount;
        $cotisation->season = $request->season;

        $user->cotisations()->save($cotisation);

        $user->activatemember();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
