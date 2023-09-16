<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $usernya = User::orderBy('name', 'asc')->paginate(5);
        return view('admin.user.index', compact('usernya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // $params = $request->validated() + ['password' => bcrypt($request->password)];
        // if ($usernya = User::create($params)) {
        //     return redirect(route('admin.user.index'))->with('success', 'User berhasil ditambahkan');
        // }
        if ($user = User::create($request->validated() + ['password' => bcrypt($request->password)])) {

            return redirect(route('admin.user.index'))->with('success', 'User berhasil ditambahkan');
        } else {
            return redirect(route('admin.user.index'))->with('error', 'User gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_user)
    {
        $user = User::findOrFail($id_user);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_user)
    {
        $user = User::findOrFail($id_user);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id_user)
    {
        $user = User::findOrFail($id_user);
        $params = $request->validated();
        if ($user->update($params)) {
            return redirect(route('admin.user.index'))->with('success', 'Data User berhasil diperbaharui');
        } else {
            return redirect(route('admin.user.index'))->with('error', 'Data User gagal diperbaharui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_user)
    {
        $user = User::findOrFail($id_user);
        $user->delete();
        return redirect(route('admin.user.index'))->with('success', 'User berhasil dihapus');
    }
}
