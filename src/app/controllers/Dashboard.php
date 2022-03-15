<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->DashboardModal = $this->model('DashboardModal');
    }
    public function index($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/login");
        }
        $this->view('pages/dashboard', $data);
    }
    public function editor($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/login");
        }
        $this->view('pages/editor', $data);
    }
    public function dashboardHome($data = [])
    {
        session_start();
        // redirection if already logged in
        if (!isset($_SESSION["user"])) {
            header("location:/login");
        }
        $data = $this->DashboardModal->getAllBlogs();
        $this->view('pages/dashboardHome', $data);
    }
    public function saveData($data = [])
    {
        // session_start();
        $d = $_POST["data"][0];
        $data = $this->DashboardModal->insertBlog($d["blogImages"], $d["blogTitle"], $d["blogTags"], $_POST["data"][1]);
        if (($data)) {
            echo "true";
        } else {
            echo "false";
        }
    }
    public function updateData($data = [])
    {
        // session_start();
        $id = $_POST["data"][0]["id"];
        $d = $_POST["data"][1];
        $data = $this->DashboardModal->updateBlog($id, $d["blogImages"], $d["blogTitle"], $d["blogTags"], $_POST["data"][2]);
        if (($data)) {
            echo "true";
        } else {
            echo "false";
        }
    }
}
