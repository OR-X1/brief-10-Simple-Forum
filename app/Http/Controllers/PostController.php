<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

use Auth;

class PostController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = new post();

        // $movies->all();

        $movies = post::all();

        return view('page.user', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'titre' => 'required',
            'dateSort' => 'required',
        ]);

        $request->validate([
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        $movies = new post();

        $movies->titre = $request->input('titre');
        $movies->dateSort = $request->input('dateSort');
        $image = $request->file('image');
        $movies->user_id = Auth::user()->id;

     $Moveimage = rand() . '.' . $image->getClientOriginalExtension();
     $movies->image =$Moveimage;
    $image->move(public_path('image'), $Moveimage);

        $movies->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
