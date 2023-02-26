<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    // Show images to vote
    public function index()
    {
        $limit = 2;
        $images = Image::orderby(DB::raw('RAND()'))->take($limit)->get();

        return view('pages.vote', compact('images'));
    }
}
