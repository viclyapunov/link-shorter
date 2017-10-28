<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
    	return view('links.layouts.mainform');
    }

    public function create(Request $request)
    {
    	$link = new \App\Link();
    	$link->original_url = $request->input('original_url');
    	$link->short_uri = strval(crc32($request->input('original_url')));
    	$link->save();
    	//return 'Your new url: ' .  $_SERVER['SERVER_NAME'] . '/' . $link->short_uri;
    	return view('links.layouts.result', ['url' => $_SERVER['SERVER_NAME'] . '/' . $link->short_uri]);
    }

    public function redirect(Request $request, $link)
    {

    	$l = \App\Link::where('short_uri', '=', $request->path())->first();
    	if ($l)
    	{
    		return redirect($l->original_url);
    	}
    	else
    	{
			abort(404);
		}
    }
}
