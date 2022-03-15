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
    <title>Blog</title>
</head>
<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<body class="overflow-x-hidden bg-stone-200">
    <?php
    echo getHeader("home");
    ?>
</body>
<section class="hero flex flex-col flex-col-reverse sm:flex-row justify-center items-center py-5">
    <div class="card-content p-3 flex flex-col mt-5 sm:mt-0">
        <a href="/blogs/blog/<?php echo $data["featured"][0]->id ?>" target="_top">
            <p class="text-2xl font-bold max-w-lg hero-tile"><?php echo $data["featured"][0]->blog_title; ?></p>
        </a>
        <p class="max-w-lg text-stone-600 mt-3 hero-title"><?php echo strip_tags(substr($data["featured"][0]->blog_content, 0, 270)); ?></p>
        <p class="blog-date text-md text-stone-600 my-3">
            2 days ago
        </p>
        <div class="blog-options-plate flex">
            <div class="option-plate text-stone-400 text-sm">
                <i class="fa fa-eye text-xs"></i>
                <span><?php echo $data["featured"][0]->blog_views; ?></span>
            </div>
            <div class="option-plate text-stone-400 text-sm ml-2">
                <i class="fa fa-heart text-xs"></i>
                <span><?php echo $data["featured"][0]->blog_likes; ?></span>
            </div>
        </div>
    </div>
    <div class="box m-3 hero-image">
        <img src="<?php echo explode(",", $data["featured"][0]->blog_image)[0]; ?>" style="width:400px;height:300px;" alt="" class="rounded-lg shadow-2xl">
    </div>
</section>
<hr>
<section class="feature grid grid-cols-1 bg-stone-200 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-4 gap-1">
    <div class="card-big bg-white p-3 rounded-lg m-3 shadow-md">
        <div class="card-img m-5">
            <img src="https://source.unsplash.com/1920x1080/?cool" alt="" class="rounded-lg">
        </div>
        <div class="card-profile flex w-full p-3">
            <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
            <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                <p class="text-stone-600 p-0 m-0">Some Name</p>
                <p class="m-0 p-0">2 days ago</p>
            </div>
        </div>
        <div class="card-content">
            <p class="text-lg font-bold text-stone-800">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore deserunt, praesentium distinctio iusto.</p>
            <p class="text-sm text-stone-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure repellendus esse eos perspiciatis nam quos non ad? Debitis ex asperiores dignissimos pariatur animi ut optio nulla eligendi rerum alias. Inventore! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam repellendus amet qui quasi numquam architecto. Mollitia soluta nam fugit nostrum, quo ullam optio dignissimos! Magnam, culpa. Consectetur sapiente asperiores eum? <span class="text-pink-500 underline">Read More</span> </p>
        </div>
    </div>
    <div class="cards flex flex-col bg-stone-200 p-3">
        <div class="categories rounded-lg">
            <ul class="bg-white rounded-lg border-2 text-stone-700">
                <a href="#">
                    <li class="flex items-center p-3 border-b cursor-pointer hover:bg-gray-100">
                        <i class="fa fa-bolt mr-2"></i>
                        <p>Trending</p>
                    </li>
                </a>
                <a href="#">
                    <li class="flex items-center p-3 border-b cursor-pointer hover:bg-gray-100">
                        <i class="fa fa-box mr-2"></i>
                        <p>Sports & Fitness</p>
                    </li>
                </a>
                <a href="#">
                    <li class="flex items-center p-3 border-b cursor-pointer hover:bg-gray-100">
                        <i class="fa fa-truck mr-2"></i>
                        <p>Daily Digests</p>
                    </li>
                </a>
                <a href="#">
                    <li class="flex items-center p-3 border-b cursor-pointer hover:bg-gray-100">
                        <i class="fa fa-bolt mr-2"></i>
                        <p>Trending</p>
                    </li>
                </a>
            </ul>
        </div>
        <div class="blogs2 mt-3 grid grid-cols-1 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-1">
            <?php
            foreach ($data["posts"] as $p) {
            ?>

                <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                    <div class="card-body mt-3 px-6">
                        <div class="card-profile flex w-full pt-2 pb-4">
                            <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                            <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                                <p class="text-stone-600 p-0 m-0"><?php echo $p->username ?></p>
                                <p class="m-0 p-0">2 days ago</p>
                            </div>
                        </div>
                        <a href="/blogs/blog/1">
                            <p class="card-title text-md font-bold leading-none mb-2 text-stone-900"><?php echo $p->blog_title; ?> <span class="text-stone-500 font-normal text-sm"> 2 days ago</span></p>
                        </a>
                        <p class="card-text text-sm text-stone-700 text-ellipsis"><?php echo strip_tags(substr($p->blog_content, 0, 100)); ?> </p>
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
        </div>
    </div>
</section>
<section class="latest-blogs p-3 bg-stone-200">
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
    </div>
</section>

</html>
<?php
echo getFooter("home");
?>
<script>
    $(".close").click(function(e) {
        e.preventDefault();
        $('.nav-links').toggleClass('hidden')
    });
    //WITH Timelines (cleaner, more versatile)
</script>