<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrosswordEntry;


class CrosswordController extends Controller
{
    //
    public function index() {
            $entries = CrosswordEntry::all();
            return view('index', compact('entries'));
        }
}
