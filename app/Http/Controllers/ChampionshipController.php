<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Hamcrest\Type\IsNumeric;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request;

use function PHPUnit\Framework\IsString;

class ChampionshipController extends Controller
{
    public function browse()
    {
        //return response()->json([Championship::all()]);
        return Championship::all();
    }

    public function read($id)
    {
        return Championship::find($id);
    }
}
