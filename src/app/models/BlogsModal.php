<?php
require_once APPROOT . '/libraries/php-activerecord/ActiveRecord.php';

class BlogsModal extends ActiveRecord\Model
{
    public static $table_name = 'blogs';

    public function getBlogById($id)
    {
        $user = BlogsModal::find_by_sql("SELECT blogs.id AS bid,blogs.blog_image,blogs.blog_title,blogs.blog_content,blogs.blog_uploader,blogs.blog_tags,blogs.blog_date,blogs.blog_views,blogs.blog_likes,users.username,users.email FROM `blogs` INNER JOIN users ON blogs.blog_uploader = users.email WHERE blogs.id = $id");
        return $user;
    }
    public function getCoolBlog()
    {
        $user = BlogsModal::find_by_sql("SELECT * FROM `blogs` ORDER BY blog_likes DESC LIMIT 1");
        $coolId = $user[0]->id;
        $comments = BlogsModal::find_by_sql("SELECT COUNT(comments.comment) AS commentsCount FROM `blogs` INNER JOIN comments ON comments.blog_id = blogs.id WHERE blogs.id = '$coolId'");
        $user['totalcomment'] = $comments[0];
        return $user;
    }
    public function getCommentsByBlogId($id)
    {
        $user = BlogsModal::find_by_sql("SELECT *,users.username FROM comments INNER JOIN users ON users.email = comments.user WHERE comments.blog_id = '$id'");
        return $user;
    }
    public function getRecentPosts()
    {
        $user = BlogsModal::find_by_sql("SELECT blogs.id AS bid,blog_image,blog_title,blog_content,blog_uploader,blog_tags,blog_date,blog_likes,blog_views,users.username,users.email FROM `blogs` INNER JOIN users ON users.email = blogs.blog_uploader LIMIT 4");
        return $user;
    }
    public function increaseCount($id)
    {
        $user = BlogsModal::find(['id' => (int) $id]);
        $user->blog_views++;
        $user->save();
        // return $user;
    }
    public function deleteById($id)
    {
        session_start();
        $user = BlogsModal::find($id);
        if ($user->blog_uploader == $_SESSION["user"]) {
            $user->delete();
            return $user;
        }
    }
}
