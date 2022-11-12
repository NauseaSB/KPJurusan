<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('dashboard.admin.index', [
            'datas' => $data,
            'title' => 'Dashboard',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.tambah-akun', [
            'title' => 'Tambah Akun'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'role_id' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:6|max:255',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        if ($validatedData['role_id'] == 2) {
            $user = User::create($validatedData);
            $current_id = $user->id;
            Kelompok::create([
                'user_id' => $current_id,
            ]);
        } else {
            User::create($validatedData);
        }
        return redirect('/admin')->with('success', 'Tambah Akun Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        // ddd($data);
        return view('dashboard.admin.edit-akun', [
            'datas' => $data,
            'title' => 'Edit Akun'
        ]);
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
        $validatedData =  $request->validate([
            'role_id' => 'required',
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::where('id', $id)->update($validatedData);
        return redirect('/admin')->with('success', 'Edit Akun Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        // ddd($current_kelompok_id);
        if ($data->role_id == '2') {
            $kelompok = Kelompok::where('user_id', $data->id)->first();
            $current_kelompok_id = $kelompok->id;
            User::destroy($id);
            Kelompok::destroy($current_kelompok_id);
        } else {
            User::destroy($id);
        }
        return redirect('/admin')->with('success', 'Delete Akun Berhasil');
    }
}
