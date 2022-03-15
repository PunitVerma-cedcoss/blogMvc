<?php
function getHeader($link)
{
    $header = '<nav class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white flex flex-col md:flex-row justify-between items-around sm:items-center">
        <div class="brand-logo block p-3 flex justify-between">
            <i class="fa fa-fire text-2xl"></i>
            <div class="close cursor-pointer md:hidden">
                <i class="fa fa-align-center text-xl"></i>
            </div>
        </div>
        <div class="nav-links hidden md:block">
            <ul class="nav p-0 m-0 flex flex-col sm:flex-row">
                <a href="/" class="md:mr-4 p-3 nav-item">
                    <li class="flex items-center">
                        <i class="fa fa-home mr-2 text-sm"></i>
                        <p>Home</p>
                    </li>
                </a>
                <a href="/dashboard/dashboardHome" class="md:mr-4 p-3 nav-item">
                    <li class="flex items-center">
                        <i class="fa fa-box mr-2 text-sm"></i>
                        <p>Blogs</p>
                    </li>
                </a>
                <a href="/dashboard/editor" class="md:mr-4 p-3 nav-item">
                    <li class="flex items-center">
                        <i class="fa fa-home mr-2 text-sm"></i>
                        <p>Dashboard</p>
                    </li>
                </a>
                <a href="/logout" class="md:mr-4 p-3 nav-item">
                    <li class="flex items-center">
                        <i class="fa fa-bolt mr-2 text-sm"></i>
                        <p>logout</p>
                    </li>
                </a>
            </ul>
        </div>
    </nav>
     ';
    return $header;
}

function getFooter()
{
    $footer = '
    <footer class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white p-5 mt-5 grid grid-cols-1 sm:grid-cols-4 md:grid-cols-2 lg:grid-cols-4">
    <div class="col">
        <p class="text-xl">UseFull links</p>
        <ul class="text-sm">
            <li>Home</li>
            <li>blogs</li>
            <li>my blogs</li>
            <li>Dashboard</li>
        </ul>
    </div>
    <div class="col">
        <p class="text-xl">UseFull links</p>
        <ul class="text-sm">
            <li>asperiores nulla tempora numquam </li>
            <li>Lorem ipsum dolor sit amet eli</li>
            <li>asperiores nulla tempora </li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>asperiores nulla tempora in</li>
        </ul>
    </div>
    <div class="col">
        <p class="text-xl">UseFull links</p>
        <ul class="text-sm">
            <li>Home</li>
            <li>blogs</li>
            <li>my blogs</li>
            <li>Dashboard</li>
        </ul>
    </div>
    <div class="col">
        <p class="text-xl">UseFull links</p>
        <p class="text-justify text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse porro asperiores nostrum quo itaque nisi modi, soluta voluptas fuga temporibus, impedit officiis omnis consectetur saepe atque dicta cum iusto est.</p>
    </div>
    <div class="w-100 p-5 mt-4 border-t text-center col-span-full">
        <p>copyright @punit Verma</p>
    </div>
</footer>
    ';
    return $footer;
}
