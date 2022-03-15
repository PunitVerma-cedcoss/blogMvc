
<?php
function getDashBoard($item)
{
    $m = '
    <div class="border-slate-300 bg-gradient-to-r from-cyan-500 to-teal-600  w-64 fixed top-0 left-0 sidebar shadow-md h-screen flex flex-col ">
            <div class="bg-gradient-to-t from-cyan-700 to-teal-600 shadow-lg logo flex text-stone-600 border-b justify-between p-2 items-center">
                <i class="fa fa-box text-cyan-400 text-2xl"></i>
                <p class="text-lg text-stone-100">' . $_SESSION["user"] . '</p>
            </div>
            <div class="bg-gradient-to-t from-cyan-400 to-teal-200 shadow-lg sticker flex justify-start items-center bg-cyan-400 p-3 m-3 rounded-lg">
                <div class="icons-set h-12 w-12 rounded-full bg-white flex justify-center items-center text-stone-500">
                    <i class="fa fa-bolt"></i>
                </div>
                <div class="title ml-3 text-stone-100">
                    <p class="text-md">some title</p>
                    <p class="text-xs">s unique title</p>
                </div>
            </div>
            <div class="options text-sm capitalize grow">
                <a href="/dashboard/editor">
                <div class="hover:bg-cyan-600 cursor-pointer tile  ' . ($item == "editor" ? 'border-r-4 text-stone-100' : 'text-stone-300') . ' p-2 flex justify-center items-center">
                    <i class="fa fa-pen"></i>
                    <p class="grow ml-3">Create a Blog</p>
                </div>
                </a>
                <a href="/dashboard/dashboardHome">
                <div class="hover:bg-cyan-600 cursor-pointer tile login  ' . ($item == "myblogs" ? 'border-r-4 text-stone-100' : 'text-stone-300') . ' p-2 flex justify-center items-center">
                    <i class="fa fa-adjust"></i>
                    <p class="grow ml-3">My Blogs</p>
                </div>
                </a>
                <div class="hover:bg-cyan-600 cursor-pointer tile   ' . ($item == "edit" ? 'border-r-4 text-stone-100' : 'text-stone-300') . ' p-2 flex justify-center items-center">
                    <i class="fa fa-heartbeat"></i>
                    <p class="grow ml-3">Edit a Blog</p>
                </div>
                <div class="hover:bg-cyan-600 cursor-pointer tile text-stone-300 p-2 flex justify-center items-center">
                    <i class="fa fa-lock"></i>
                    <p class="grow ml-3">settings & privacy</p>
                </div>
                <div class="options-divider p-3 text-stone-100 border-b">
                    <p>Blogs</p>
                </div>
                <div class="toggleTools hover:bg-cyan-600 cursor-pointer tile text-stone-300 p-2 flex justify-center items-center">
                    <i class="fa fa-bolt"></i>
                    <p class="grow ml-3">Tools</p>
                </div>
                <div class="hover:bg-cyan-600 cursor-pointer tile text-stone-300 p-2 flex justify-center items-center">
                    <i class="fa fa-fire"></i>
                    <p class="grow ml-3">Most Viewd</p>
                </div>
                <div class="hover:bg-cyan-600 cursor-pointer tile text-stone-300 p-2 flex justify-center items-center">
                    <i class="fa fa-trash"></i>
                    <p class="grow ml-3">deleted</p>
                </div>
            </div>
            <div class="bg-gradient-to-t from-teal-800 to-cyan-700 shadow-lg noti-side p-3 m-3 rounded-lg">
                <p class="text-sm text-stone-100">New Heading</p>
                <p class="text-xs text-stone-300 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="percent text-right">
                    <span class="text-xs text-stone-100 percent">28%</span>
                </div>
                <div class="h-1 w-100 bg-white relative rounded-lg">
                    <div class="bg-gradient-to-l progress from-cyan-600  rounded-lg to-green-500 via-teal-600  h-1 w-24 absolute">
                    </div>
                </div>
            </div>
            <hr>
            <div class="border-slate-300 bg-gradient-to-l from-cyan-800 to-teal-700 shadow-lg profile flex justify-center items-center text-stone-100 p-3">
                <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-full">
                <p class="grow ml-3">Punit Verma</p>
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    ';
    return $m;
}
