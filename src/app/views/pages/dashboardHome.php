<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Frontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="javascript/dashboardHome.js" defer></script>
    <title>Dashboard Home</title>
</head>

<body>
    <div class="window">
        <?php
        echo getDashBoard("myblogs");
        ?>
        <section class=" main w-auto bg-slate-100 flex ml-64 h-screen p-3">
            <div class="w-64 fixed top-0 right-0 m-5 bg-gradient-to-r from-cyan-500 to-teal-600 scale-0 cmdPlate grid grid-cols-4 gap-2 scale-1 p-3 rounded-lg shadow-md shadow-cyan-300">
                <button class=" text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-font"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-bold"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 flex justify-center items-center rounded-lg shadow-lg">
                    <!-- <i class="fa fa-font"></i> -->
                    <input type="color" class="color w-10 h-10 p-0 m-0">
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-italic"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-underline"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-image"></i>
                </button>
                <button class="h2 text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <p class="font-bold">H2</p>
                </button>
                <button class="h1 text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <p class="font-bold">H1</p>
                </button>

                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-align-center"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-align-left"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-align-right"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-strikethrough"></i>
                </button>

                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-list-ol"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-list-ul"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-indent"></i>
                </button>
                <button class="horizontalLine text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <p class="text-lg font-bold">HR</p>
                </button>


                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-outdent"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-subscript"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-superscript"></i>
                </button>
                <button class="text-white w-12 h-12 border-2 rounded-lg shadow-lg">
                    <i class="fa fa-code"></i>
                </button>

                <button class="text-white w-12 h-12 border-2 flex justify-center items-center rounded-lg shadow-lg">
                    <input type="color" class="color1 w-10 h-10 p-0 m-0" value="#ff45ff">
                </button>
                <select name="" id="" class="text-sm font border-2 border-white w-fit after:text-red-500 rounded-lg bg-teal-500  text-white shadow-md">
                    <option value="Arial">Arial</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
                    <option value="Courier">Courier</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Verdana">Verdana</option>
                </select>
            </div>
            <div class="misc fixed bottom-0 right-0 mb-56 m-5">
                <div class="inputPlate flex scale-0 hidden">
                    <input type="text" class="w-40 rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md ">
                    <button class="ml-2 send rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md  px-3 py-2">
                        <i class="fa fa-plane"></i>
                    </button>
                </div>
                <div class="inputPlateTable flex scale-0 hidden">
                    <input type="text" placeholder="x,y" class="w-40 rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md ">
                    <button class="ml-2 sendTable rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md  px-3 py-2">
                        <i class="fa fa-plane"></i>
                    </button>
                </div>
                <div class="inputPlateFont flex scale-0 hidden">
                    <input type="text" placeholder="x,y" class="w-40 rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md ">
                    <button class="ml-2 sendFont rounded-lg border-2 border-white bg-gradient-to-r from-indigo-500 to-blue-600 text-white shadow-md  px-3 py-2">
                        <i class="fa fa-plane"></i>
                    </button>
                </div>
            </div>

            <div class="blogs grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 sm:grid-cols-4 gap-4">
                <?php
                foreach ($data as $blog) {
                    echo '
                    <div class="card hover:shadow-2xl flex flex-col justify-center items-center p-2 bg-white rounded-lg shadow-lg">
                    <div class="card-img mt-2">
                        <img src="' . explode(",", $blog->blog_image)[0] . '" style="height:140px;" alt="" class="rounded-lg shadow-lg w-100">
                    </div>
                    <div class="card-body mt-3 px-6">
                        <div class="card-profile flex w-full pt-2 pb-4">
                            <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full w-10 h-10 border-pink-500 mr-2">
                            <div class="card-profile-content text-sm text-stone-500" style="flex-grow:1;">
                                <p class="text-stone-600 p-0 m-0">Some Name</p>
                                <p class="m-0 p-0">2 days ago</p>
                            </div>
                        </div>
                        <a href="/blogs/blog/' . $blog->id . '"><p class="card-title text-md font-bold leading-none mb-2 text-stone-900">' . $blog->blog_title . ' <span class="text-stone-500 font-normal text-sm">' .  date("d-m-y", strtotime($blog->blog_date)) . '</span></p></a>
                        <p class="card-text text-sm text-stone-700 text-ellipsis">' . strip_tags(substr($blog->blog_content, 0, 100)) . '</p>
                        <div class="card-plate flex justify-center items-center mt-3">
                            <div class="option-plate text-stone-400 text-sm">
                                <i class="fa fa-comments text-md"></i>
                                <span>24</span>
                            </div>
                            <div class="option-plate text-stone-400 text-sm mx-4">
                                <i class="fa fa-heart text-pink-500 text-md"></i>
                                <span class="">' . $blog->blog_likes . '</span>
                            </div>
                            <div class="option-plate text-stone-400 text-sm">
                                <i class="fa fa-eye text-md"></i>
                                <span>' . $blog->blog_views . '</span>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
                }
                ?>
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
                </div>

            </div>
        </section>
        <button class="open fixed scale-0 bottom-0 right-0 m-5 text-2xl send rounded-lg bg-gradient-to-tl from-cyan-500 to-teal-600 text-white shadow-md shadow-indigo-400 px-3 py-2">
            <i class="fa fa-home"></i>
        </button>
    </div>
</body>

</html>
