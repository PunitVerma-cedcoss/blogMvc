<?php

class Comments extends Controller
{
    public function __construct()
    {
        $this->Comments = $this->model('CommentsModal');
    }
    public function index($data = [])
    {
        session_start();
        echo "in index of comment controller";
    }
    public function doComment()
    {
        session_start();

        $bid = $_POST["blogId"];
        $comment = $_POST["text"];
        $parent = $_POST["parent"];
        $user = $_SESSION["user"];

        echo $parent . "<br>";
        echo $user . "<br>";
        echo $comment . "<br>";
        echo $bid . "<br>";

        $res = $this->Comments->addComment($bid, $user, $parent, $comment);
        echo "<pre>";
        print_r($res);
        echo "</pre>";
        echo "comment page in do comment method";
    }
}
