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
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
