<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Laravel\Lumen\Routing\Controller as BaseController;
use GuzzleHttp\Client;

require '../vendor/autoload.php';


class PostController extends BaseController //teste
{
    public function store(Request $request)
    {
        $data = new Post();
        $data->title = $request->get('title');
        $data->save();
        return response()->json('Successfully added');
    }
    public function get(Request $request)
    {
        $data = Post::all();
        return response()->json($data);
    }
}
