<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;

class Post extends Controller
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {

        $data['posts'] = $this->postModel->getAllPosts();

        return view('post-index', $data);
    }

    public function create()
    {
        return view('post-create');
    }

    public function store()
    {
        $this->postModel->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('/');
    }
}
