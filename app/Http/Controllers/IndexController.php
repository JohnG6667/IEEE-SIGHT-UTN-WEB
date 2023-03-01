<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 1)->latest()->take(5)->get();

        $members = User::where('status', 1)->whereHas('member')->latest()->take(5)->get();

        //CONTADORES

        //contar usuarios
        $users_count = User::where('status', 1)->whereDoesntHave('member')->count();
        //contar eventos
        $events_count = Event::where('status', 1)->count();
        //contar proyectos
        $projects_count = Project::where('status', 1)->count();
        //contar miembros activos
        $members_count = User::where('status', 1)->whereHas('member')->count();

        //Testimoniales de usuarios activos
        $testimonials = Testimonial::latest()->take(5)->get();


        return view('index.index',
        compact('events', 'members', 'users_count', 'events_count', 'projects_count', 'members_count', 'testimonials'));
    }
}
