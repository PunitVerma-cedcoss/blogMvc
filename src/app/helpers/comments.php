<?php
$data = [];
$indent = 0;
function getObjectByProp($prop, $val)
{
    global $data;
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i]->$prop == $val) {
            return $data[$i];
        }
    }
    return [];
}

function recur($parent)
{
    global $indent;
    $x = getObjectByProp("parent", $parent);
    // print_r($x);
    if (count($x) == 0) {
        $indent = 0;
        return;
    }
    $indent += 15;
    renderComment($x->user, $x->username, $x->comment, $indent, $x->comment_date);
    recur($x->username);
}

function Comment($username)
{
    global $indent, $data;
    foreach ($data as $i) {
        if ($i->parent == $username) {
            $indent += 15;
            renderComment($i->user, $i->username, $i->comment, $indent, $i->comment_date);
            recur($i->username);
        }
    }
}



function renderComment($user, $username, $text, $margin, $date)
{
    $m = '<div data="' . $user . '" class="comment border p-3 rounded" style="margin-left:' . $margin * 2 . 'px;">
        <div class="post-user-profile flex justify-start items-center">
            <img src="https://source.unsplash.com/40x40/?new" alt="" class="rounded-full mr-2">
            <div class="title">
                <p class="text-stone-600 font-bolt-md text-sm">' . $username . '</p>
                <p class="text-stone-500 text-sm font-bold-md">' . $date . '</p>
            </div>
        </div>
        <div class="comment-text p-3 text-stone-700">
            <p>
                ' . $text . '
            </p>
            <div class="comments-plate text-sm text-stone-900 flex mt-2 flex justify-between items-center">
                <div class="box-reply cursor-pointer flex items-center mr-2">
                    <i class="fa fa-reply"></i>
                    <p class="ml-2">reply</p>
                </div>';
    $m .= $user == $_SESSION["user"] ? '
    <div class="delete bg-pink-200 p-2 rounded-lg text-stone-600 box-reply cursor-pointer flex items-center mr-2">
                    <i class="fa fa-trash"></i>
                    <p class="ml-2">delete</p>
                </div>
    ' : '';
    $m .= '</div>
        </div>
    </div>';
    echo $m;
}


function handleComment($data2)
{
    // echo "<pre>";
    // print_r($data2);
    // echo "</pre>";
    global $data, $indent;
    $data = $data2;
    foreach ($data as $i) {
        if ($i->parent == null) {
            $indent = 0;
            renderComment($i->user, $i->username, $i->comment, $indent, $i->comment_date);
            Comment($i->user);
        }
    }
}
