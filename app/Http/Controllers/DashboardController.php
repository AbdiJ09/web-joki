<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchText = $request->input('search');
        $latestJoki = JokiRank::latest('created_at')->first()->take(5);

        if ($searchText) {
            $latestJoki->where('invoice_code', 'like', '%' . $searchText . '%')
                ->orWhere('status', 'like', '%' . $searchText . '%');
        }

        $orderRank = $latestJoki->get();
        return view('dashboard1.index', compact('orderRank'));
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
