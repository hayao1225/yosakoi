<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Requests\TeamRequest;

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
    public function create()
    {
        return view('teams.create');
    }
    public function store(TeamRequest $request, Team $team)
    {
        $input = $request['team'];
        $team->fill($input)->save();
        return redirect('/teams/' . $team->id);
    }
    public function edit(Team $team)
    {
        return view('teams.edit')->with(['team' => $team]);
    }
    public function update(TeamRequest $request, Team $team)
    {
        $input_team = $request['team'];
        $team->fill($input_team)->save();
        return redirect('/teams/' . $team->id);
    }
}
