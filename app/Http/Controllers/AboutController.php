<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = 'Member';
        $members = [
            ['name' => 'Madel F. Raydan', 'role' => 'Leader', 'text' => 'font-weight-bold'],
            ['name' => 'Jessa D. Alalan', 'role' => $member, 'text' => 'text-bold'],
            ['name' => 'Mary grace Y. Calbog', 'role' => $member, 'text' => 'text-bold'],
            ['name' => 'John Michael Turtal', 'role' => $member, 'text' => 'text-bold'],
            ['name' => 'Shan Kyle G. Mapili ', 'role' => $member, 'text' => 'text-bold'],
            ['name' => 'Weincis Patrick G. Mariño', 'role' => $member, 'text' => 'text-bold'],
            ['name' => 'Brent Denver Russiana', 'role' => $member, 'text' => 'text-bold'],
        ];
        return view('layout.pages.about', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
