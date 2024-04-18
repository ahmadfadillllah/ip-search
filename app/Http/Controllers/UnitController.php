<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function index()
    {
        $unit = Unit::all();
        return view('unit.index', compact('unit'));
    }

    public function search(Request $request)
    {
        $lines = explode("\n", $request->ip);

        $ipArray = [];

        foreach ($lines as $line) {
            $cleanedLine = trim($line);
            if (!empty($cleanedLine)) {
                $ipArray[] = $cleanedLine;
            }
        }
        $unit = Unit::whereIn('ip', $ipArray)->get();

        return view('unit.index', compact('unit'));
    }
}
