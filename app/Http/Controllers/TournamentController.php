<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TournamentRequest;
use App\Models\Tournament;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Tournament::all();

        return view('tournament.index',compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tournament.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TournamentRequest $request)
    {
        Tournament::create($request->all())->fresh();

        return redirect()->back()->withSuccess(__('Tournament Created Successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Tournament::find($id);

        return view('tournament.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Tournament::find($id);
        $item->update([$id,$request->all()]);
        $item->fresh();

        return redirect()->back()->withSuccess(__('Tournament Edi Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tournament::find($id)->delete();

        return redirect()->back()->withSuccess(__('Tournament Deleted Successfully'));
    }
}
