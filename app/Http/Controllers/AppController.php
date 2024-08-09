<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
  public function index()
  {
    return view('pages.index');
  }
  public function app()
  {
    return view('pages.app');
  }
}
