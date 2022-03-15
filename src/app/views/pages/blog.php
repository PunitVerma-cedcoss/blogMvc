<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=typography,aspect-ratio,line-clamp"></script>
    <!-- Frontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <title>
        <?php
        echo $data[0]->blog_title;
        ?>
    </title>
</head>

<?php
echo getHeader("home");
?>

<body>
    <section class="hero-image">
        <img src="<?php echo explode(",", $data[0]->blog_image)[0]; ?>" alt="" class="w-screen" style="height:50vh;" style="background-size: contain;">
    </section>
    <section class="content p-3">
        <div class="post-detials mt-2">
            <div class="post-user-profile flex justify-start items-center">
                <img src="https://source.unsplash.com/50x50/?avatar" alt="" class="rounded-full mr-2">
                <div class="title">
                    <p class="text-stone-600 font-bolt-md text-sm"><?php echo $data[0]->username ?></p>
                    <p class="text-stone-500 font-bold-md">2022-03-10 5:20pm</p>
                </div>
            </div>
            <div class="misc mt-3 p-3 flex">
                <div class="box flex items-center text-stone-500 mr-3">
                    <i class="fa fa-comments mr-2"></i>
                    <p>
                        <?php
                        echo count($data["comments"]);
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        ?>
                    </p>
                </div>
                <div class="box flex items-center text-stone-500 mr-3">
                    <i class="fa fa-heart text-pink-500 mr-2"></i>
                    <p>
                        <?php
                        echo $data[0]->blog_likes;
                        ?>
                    </p>
                </div>
                <div class="box flex items-center text-stone-500 mr-3">
                    <i class="fa fa-eye mr-2"></i>
                    <p>
                        <?php
                        echo $data[0]->blog_views;
                        ?>
                    </p>
                </div>
                <?php
                if ($data[0]->blog_uploader == $_SESSION["user"]) {
                    echo "<a href='/blogs/edit/" . $data[0]->bid . "'" . $data[0]->bid . "' target='_self'>Edit</a>";
                }
                ?>
                <?php
                if ($data[0]->blog_uploader == $_SESSION["user"]) {
                    echo "<a class='ml-2' href='/blogs/delete/" . $data[0]->bid . "'" . $data[0]->bid . "' target='_self'>Delete</a>";
                }
                ?>
            </div>
        </div>
        <div class="post-tags mb-3 flex text-stone-500">
            <?php
            $d = explode(',', $data[0]->blog_tags);
            if (count($d) > 0) {
                foreach ($d as $tag) {
                    echo "<p class='ml-2 text-blue-600'><a href='#'>" . $tag . "</a></p>";
                }
            }
            ?>
        </div>
        <div class="post-title">
            <p class="text-4xl text-stone-600 font-bold"><?php echo $data[0]->blog_title; ?></p>
            <!-- <i class="fa fa-heart text-5xl ml-3 text-stone-500 hover:text-pink-600"></i> -->
        </div>
        <div class="post-content p-3 text-stone-600">
            <p class="first-letter:text-4xl"><?php echo $data[0]->blog_content; ?></p>
        </div>
        <!-- <div class="like w-100 text-center">
            <i class="fa fa-heart text-9xl text-pink-600"></i>
        </div> -->
        <section class="hero flex flex-col flex-col-reverse sm:flex-row justify-center items-center py-5">
            <div class="card-content p-3 flex flex-col mt-5 sm:mt-0">
                <a href="/blogs/blog/<?php echo $data["featured"][0]->id ?>" target="_top">
                    <p class="text-2xl font-bold max-w-lg hero-tile">
                        <?php
                        print_r($data["featured"][0]->blog_title);
                        ?>
                    </p>
                </a>
                <p class="max-w-lg text-stone-600 mt-3 hero-title">
                    <?php
                    echo substr($data["featured"][0]->blog_content, 0, 230) . "...";
                    ?>
                </p>
                <p class="blog-date text-md text-stone-600 my-3">
                    2 days ago
                </p>
                <div class="blog-options-plate flex">
                    <div class="option-plate text-stone-400 text-sm">
                        <i class="fa fa-comments text-xs"></i>
                        <span>
                            <?php
                            print_r($data["featured"]["totalcomment"]->commentscount);
                            ?>
                        </span>
                    </div>
                    <div class="option-plate text-stone-400 text-sm ml-2">
                        <i class="fa fa-heart text-xs"></i>
                        <span>23,98</span>
                    </div>
                </div>
            </div>
            <div class="box m-3 hero-image">
                <img src="<?php echo explode(',', $data[0]->blog_image)[0]; ?>" width="400" height="300" alt="" class="rounded-lg shadow-2xl bg-contain" style="
    width: 400px;
    height: 300px;
">
            </div>
        </section>
        <p class="text-stone-600 p-3">comments (
            <?php
            echo count($data["comments"]);
            ?>)</p>
        <div class="post-comments w-100">
            <?php
            echo handleComment($data["comments"]);
            ?>
            <!-- <div class="comment border p-3 rounded">
                <div class="post-user-profile flex justify-start items-center">
                    <img src="https://source.unsplash.com/40x40/?new" alt="" class="rounded-full mr-2">
                    <div class="title">
                        <p class="text-stone-600 font-bolt-md text-sm"><?php echo $data[0]->username ?></p>
                        <p class="text-stone-500 text-sm font-bold-md">2022-03-10 5:20pm</p>
                    </div>
                </div>
                <div class="comment-text p-3 text-stone-700">
                    <p>
                        This is a sample comment over here, and i like it :-)
                    </p>
                    <div class="comments-plate text-sm text-stone-900 flex mt-2">
                        <div class="box flex items-center mr-2">
                            <i class="fa fa-reply"></i>
                            <p class="ml-2">reply</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment border rounded p-3 ml-8">
                <div class="post-user-profile flex justify-start items-center">
                    <img src="https://source.unsplash.com/40x40/?gradient" alt="" class="rounded-full mr-2">
                    <div class="title">
                        <p class="text-stone-600 font-bolt-md text-sm"><?php echo $data[0]->username ?></p>
                        <p class="text-stone-500 text-sm font-bold-md">2022-03-10 5:20pm</p>
                    </div>
                </div>
                <div class="comment-text p-3 text-stone-700">
                    <p>
                        This is a sample comment over here, and i like it :-)
                    </p>
                    <div class="comments-plate text-sm text-stone-900 flex mt-2">
                        <div class="box flex items-center mr-2">
                            <i class="fa fa-reply"></i>
                            <p class="ml-2">reply</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment border p-3 rounded">
                <div class="post-user-profile flex justify-start items-center">
                    <img src="https://source.unsplash.com/40x40/?new" alt="" class="rounded-full mr-2">
                    <div class="title">
                        <p class="text-stone-600 font-bolt-md text-sm"><?php echo $data[0]->username ?></p>
                        <p class="text-stone-500 text-sm font-bold-md">2022-03-10 5:20pm</p>
                    </div>
                </div>
                <div class="comment-text p-3 text-stone-700">
                    <p>
                        This is a sample comment over here, and i like it :-)
                    </p>
                    <div class="comments-plate text-sm text-stone-900 flex mt-2">
                        <div class="box flex items-center mr-2">
                            <i class="fa fa-reply"></i>
                            <p class="ml-2">reply</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="comment w-100 p-3 flex flex-col justify-center items-start mx-5">
                <p class="text-stone-600 m-3 hidden reply-text">replying to <span class="text-pink-500">somename</span></p>
                <div class="flex">
                    <input type="text" name="" id="commentInput" class="border p-2 rounded-lg" placeholder="type comment here...">
                    <button class="sendComment p-3 bg-teal-600 h-10 w-10 justify-center flex items-center ml-3 rounded-lg text-white">
                        <i class="fa fa-bolt"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-blogs p-3 bg-white">
        <p class="text-stone-500 px-3 pb-3">Recents</p>
        <div class="blogs grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 sm:grid-cols-4 gap-4">
            <?php
            foreach ($data["posts"] as $post) {
            ?>
                <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                    <div class="card-img mt-2">
                        <img src="<?php echo explode(",", $post->blog_image)[0] ?>" alt="" style="width:300px;height:170px;" class="rounded-lg shadow-lg w-100">
                    </div>
                    <div class="card-body mt-3 px-6">
                        <div class="card-profile flex w-full pt-2 pb-4">
                            <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                            <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                                <p class="text-stone-600 p-0 m-0"><?php echo $post->username ?></p>
                                <p class="m-0 p-0">2 days ago</p>
                            </div>
                        </div>
                        <a href="<?php echo '/blogs/blog/' . $post->bid; ?>">
                            <p class="card-title text-md font-bold leading-none mb-2 text-stone-900"><?php echo $post->blog_title; ?> <span class="text-stone-500 font-normal text-sm"> 2 days ago</span></p>
                        </a>
                        <p class="card-text text-sm text-stone-700 text-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius in omnis unde expedita aliquid? Odio, ipsa assumenda</p>
                        <div class="card-plate flex justify-center items-center mt-3">
                            <div class="option-plate text-stone-400 text-sm">
                                <i class="fa fa-comments text-md"></i>
                                <span>24</span>
                            </div>
                            <div class="option-plate text-stone-400 text-sm mx-4">
                                <i class="fa fa-heart text-pink-500 text-md"></i>
                                <span class="">12,3</span>
                            </div>
                            <div class="option-plate text-stone-400 text-sm">
                                <i class="fa fa-eye text-md"></i>
                                <span>32,86</span>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
            <!-- <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                <div class="card-img mt-2">
                    <img src="https://source.unsplash.com/300x170/?colors" alt="" class="rounded-lg shadow-lg w-100">
                </div>
                <div class="card-body mt-3 px-6">
                    <div class="card-profile flex w-full pt-2 pb-4">
                        <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                        <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                            <p class="text-stone-600 p-0 m-0">Some Name</p>
                            <p class="m-0 p-0">2 days ago</p>
                        </div>
                    </div>
                    <p class="card-title text-md font-bold leading-none mb-2 text-stone-900">Lorem ipsum dolor, sit amet consect adipisicing <span class="text-stone-500 font-normal text-sm"> 2 days ago</span></p>
                    <p class="card-text text-sm text-stone-700 text-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius in omnis unde expedita aliquid? Odio, ipsa assumenda</p>
                    <div class="card-plate flex justify-center items-center mt-3">
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-comments text-md"></i>
                            <span>24</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm mx-4">
                            <i class="fa fa-heart text-pink-500 text-md"></i>
                            <span class="">12,3</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-eye text-md"></i>
                            <span>32,86</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                <div class="card-img mt-2">
                    <img src="https://source.unsplash.com/300x170/?colors" alt="" class="rounded-lg shadow-lg w-100">
                </div>
                <div class="card-body mt-3 px-6">
                    <div class="card-profile flex w-full pt-2 pb-4">
                        <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                        <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                            <p class="text-stone-600 p-0 m-0">Some Name</p>
                            <p class="m-0 p-0">2 days ago</p>
                        </div>
                    </div>
                    <p class="card-title text-md font-bold leading-none mb-2 text-stone-900">Lorem ipsum dolor, sit amet consect adipisicing <span class="text-stone-500 font-normal text-sm"> 2 days ago</span></p>
                    <p class="card-text text-sm text-stone-700 text-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius in omnis unde expedita aliquid? Odio, ipsa assumenda</p>
                    <div class="card-plate flex justify-center items-center mt-3">
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-comments text-md"></i>
                            <span>24</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm mx-4">
                            <i class="fa fa-heart text-pink-500 text-md"></i>
                            <span class="">12,3</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-eye text-md"></i>
                            <span>32,86</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                <div class="card-img mt-2">
                    <img src="https://source.unsplash.com/300x170/?colors" alt="" class="rounded-lg shadow-lg w-100">
                </div>
                <div class="card-body mt-3 px-6">
                    <div class="card-profile flex w-full pt-2 pb-4">
                        <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                        <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                            <p class="text-stone-600 p-0 m-0">Some Name</p>
                            <p class="m-0 p-0">2 days ago</p>
                        </div>
                    </div>
                    <p class="card-title text-md font-bold leading-none mb-2 text-stone-900">Lorem ipsum dolor, sit amet consect adipisicing <span class="text-stone-500 font-normal text-sm"> 2 days ago</span></p>
                    <p class="card-text text-sm text-stone-700 text-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius in omnis unde expedita aliquid? Odio, ipsa assumenda</p>
                    <div class="card-plate flex justify-center items-center mt-3">
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-comments text-md"></i>
                            <span>24</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm mx-4">
                            <i class="fa fa-heart text-pink-500 text-md"></i>
                            <span class="">12,3</span>
                        </div>
                        <div class="option-plate text-stone-400 text-sm">
                            <i class="fa fa-eye text-md"></i>
                            <span>32,86</span>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>
</body>
<?php
echo getFooter("home");
?>
<script>
    var replyTo = ''
    $(".box-reply").click(function(e) {
        e.preventDefault();
        var x = $(this).parent().parent().parent().attr("data")
        if (x.trim() != '') {
            replyTo = x.trim()
            $('.reply-text').removeClass("hidden");
            $('.reply-text').children().text(replyTo)
        }
    });
    $('.sendComment').click(function(e) {
        e.preventDefault();
        var x = $(this).prev().val()
        if (x.trim() != "") {
            // alert("commeting ok")
            // make AJAX
            $.ajax({
                type: "POST",
                url: "/Comments/doComment",
                data: {
                    action: "comment",
                    text: x.trim(),
                    blogId: <?php echo $data[0]->bid; ?>,
                    parent: replyTo
                },
                success: function(response) {
                    console.log(response)
                    $("#commentInput").val('')
                    location.reload();
                }
            });
        }
    });
</script>

</html>