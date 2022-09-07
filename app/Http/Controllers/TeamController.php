<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function browse()
    {
        return Team::all();
    }

    public function read($id)
    {
        return Team::find($id);
    }
}
