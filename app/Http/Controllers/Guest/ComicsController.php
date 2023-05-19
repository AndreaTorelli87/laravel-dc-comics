<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    public function home() {  
        return view("home");
    }

    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    public function create()
    {
        return view("comics.create");
    }

    public function store(StoreComicRequest $request)
    {
        $form_data = $request->validated();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        
        return redirect()->route("comics.show", ["comic" => $newComic->id])->with("status", "Il nuovo comic è stato aggiunto con successo!");
    }

    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id])->with("status", "Il comic è stato aggiornato con successo!");
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
