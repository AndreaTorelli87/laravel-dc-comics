<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    public function index()
    {
        $data = [
            $links = config("NavLinks.links")
        ];  
        $comics = Comic::all();
        return view("comics.index", compact("comics","data"));
    }

    public function create()
    {
        $data = [
            $links = config("NavLinks.links")
        ]; 

        return view("comics.create", compact("data"));
    }

    public function store(Request $request)
    {
        $form_data = $request->all();
        
        $newComic = new Comic();

        $newComic->title = $form_data["title"];
        $newComic->desctiption = $form_data["description"];
        $newComic->thumb = $form_data["thumb"];
        $newComic->price = $form_data["price"];
        $newComic->series = $form_data["series"];
        $newComic->sale_date = $form_data["sale_date"];
        $newComic->type = $form_data["type"];
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    public function show($id)
    {
        $data = [
            $links = config("NavLinks.links")
        ]; 

        $comic = Comic::findOrFail($id);
        return view("comics.show", compact("comic","data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
