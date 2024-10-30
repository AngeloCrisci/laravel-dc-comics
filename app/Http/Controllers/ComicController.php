<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $manga = Comic::all();
        return view("comics.index" , compact("manga"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formData = $request->all();

        $item = new Comic();
        $item->title = $formData["title"];
        $item->description = $formData["description"];
        $item->price = $formData["price"];
        $item->thumb = $formData["thumb"];
        $item->author = $formData["author"];
        $item->save();

        return redirect()->route("comics.show" , ["id" => $item->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id)
    {
        //
        $item = Comic::findOrFail($id);
        return view("comics.show" , compact("item"));
    }

    public function edit(string $id)
    {
        $item = Comic::findOrFail($id);
        return view("comics.edit", compact("item"));
    }

    public function update(Request $request, string $id){
        $formData = $request->all();
        $item = Comic::findOrFail($id);

        $item->title = $formData["title"];
        $item->description = $formData["description"];
        $item->price = $formData["price"];
        $item->thumb = $formData["thumb"];
        $item->author = $formData["author"];
        $item->update();

        return redirect()->route("comics.show" , ["id" => $item->id]);

    }

}
