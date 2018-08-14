<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:5',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required',
            'no_hp' => 'required|string|min:10',
            'password' => 'required|string|min:6',
            'kota' => 'required|string',
            'role' => 'required'
        ]);

        $request['password'] = bcrypt($request->get('password'));
        $request['avatar'] = $request->get('avatar') ? $request->get('avatar') : '/photos/user-icon.png';
        User::create($request->all());

        return redirect()->route('backend.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|min:5',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6',
            'role' => 'required'
        ]);

        $user = User::findOrFail($id);

        $request['password'] = $request->get('password') ? bcrypt($request->get('password')) : $user->password;
      //  $request['gender'] = $request->get('gender') ? bcrypt($request->get('gender')) : $user->gender;
       // $request['tanggal_lahir'] = $request->get('tanggal_lahir') ? bcrypt($request->get('tanggal_lahir')) : $user->tanggal_lahir;
        $request['avatar'] = $request->get('avatar') ? $request->get('avatar') : '/images/user-icon.png';
        
        $user->update($request->all());

        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! User::destroy($id)) return redirect()->back();
        return redirect()->route('backend.users.index');
    }

    public function dataTable()
    {
        $users = User::query();
        return DataTables::of($users)
            ->addColumn('user', function ($users) {
                return '<img src="' . asset('backend/image/user-icon.png') . '" height="32" width="32">' .
                $users->name;
            })
            ->addColumn('action', function ($users) {
                return view('backend.partials._action', [
                    'model' => $users,
                    'show_url' => route('backend.users.show', $users->id),
                    'edit_url' => route('backend.users.edit', $users->id),
                    'delete_url' => route('backend.users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['user', 'action'])
            ->make(true);
    }
}
