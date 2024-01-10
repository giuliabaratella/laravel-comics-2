<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(StoreComicRequest $request)
    {
        $form_data = $request->validated();

        $newComic = Comic::create($form_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic

     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();

        $comic->fill($form_data);
        $comic->update();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic

     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "The comic $comic->title has been deleted");
    }
}
