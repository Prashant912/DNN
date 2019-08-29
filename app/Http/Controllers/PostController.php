<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
   public function datatable()
    {
        return view('datatable');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
    	$users = DB::table('demo_posts')->select('*');
        return Datatables::of($users)
            ->make(true);
    }
}
