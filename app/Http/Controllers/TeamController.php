<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Prefecture;
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Models\Post;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Team $team)
    {
        return view('teams.index')->with(['teams' => $team->getPaginateByLimit()]);
        //blade内で使う変数'teams'と設定。'teams'の中身にgetを使い、インスタンス化した$teamを代入。
    }
    public function show(Team $team, Post $post)
    {
        return view('teams.show')->with(['team' => $team])->with(['posts' => $post->getPaginateByLimit()]);
        //'team'はbladeファイルで使う変数。中身は$teamはid=1のTeamインスタンス。
    }
    public function create(Prefecture $prefecture)
    {
        return view('teams.create')->with(['prefectures' => $prefecture->get()]);
    }
    public function store(TeamRequest $request, Team $team)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        // dd($request);
        $image_url = Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();
        $input = $request['team'];
        $input += ['image_url' => $image_url];
        $input += ['user_id' => Auth::id()];
        $team->fill($input)->save();
        return redirect('/teams/' . $team->id);
    }
    public function edit(Team $team)
    {
        return view('teams.edit')->with(['team' => $team]);
    }
    public function update(Request $request, Team $team)
    {
        $input_team = $request['team'];
        $team->fill($input_team)->save();
        return redirect('/teams/' . $team->id);
    }
    public function delete(Team $team)
    {
        $team->delete();
        return redirect('/');
    }
}
