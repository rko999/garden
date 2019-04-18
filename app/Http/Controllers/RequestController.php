<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Carbon\Carbon;
use Illuminate\Http\Request as RQ;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Request::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('request.requests_per_page'));

        return view('request.index', compact('requests'));
    }

    public function showRequest($id)
    {
        $request = Request::where('id', $id)->firstOrFail();
        return view('request.detail', ['request' => $request]);
    }
}
