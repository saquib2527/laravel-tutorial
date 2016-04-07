<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bookmark;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('bookmark.index', ['bookmarks' => Bookmark::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookmark.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bookmark = new Bookmark;
        $bookmark->text = $request->get('text');
        $bookmark->url = $request->get('url');
        $bookmark->save();

        return redirect('/bookmark')->with(['info' => 'successfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('bookmark.show', ['bookmark' => Bookmark::find($id)]);
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
        return view('bookmark.edit', ['bookmark' => Bookmark::find($id)]);
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
        $bookmark = Bookmark::find($id);
        $bookmark->text = $request->get('text');
        $bookmark->url = $request->get('url');
        $bookmark->save();

        return redirect('/bookmark')->with(['info' => 'successfully updated']);
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
        $bookmark = Bookmark::find($id);
        $bookmark->delete();

        return redirect('/bookmark')->with(['info' => 'successfully deleted']);
    }
}
