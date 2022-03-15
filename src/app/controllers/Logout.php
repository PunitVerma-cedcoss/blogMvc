<?php

class Logout extends Controller
{
    public function index($data = [])
    {
        session_start();
        session_unset();
        session_destroy();
        header("location:/Auth");
    }
}
