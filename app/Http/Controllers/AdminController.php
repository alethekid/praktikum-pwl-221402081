<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_friends()
    {
        return view('admin.friends');
    }

    public function show_games()
    {
        return view('admin.games');
    }

    public function show_playlist()
    {
        return view('admin.playlist');
    }

    public function show_movies()
    {
        return view('admin.movies');
    }

    public function show_drakor()
    {
        return view('admin.drakor');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
