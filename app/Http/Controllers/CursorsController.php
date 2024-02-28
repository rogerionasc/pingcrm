<?php

namespace App\Http\Controllers;

use App\Models\Cursor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Inertia\Response;

class CursorsController extends Controller
{
    public function index()
    {
        $cursors = DB::table('cursors')->paginate(10);
//        $cursors = DB::table('cursors')->get();
//        dd($cursors);
        return Inertia::render('Cursors/Index', [
            'cursors' => $cursors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Cursors/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        Request::validate([
            'name' => ['required', 'max:25'],
            'description' => ['nullable', 'max:100'],
        ]);


        Auth::user()->account->cursors()->create([
            'name' => Request::get('name'),
            'description' => Request::get('description'),
            ]);
        return Redirect::route('cursors')->with('success', 'Cursor created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
