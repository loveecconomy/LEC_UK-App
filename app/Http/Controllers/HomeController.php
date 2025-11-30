<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('layouts.app');
        return view ('pages.index');
    }

    /**
     * Display the Job Portal
     */
    public function index_portal()
    {
        return view('pages.job_portal');
    }

    /**
     * Display the New Here page
     */
    public function newHere()
    {
        return view('pages.new-here');
    }

    /**
     * Display the Next Steps page
     */
    public function nextSteps()
    {
        return view('pages.next-steps');
    }

    /**
     * Display the Community page
     */
    public function community()
    {
        return view('pages.community');
    }

    /**
     * Display the Give page
     */
    public function give()
    {
        return view('pages.give');
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
