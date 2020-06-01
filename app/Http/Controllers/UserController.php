<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dealer;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        return view('user.index', $data);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['dealers'] = Dealer::all();
        return view('user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->except('_token');
        $post['password'] = Hash::make($post['password']);
        if(User::create($post)){
            return redirect('user')->with('success', 'User Berhasil Disimpan');
        }

        return redirect()->back()->with('error', 'User Gagal Disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['dealers'] = Dealer::all();
        return view('user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = $request->except(['_token', 'submit']);
        $post['password'] = Hash::make($post['password']);
        if(User::where('id_user', $id)->update($post)){
            return redirect('user')->with('success', 'User Berhasil Diupdate');
        }

        return redirect()->back()->with('error', 'User Gagal Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->withSuccess('User berhasil dihapus');
    }
}
