<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $user, string $id)
    {
        $attributes = $this->validateUser($user);

        $user->update($attributes);

        return back()->with('success', 'You have been Updated! Go get them');

//        $attributes = request()->validate([
//            'name' => 'required',
//            'first name' => 'required',
//            'infix' => 'required',
//            'last name' => 'required',
//            'phone' => 'required',
//            'street_nr' => 'required',
//            'city' => 'required',
//            'zipcode' => 'required',
//            'address' => 'required',
//            'county' => 'required',
//            'description' => 'required',
//        ]);

//        return redirect('/')->with('success', 'Welcome Back!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    protected function validateUser(?Request $user = null): array
    {
        $user ??= new $user();

        return request()->validate([
            'name' => 'required',
            'first name' => 'required',
            'infix' => 'required',
            'last name' => 'required',
            'phone' => 'required',
            'street_nr' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'county' => 'required',
            'description' => 'required',
        ]);
    }
}
