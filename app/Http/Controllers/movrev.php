<?php

namespace App\Http\Controllers;

use App\Models\Movname;
use App\Models\Rating;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\alert;

class movrev
{
    
    public function listmanage(Request $req) {
        return view('listmanage')->with('list', Movname::all());
    }

    public function home(Request $req) {
        $get = 0;
        if ($req->isMethod('post')) {
            $post = new Movname();
            //$count = $post::count();
            //$post->id = $count+1;
            if (isset($req->id)) {
                $post = Movname::Where('id', $req->id)->first();
                $get = 1;
            }
            $post->title = $req->title;
            $post->year = $req->year;
            $post->genre = $req->genre;
            $post->actors = $req->actors;
            $post->director = $req->director;
            $post->poster = Storage::disk('public_uploads')->put('', $req->poster);
            $post->save();
            if ($get == 1) {
                return view('homelist')->with('list', Movname::all());
            }
        }
        if (isset($req->id)) {
            $data = Movname::Where('id', $req->id)->first();
            // dd("Done");
            return view('home')->with('data', $data);
        }
        $data = new Movname();
        return view('home')->with('data', $data);
    }

    public function list(Request $req) {
        $user = Auth::user();
        if (isset($req->id)) {
            $data = Movname::Where('id', $req->id)->delete();
            return view('listmanage')->with('list', Movname::all());
        }
        return view('homelist')->with("user", $user)->with('list', Movname::all())->with('fullname');
    }

    public function login(Request $req) {
        if (isset($req->log)) {
            if (Auth::attempt(["username" => $req->username, "password" => $req->pass])) {
            return Redirect::to('homelist')->with('list', Movname::all());
            } else {
                return view('login')->with('msg', "*User not fount!*");
            }
        }
        return view('login')->with('msg', );
    }

    public function signup(Request $req) {
        try {
            if (isset($req->sign)) {
                if ($req->pass != $req->repass) {
                    $str = "*Password doesn't match!*";
                    return view('signup')->with('str', $str);
                }
                $data = new User();
                $data->name = $req->fullname;
                $data->email = $req->email;
                $data->username = $req->username;
                $data->password = Hash::make($req->pass);
                $data->save();
                return Redirect::to('login');
            }
            return view('signup')->with('str');
        }
        catch (\Exception $e) {
            return view('signup')->with('str', "Something went wrong!*");
        }
    }

    public function logout(Request $req) {
        Auth::logout();
        return view('homelist')->with('list', Movname::all());
    }

    public function ratings(Request $req) {
        if ($req->isMethod('POST')) {
            $rate = new Rating();
            if (isset($req->MovID)) {
                $rate = Rating::Where('user_id', Auth::user()->id)->Where('movie_id', $req->MovID)->first();;
            }
            $rate->user_id = Auth::user()->id;
            $rate->movie_id = $req->MovID;
            $rate->rating = $req->rating;
            $rate->reviews = $req->reviews;
            $rate->save();
            return Redirect::to('homelist')->with('list', Movname::all());
        }
        if (isset($req->MovID)) {
            $data = new Rating();
            try {
                $data = Rating::Where('user_id', Auth::user()->id)->Where('movie_id', $req->MovID)->first();
            } catch (\Exception $e) {
                //throw $th;
                //dd('Catch');
                return view('ratings')->with('user', Auth::user())->with('movID', $req->MovID)->with('data', "");
            }
            return view('ratings')->with('user', Auth::user())->with('movID', $req->MovID)->with('data', $data->reviews);
        }
        return view('ratings')->with('user', Auth::user())->with('movID', $req->MovID)->with('data', );
    }
}
