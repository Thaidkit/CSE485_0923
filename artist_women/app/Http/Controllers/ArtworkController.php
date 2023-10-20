<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $artworks = Artwork::paginate(5);
        return view('artwork.index', compact('artworks'))->with('i', (request()->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('artwork.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $artwork = new Artwork();
        $artwork->artist_name = $request->input('artist_name');
        $artwork->description = $request->input('description');
        $artwork->art_type = $request->input('art_type');
        $artwork->media_link = $request->input('media_link');
        $artwork->cover_image = $request->input('cover_image');    
        return redirect()->route('artworks.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $artwork = Artwork::where('id',$id)->first();
        return view('artwork.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Artwork::where('id', $id)->update([
            'artist_name' => $request->input('artist_name'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Artwork::where('id', $id)->delete();
        return redirect()->route('artworks.index');
    }
}
