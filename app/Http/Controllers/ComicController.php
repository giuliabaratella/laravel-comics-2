<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;


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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'min:5',
            'thumb' => 'min:10',
            'price' => 'required|min:3|max:20',
            'sale_date' => 'required|min:8|max:8',
            'series' => 'required|min:3|max:100',
            'type' => 'required',

        ]);
        $form_data = $request->all();

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
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'min:5',
            'thumb' => 'min:10',
            'price' => 'required|min:3|max:20',
            'sale_date' => 'required|min:10|max:10',
            'series' => 'required|min:3|max:100',
            'type' => 'required',

        ]);
        $form_data = $request->all();
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
