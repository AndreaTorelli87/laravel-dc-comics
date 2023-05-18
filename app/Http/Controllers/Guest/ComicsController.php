<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        $request->validate([
            'thumb' => 'required|url|max:255',
            'title' => 'required|max:50',
            'price' => 'required|max:10',
            'series' => 'required|max:70',
            'sale_date' => 'required|max:10',
            'description' => 'required|max:65535',
            'type' => 'required|max:50'
        ]);

        $form_data = $request->all();
        
        $newComic = new Comic();

        $newComic->title = $form_data["title"];
        $newComic->desctiption = $form_data["desctiption"];
        $newComic->thumb = $form_data["thumb"];
        $newComic->price = $form_data["price"];
        $newComic->series = $form_data["series"];
        $newComic->sale_date = $form_data["sale_date"];
        $newComic->type = $form_data["type"];
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
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

    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'thumb' => 'required|url|max:255',
            'title' => 'required|max:50',
            'price' => 'required|max:10',
            'series' => 'required|max:70',
            'sale_date' => 'required|max:10',
            'description' => 'required|max:65535',
            'type' => 'required|max:50'
        ]);

        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
