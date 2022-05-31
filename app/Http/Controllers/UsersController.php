<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
      $users = DB::table('users AS a')
              ->leftJoin('role_users AS b', 'b.user_id', '=', 'a.id')
              ->leftJoin('roles AS c', 'b.role_id', '=', 'c.id')
              ->select('a.id', 'a.email', 'a.first_name', 'a.last_name',
                    'a.last_login', 'c.name as role', 'a.created_at'
                  )
              ->get();

      //dd($users);
      return view('users.index', compact('users'));
    }

    public function create(Request $request) {
      $first_name=$request->input('first_name');
      $last_name=$request->input('last_name');
      $email=$request->input('email');
      $password=$request->input('password');
      $ulangi_password=$request->input('ulangi_password');

      if($password != $ulangi_password) {
        return redirect()->back();
      }

      $idUser=DB::table('users')->insertGetId(
        [
          'first_name' => $first_name,
          'last_name' => $last_name,
          'email' => $email,
          'password' => bcrypt($password),
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      );

      $insertRoleUser=DB::table('role_users')->insert(
        [
          'user_id' => $idUser,
          'role_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      );

      return redirect('/pengguna');
    }

    public function delete($id) {
      DB::table('users')->where('id', $id)->delete();
      DB::table('role_users')->where('user_id', $id)->delete();

      return redirect('/pengguna');
    }
}
