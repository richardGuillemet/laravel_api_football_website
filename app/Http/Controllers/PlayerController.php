<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function browse()
    {
        return Player::all();
    }

    public function read($id)
    {
        return Player::find($id);
    }
}
