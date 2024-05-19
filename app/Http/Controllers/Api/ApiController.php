<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller {

    public function getLatestPosts() {
        $client   = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://barta24.com/api/v2/latest');
        $posts    = json_decode($response->getBody(), true);
        return $posts;

        // $latest_posts = Post::latest()->get();
    }

    public function getPost($id) {

        $client   = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://barta24.com/api/v2/detail/' . $id);
        $post     = json_decode($response->getBody(), true);

       if ($post) {
            return $post;
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }     

    }

    public function getCategories() {
        $client     = new \GuzzleHttp\Client();
        $response   = $client->request('GET', 'https://barta24.com/api/v2/categories');
        $categories = json_decode($response->getBody(), true);
        return $categories;
    }
}
