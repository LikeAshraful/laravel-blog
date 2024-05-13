<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    public function getLatestPosts()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://barta24.com/api/v2/latest');
        $posts = json_decode($response->getBody(), true);
        return $posts;

        $latest_posts = Post::latest()->get();
    }
}
