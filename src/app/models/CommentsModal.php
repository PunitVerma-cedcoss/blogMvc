<?php
require_once APPROOT . '/libraries/php-activerecord/ActiveRecord.php';

class CommentsModal extends ActiveRecord\Model
{
    public static $table_name = 'comments';
    public function addComment($bid, $user, $parent, $comment)
    {
        if ($parent == '') {
            $user = CommentsModal::create(array("user" => $user, "parent" => null, "comment" => $comment,  "blog_id" => $bid));
        } else {
            $user = CommentsModal::create(array("user" => $user, "parent" => $parent, "comment" => $comment,  "blog_id" => $bid));
        }
        // $user = CommentsModal::create(array("user" => "admin@blog.com", "parent" => "some1@email.com", "comment" => "automaic comment",  "blog_id" => "5"));
        return $user;
    }
}
