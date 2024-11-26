<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;

class Post extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        $postModel = new PostModel();

        $data['posts'] = $postModel->getAllPosts();

        return view('post-index', $data);
    }
}