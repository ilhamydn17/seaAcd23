<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::paginate(12);
        return view('app.index', compact('films'));
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
    public function store(StoreFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('app.show-film', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }

    public function bookSeat(Film $film){
        return view('app.booking.seat-booking');
    }
}
