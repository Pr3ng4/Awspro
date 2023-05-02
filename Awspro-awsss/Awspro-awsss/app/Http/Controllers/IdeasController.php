<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIdeasRequest;
use App\Http\Requests\UpdateIdeasRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Ideas::join('users','ideas.user_id','=', 'users.id')->get();
        return view('manager.manager', compact('ideas'));
    }
    public function routeideas()
    {
        $user = Auth::user();
        $ideas = Ideas::join('users','ideas.user_id','=', 'users.id')->where('user_id', $user->id)->get();
        return view('admin.home', compact('ideas'));
    }
    public function createIdeas(Request $request)
    {
        $user = Auth::user();

        $idea = new Ideas;
        $idea->industry_type = $request->input('industry_type');
        $idea->product_type = $request->input('product_type');
        $idea->business_type = $request->input('business_type');
        $idea->estimated_budget = $request->input('estimated_budget');
        $idea->location = $request->input('location');
        $idea->additional_details = $request->input('additional_details');
        $idea->user_id =  $user->id;

        $idea->save();

        return redirect()->route('home');
    }
}
