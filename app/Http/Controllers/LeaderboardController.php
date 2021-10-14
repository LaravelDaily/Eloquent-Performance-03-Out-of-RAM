<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function index()
    {
        $users = User::with('comments')->get();

        // Should be:
        // $users = User::withCount('comments')->get();

        return view('leaderboard', compact('users'));
    }
}
