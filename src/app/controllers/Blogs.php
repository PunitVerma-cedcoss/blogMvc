<?php

class Blogs extends Controller
{
    public function __construct()
    {
        $this->BlogsModal = $this->model('BlogsModal');
    }
    public function index($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/auth");
        }
        $data["featured"] = $this->BlogsModal->getCoolBlog();
        $data['posts'] = $this->BlogsModal->getRecentPosts();
        $this->view('pages/blogs', $data);
    }
    public function blog($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/login");
        }
        $id = $data;
        $data = $this->BlogsModal->getBlogById((int) $id);
        if (!$data) {
            header("location:/blogs");
        }

        $this->BlogsModal->increaseCount($id);

        // getting the cool blog
        $data['featured'] = $this->BlogsModal->getCoolBlog();
        $data['comments'] = $this->BlogsModal->getCommentsByBlogId((int) $id);
        $data['posts'] = $this->BlogsModal->getRecentPosts();


        $this->view('pages/blog', $data);
    }
    public function edit($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/login");
        }
        $id = $data;
        $data = $this->BlogsModal->getBlogById((int) $id);
        if ($data[0]->blog_uploader != $_SESSION["user"]) {
            header("location:/blogs");
        }
        if (!$data) {
            header("location:/blogs");
        }
        // getting the cool blog
        $data['featured'] = $this->BlogsModal->getCoolBlog();
        $data['comments'] = $this->BlogsModal->getCommentsByBlogId((int) $id);


        $this->view('pages/editBlog', $data);
    }
    public function delete($data)
    {
        $data = $this->BlogsModal->deleteById((int) $data);
        header("location:/blogs");
    }
    public function header()
    {
        $this->view('header/header');
    }
}
