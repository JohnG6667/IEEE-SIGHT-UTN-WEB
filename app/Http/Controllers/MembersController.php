<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::whereHas('user', function ($query){
            $query->where('status', 1);
        })->paginate(6);

        return view('index.members' , compact('members'));
    }
}
