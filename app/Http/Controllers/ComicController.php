<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ComicsList = Comic::all();

        $data = [
            "catalog" => $ComicsList
        ];

        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|min:3|max:200", //perchè 200? v. migration
            "description" => "required|min:12|max:255", //perchè 255? v. migration
            "price" => "required|decimal:2|max:999.99|min:0.99",
            "sale_date" => "required|integer|min:1980|max:2024",
            "thumb" => "required|max:4000",
            "type" => "required|min:12|max:4000",
        ]);

        $newComic = new Comic();
        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('games.show', $newComic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fumetto = Comic::find($id);

        $data = [
            "comic" => $fumetto
        ];

        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];

        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            "title" => "required|min:3|max:200", //perchè 200? v. migration
            "description" => "required|min:12|max:255", //perchè 255? v. migration
            "price" => "required|decimal:2|max:999.99|min:0.99",
            "sale_date" => "required|integer|min:1980|max:2024",
            "thumb" => "required|max:4000",
            "type" => "required|min:12|max:4000",
        ]);

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index');
    }
}
