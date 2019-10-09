<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Response;


class Users extends Controller
{

    protected $data;

    public function __construct(User $data)
    {
        $this->data = $data;
    }

    public function usersList(Request $request){

        $data = $this->data->latest('created_at')->paginate(10);

        if ($request->ajax()) {
            return view('back.users.load', ['data' => $data])->render();
        }
        return view('back.users.list',compact('data'));

    }

    public function usersDelete(Request $request)
    {
        $id = $request->route('id');
        $user = User::find($id);
        if(count($user)){
            $user->delete();
        }else{
            abort(404);
        }
        return redirect()->route('adminUserList');
    }

}
