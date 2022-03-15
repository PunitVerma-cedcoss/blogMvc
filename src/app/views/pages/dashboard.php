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
    <title>Document</title>
    <style>
        * {
            transition: 0.3s all ease;
        }

        input[type="color"] {
            -webkit-appearance: none;
            border: none;
            background-color: transparent;
        }

        input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        input[type="color"]::-webkit-color-swatch {
            border-radius: 8px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="window">
        <?php
        echo getDashBoard("dashboard");
        ?>
        <section class=" main w-auto bg-slate-100 flex justify-center items-center ml-64 h-screen ">
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

        </section>
        <button class="open fixed scale-0 bottom-0 right-0 m-5 text-2xl send rounded-lg bg-gradient-to-tl from-cyan-500 to-teal-600 text-white shadow-md shadow-indigo-400 px-3 py-2">
            <i class="fa fa-home"></i>
        </button>
    </div>
</body>

</html>

<script>
    // $("body").click(function () {
    //     $(".progress").animate({ width: "100%" });
    // });

    // $('.bg-gradient-to-t').removeClass(' from-indigo-800 to-blue-700');
    // $('.bg-gradient-to-t').addClass(' from-red-800 to-pink-500');

    $('.tile').click(function(e) {
        // $('.tile').removeClass('text-stone-100');
        $('.tile').addClass('text-stone-300');
        $('.tile').removeClass('border-r-4');

        $(this).addClass('border-r-4');
        $(this).addClass('text-stone-100');
    });

    $('.logo').click(function(e) {
        e.preventDefault();
        $(".sidebar").css("margin-left", "-100%")
        $(".main").removeClass("ml-64")
        $('.open').toggleClass('scale-0');
    });

    $('.open').click(function(e) {
        e.preventDefault();
        $(".sidebar").css("margin-left", "0")
        $(".main").addClass("ml-64")
        $('.open').toggleClass('scale-0');

    });

    $('.toggleTools').click(function(e) {
        e.preventDefault();
        $('.cmdPlate').toggleClass('scale-0');
    });

    var editor = document.getElementById("editor").contentDocument
    editor.designMode = 'On'

    $('.fa-bold').parent().click(function(e) {
        e.preventDefault();
        cmd("bold", null)
    });



    $('.fa-italic').parent().click(function(e) {
        e.preventDefault();
        cmd("italic", null)
    });

    $('.fa-align-left').parent().click(function(e) {
        e.preventDefault();
        cmd("justifyLeft", null)
    });

    $('.fa-align-right').parent().click(function(e) {
        e.preventDefault();
        cmd("justifyRight", null)
    });

    $('.fa-align-center').parent().click(function(e) {
        e.preventDefault();
        cmd("justifyCenter", null)
    });


    $('.fa-underline').parent().click(function(e) {
        e.preventDefault();
        cmd("underline", null)
    });

    $('.fa-image').parent().click(function(e) {
        e.preventDefault();
        $('.inputPlate').toggleClass("scale-0")
        $('.inputPlate').toggleClass("hidden")
    });

    $('.fa-table').parent().click(function(e) {
        e.preventDefault();
        $('.inputPlateTable').toggleClass("scale-0")
        $('.inputPlateTable').toggleClass("hidden")
    });

    $('.fa-font').parent().click(function(e) {
        e.preventDefault();
        $('.inputPlateFont').toggleClass("scale-0")
        $('.inputPlateFont').toggleClass("hidden")
    });

    $('.fa-list-ol').parent().click(function(e) {
        e.preventDefault();
        cmd("insertOrderedList", null)
    });

    $('.fa-list-ul').parent().click(function(e) {
        e.preventDefault();
        cmd("insertUnorderedList", null)
    });

    $('.horizontalLine').click(function(e) {
        e.preventDefault();
        cmd("insertHorizontalRule", null)
    });

    $('.sendFont').click(function(e) {
        e.preventDefault();
        var x = $(this).prev().val()
        if (x.trim() != '') {
            cmd("fontSize", x)
        }
    });

    $('.send').click(function(e) {
        e.preventDefault();
        var x = $(this).prev().val()
        if (x.trim() != '') {
            cmd("insertImage", x)
            $('.inputPlate').addClass('hidden')
        }
    });

    $('.sendTable').click(function(e) {
        e.preventDefault();
        var x = $(this).prev().val()
        if (x.trim() != '') {
            var d = x.split(",")
            insertTable(d[0], d[1])
            $('.inputPlate').addClass('hidden')
        }
    });

    $('.h1').click(function(e) {
        e.preventDefault();
        cmd("formatBlock", 'H1')
    });

    $('.h2').click(function(e) {
        e.preventDefault();
        cmd("formatBlock", 'H2')
    });

    $('.color').click(function(e) {
        console.log($(this).val())
        cmd("foreColor", $(this).val())
    });

    $('.color1').click(function(e) {
        console.log($(this).val())
        cmd("hiliteColor", $(this).val())
    });

    $('.font').change(function(e) {
        e.preventDefault();
        cmd("fontName", $(this).val())
    });

    $('.fa-code').parent().click(function(e) {
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
</script>