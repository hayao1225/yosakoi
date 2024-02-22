<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(Team $team)
    {
        return view('teams.index')->with(['teams' => $team->getPaginateByLimit()]);
        //blade内で使う変数'teams'と設定。'teams'の中身にgetを使い、インスタンス化した$teamを代入。
    }
    public function show(Team $team)
    {
        return view('teams.show')->with(['team' => $team]);
        //'team'はbladeファイルで使う変数。中身は$teamはid=1のTeamインスタンス。
    }
}
