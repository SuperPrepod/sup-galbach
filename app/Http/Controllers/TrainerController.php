<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
      public function index()
    {
        $trainers = User::where('is_trainer', true)
                    ->select('name', 'email', 'created_at', 'description')
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('trainers.index', compact('trainers'));
        
    }
}
