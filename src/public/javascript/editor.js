var details = []

$('.saveDetails').click(function (e) {
    e.preventDefault();
    var blogTitle = $("#blog_title").val()
    var blogImages = $("#blog_images").val()
    var blogTags = $("#blog_tags").val()
    if (blogTitle != '' && blogTags != '' && blogImages != '') {
        details.push({
            blogTitle: blogTitle,
            blogImages: blogImages,
            blogTags: blogTags,
        })
        $("#DetailForm").parent().hide()
    }
});

$('body', $('#editor').contents()).on('keyup', function (e) {
    var x = $(this).html().length
    if (x != 0) {
        $(".save").removeClass("scale-0")
    } else {
        $(".save").addClass("scale-0")
    }
});

$(".save").click(function (e) {
    details.push($("#editor").contents().find("html").html())
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/dashboard/saveData",
        data: {
            action: "getData",
            data: details,
        },
        success: function (response) {
            if (Boolean(response.trim()) == true) {
                window.location.replace("http://localhost:8080/dashboard/dashboardHome");
            }
        }
    });
});
$('.tile').click(function (e) {
    $('.tile').addClass('text-stone-300');
    $('.tile').removeClass('border-r-4');

    $(this).addClass('border-r-4');
    $(this).addClass('text-stone-100');
});

$('.logo').click(function (e) {
    e.preventDefault();
    $(".sidebar").css("margin-left", "-100%")
    $(".main").removeClass("ml-64")
    $('.open').toggleClass('scale-0');
});

$('.open').click(function (e) {
    e.preventDefault();
    $(".sidebar").css("margin-left", "0")
    $(".main").addClass("ml-64")
    $('.open').toggleClass('scale-0');

});

$('.toggleTools').click(function (e) {
    e.preventDefault();
    $('.cmdPlate').toggleClass('scale-0');
});

var editor = document.getElementById("editor").contentDocument
editor.designMode = 'On'

$('.fa-bold').parent().click(function (e) {
    e.preventDefault();
    cmd("bold", null)
});



$('.fa-italic').parent().click(function (e) {
    e.preventDefault();
    cmd("italic", null)
});

$('.fa-align-left').parent().click(function (e) {
    e.preventDefault();
    cmd("justifyLeft", null)
});

$('.fa-align-right').parent().click(function (e) {
    e.preventDefault();
    cmd("justifyRight", null)
});

$('.fa-align-center').parent().click(function (e) {
    e.preventDefault();
    cmd("justifyCenter", null)
});


$('.fa-underline').parent().click(function (e) {
    e.preventDefault();
    cmd("underline", null)
});

$('.fa-image').parent().click(function (e) {
    e.preventDefault();
    $('.inputPlate').toggleClass("scale-0")
    $('.inputPlate').toggleClass("hidden")
});

$('.fa-table').parent().click(function (e) {
    e.preventDefault();
    $('.inputPlateTable').toggleClass("scale-0")
    $('.inputPlateTable').toggleClass("hidden")
});

$('.fa-font').parent().click(function (e) {
    e.preventDefault();
    $('.inputPlateFont').toggleClass("scale-0")
    $('.inputPlateFont').toggleClass("hidden")
});

$('.fa-list-ol').parent().click(function (e) {
    e.preventDefault();
    cmd("insertOrderedList", null)
});

$('.fa-list-ul').parent().click(function (e) {
    e.preventDefault();
    cmd("insertUnorderedList", null)
});

$('.horizontalLine').click(function (e) {
    e.preventDefault();
    cmd("insertHorizontalRule", null)
});

$('.sendFont').click(function (e) {
    e.preventDefault();
    var x = $(this).prev().val()
    if (x.trim() != '') {
        cmd("fontSize", x)
    }
});

$('.send').click(function (e) {
    e.preventDefault();
    var x = $(this).prev().val()
    if (x.trim() != '') {
        cmd("insertImage", x)
        $('.inputPlate').addClass('hidden')
    }
});

$('.sendTable').click(function (e) {
    e.preventDefault();
    var x = $(this).prev().val()
    if (x.trim() != '') {
        var d = x.split(",")
        insertTable(d[0], d[1])
        $('.inputPlate').addClass('hidden')
    }
});

$('.h1').click(function (e) {
    e.preventDefault();
    cmd("formatBlock", 'H1')
});

$('.h2').click(function (e) {
    e.preventDefault();
    cmd("formatBlock", 'H2')
});

$('.color').click(function (e) {
    console.log($(this).val())
    cmd("foreColor", $(this).val())
});

$('.color1').click(function (e) {
    console.log($(this).val())
    cmd("hiliteColor", $(this).val())
});

$('.font').change(function (e) {
    e.preventDefault();
    cmd("fontName", $(this).val())
});

$('.fa-code').parent().click(function (e) {
    e.preventDefault();
    document.getElementById("editor").contentDocument.body.innerHTML += `<code>code snippet here.</code>`
});


function cmd(c, a) {
    console.log(c + "+" + a)
    editor.execCommand(c, false, a)
}

function insertTable(x, y) {
    var m = `<table style="border-collapse: collapse;">`
    for (let i = 0; i < x; i++) {
        m += `<tr>`
        for (let j = 0; j < y; j++) {
            m += `<td style="border:1px solid black;padding:4px;">Table</td>`
        }
        m += `</tr>`
    }
    m += `</table>`
    document.getElementById("editor").contentDocument.body.innerHTML += m
}