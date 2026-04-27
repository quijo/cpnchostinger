<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class PagesController extends Controller
{
  public function welcome()
{
    $announcements = Announcement::where('is_active', true)
        ->orderBy('published_at', 'desc')
        ->take(6)
        ->get();

    return view('welcome', compact('announcements'));
}
}
