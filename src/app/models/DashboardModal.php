<?php
require_once APPROOT . '/libraries/php-activerecord/ActiveRecord.php';

class DashboardModal extends ActiveRecord\Model
{
    public static $table_name = 'blogs';

    public function getBlogById($id)
    {
        $user = DashboardModal::find_by_sql("SELECT *,users.username,users.email FROM `blogs` INNER JOIN users ON blogs.blog_uploader = users.email WHERE blogs.id = $id");
        return $user;
    }
    public function getCoolBlog()
    {
        $user = DashboardModal::find_by_sql("SELECT * FROM `blogs` ORDER BY blog_likes DESC LIMIT 1");
        $coolId = $user[0]->id;
        $comments = DashboardModal::find_by_sql("SELECT COUNT(comments.comment) AS commentsCount FROM `blogs` INNER JOIN comments ON comments.blog_id = blogs.id WHERE blogs.id = '$coolId'");
        $user['totalcomment'] = $comments[0];
        return $user;
    }
    public function getCommentsByBlogId($id)
    {
        $user = DashboardModal::find_by_sql("SELECT *,users.username FROM comments INNER JOIN users ON users.email = comments.user WHERE comments.blog_id = '$id'");
        return $user;
    }
    public function getAllBlogs()
    {
        $user = DashboardModal::find("all");
        return $user;
    }
    public function insertBlog($blogImage, $blogTitle, $blogTags, $blogContent)
    {

        session_start();
        $user = DashboardModal::create(array('blog_image' => $blogImage, 'blog_title' => $blogTitle, 'blog_uploader' => $_SESSION["user"], "blog_tags" => $blogTags, "blog_content" => $blogContent, "blog_likes" => "0", "blog_views" => "0"));
        return $user;
    }
    public function updateBlog($id, $blogImage, $blogTitle, $blogTags, $blogContent)
    {
        $data = DashboardModal::find((int) $id);
        print_r($blogTitle);
        print_r($data->blog_title);

        // setting the data
        $data->blog_image = $blogImage;
        $data->blog_title = $blogTitle;
        $data->blog_tags = $blogTags;
        $data->blog_content = $blogContent;

        $data->save();

        // session_start();
        // $user = DashboardModal::create(array('blog_image' => $blogImage, 'blog_title' => $blogTitle, 'blog_uploader' => $_SESSION["user"], "blog_tags" => $blogTags, "blog_content" => $blogContent, "blog_likes" => "0", "blog_views" => "0"));
        // return $user;
    }
}
