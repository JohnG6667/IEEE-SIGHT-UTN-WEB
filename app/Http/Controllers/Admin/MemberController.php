<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MemberController extends Controller
{
    public function index()
    {
        return view('admin.members.index');
    }

    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'facebook' => 'required|unique:members',
            'instagram' => 'required|unique:members',
            'linkedin' => 'required|unique:members'
        ]);

        $member = Member::create($request->all());

        Cache::flush();

        return redirect()->route('admin.members.edit', $member)->with('info', 'Se registró como miembro al usuario ' . $member->user->name . ' !');
    }


    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }


    public function update(Request $request, Member $member)
    {
        $request->validate([
            'facebook' => 'required|unique:members',
            'instagram' => 'required|unique:members',
            'linkedin' => 'required|unique:members'
        ]);


        $member->update($request->all());

        return redirect()->route('admin.members.edit', $member)->with('info', '!La información del usuario se actualizó con éxito¡');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('admin.categories.index')->with('info', '!El usuario como miembro ha sido descartado¡');
    }
}
