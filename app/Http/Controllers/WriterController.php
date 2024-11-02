<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::all();
        return view('layouts.writer')->with('writers', $writers);
    }

    public function show($id)
    {
        $writer = Writer::with('article')->find($id);
        return view('layouts.writerDetail')->with('writer', $writer)->with('articles', $writer->article);
    }
}
