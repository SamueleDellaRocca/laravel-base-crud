<?php

namespace App\Http\Controllers;

use App\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(4);

        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'unique:comics|max:255',
            'description'=>'',
            'thumb'=>'url',
            'price'=> 'required|max:10',
            'series'=> 'required|max:50',
            'sale_date'=> 'required|date',
            'type'=> 'required|max:50',
        ]);

        $formData = $request->all();
        $newComic = Comic::create($formData);
        return redirect()->route('comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic)
    {   
        // $comics = Comic::all();
        return view('show', [
            'pageTitle' => $comic->title,
            'comic' => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {
        $request->validate([
            'title'=> 'max:255',
            'description'=>'',
            'thumb'=>'url',
            'price'=> 'required|max:10',
            'series'=> 'required|max:50',
            'sale_date'=> 'required|date',
            'type'=> 'required|max:50',
        ]);

        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index');
        // return redirect()->back();
        // return back(); funziona ugualmente
    }
}
