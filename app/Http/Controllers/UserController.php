<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin.user.index')->with('users',User::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.user.index')->with('users',User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$request->password;



        $user->save();
        return view('/admin.user.index')->with('users',User::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.user.show')->with('users',User::all());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin.user.edit')->with('users',User::all());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$request->password;


        $user->save();
        return view('/admin.user.index')->with('users',User::all())
        ->with('mess','UPDATE');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return view('/admin.user.index')->with('users',User::all())
        ->with('mess','UPDATE');
    }
}
