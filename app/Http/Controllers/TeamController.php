<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(Team $team)
    {
        return $team->get();
    }
    public function show(Team $team)
    {
        return view('teams.show')->with(['team' => $team]);
        //'team'はbladeファイルで使う変数。中身は$teamはid=1のTeamインスタンス。
    }
}
