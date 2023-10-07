<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = JokiRank::query();

        $filter = $request->input('filter');

        // Periksa apakah filter adalah "Semua Data"
        if ($filter && $filter !== "") {
            if ($filter == 'Data terbaru') {
                $query->orderBy('created_at', 'desc');
            } elseif ($filter == 'Data lama') {
                $query->orderBy('created_at', 'asc');
            } elseif ($filter == 'Tanggal pesanan lama') {
                $query->orderBy('created_at', 'asc');
            }
        }
        $searchText = $request->input('search');
        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('invoice_code', 'like', '%' . $searchText . '%')
                    ->orWhere('status', 'like', '%' . $searchText . '%');
            });
        }


        $isAdmin = false;
        $sales = JokiRank::sum('price');
        $users = User::where('is_admin', $isAdmin)->count();

        $orderRank = $query->get();
        return view('dashboard1.admin', compact('orderRank', 'sales', 'users'));
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
