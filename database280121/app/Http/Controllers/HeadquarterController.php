<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Headquarter;

class HeadquarterController extends Controller
{

 public function index() {

   $headquarters = Headquarter::all();

   return view('pages.headquarter', compact('headquarters'));
 }

 public function show($id) {

  $headquarter = Headquarter::findOrFail($id);
  return view('pages.headquarter2', compact('headquarter'));

 }

}
