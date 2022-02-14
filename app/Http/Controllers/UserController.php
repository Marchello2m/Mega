<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;


class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $user=[];
    public function saveUser(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email=$request->email;
        $user->created_at=Carbon::now();
        $user->save();
       Session::flash('userSaved','saved');
        return redirect('/faq');

    }
}
