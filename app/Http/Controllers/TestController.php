<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Test::findOrFail(1);

        // return $test->meta_data;

        // $test = Test::orderBy('meta_data->name', 'desc')->get();

        $test = Test::where('meta_data->name', 'like', '%kel%')->get(); // we also have a method named whereJsonContains, works the same
        // another method whereJsonLength tells if a json field has some value in it or not?

        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Test();
        // $test->meta_data = [
        //     'name' => 'Ali Ahmad',
        //     'email' => 'ali@gmail.com',
        //     'phone' => '11111122222',
        //     'age' => '21',
        // ];

        // $test->save();

        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'Saeed Kela',
        //         'email' => 'kela@gmail.com',
        //         'phone' => '696969',
        //         'age' => 21,
        //     ]
        // ]);

        //-------------Updating JSON data----------------------

        // $test = Test::find(3)->update([
        //     'meta_data->name' => 'Saeed Only Not Kela'
        // ]);

        //------------Delete any field inside json--------------

        $test = Test::find(3);
        $test->meta_data = collect($test->meta_data)->forget('email'); // collect in-built method of laravel, provides multiple functionalities e.g, forget()
        $test->save();
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
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
