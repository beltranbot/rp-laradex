<?php

namespace laradex\Http\Controllers;

use Illuminate\Http\Request;
use laradex\Http\Requests\StoreTrainerRequest;
use laradex\Trainer;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {
        $trainer = new Trainer();
        $trainer->name = $request->name;
        $trainer->avatar = ($request->hasFile('avatar')) ?
            $request->file('avatar')->store('avatars', 'public') : null;

        $slug = (isset($request->slug)) ?
            $request->slug : explode(' ', $request->name);
        if (is_array($slug)) {
            foreach ($slug as $key => $value) {
                $slug[$key] = strtolower($value);
            }
            $slug = implode('-', $slug);
        }
        $trainer->slug = $slug;

        $trainer->save();
        // return 'Saved';
        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        // $trainer = Trainer::where('slug', $slug)->firstOrFail();
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->name = $request->name;
        $trainer->slug = $request->slug;
        if ($request->hasFile('avatar')) {
            $trainer->avatar =
                $request->file('avatar')->store('avatars', 'public');
        }
        $trainer->save();
        // return 'Updated';
        return redirect()
                ->route('trainers.show', $trainer)
                ->with('status', 'Trainer Updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $filepath = public_path().'/storage/'.$trainer->avatar;
        \File::delete($filepath);
        $trainer->delete();
        // return 'deleted ' . $filepath;
        return redirect()->route('trainers.index');
    }
}
