<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- tailwind js -->
    <script src="https://cdn.tailwindcss.com?plugins=typography,aspect-ratio,line-clamp"></script>
    <!-- Frontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Login</title>
</head>

<body class="h-screen w-screen bg-gray-100 flex justify-center items-center text-gray-700">
    <form method="post">
        <label class="block text-9xl text-gray-200 text-center">
            <i class="fa fa-fire"></i>
        </label>
        <label class="block">
            <span class="block text-md font-medium text-gray-600 p-2 flex justify-start items-center"><i class="fa fa-user text-xs mr-2"></i> Email</span>
            <input type="email" name="email" class="peer p-3 rounded-lg shadow-sm focus:shadow-md outline-none" placeholder="enter email" required />
        </label>
        <label class="block">
            <span class="block text-md font-medium text-gray-600 p-2 flex justify-start items-center"><i class="fa fa-lock text-xs mr-2"></i> Password</span>
            <input type="password" name="password" class="peer p-3 rounded-lg shadow-sm focus:shadow-md outline-none" placeholder="enter password" required />
        </label>
        <label class="block">
            <button name="submit" class="shdow-sm block w-full p-3 rounded-lg m-6 text-white mx-auto bg-gradient-to-r from-purple-500 to-blue-500 hover:shadow-xl hover:shadow-purple-200">
                <i class="fa fa-bolt"></i> Login
            </button>
        </label>
        <label class="block text-sm">
            <p><a href="/auth/register" class="text-purple-500 underline">Register</a> here.</p>
        </label>
        <?php
        if ($data == "success") {
            echo '<label for="" class="block p-3 text-center text-green-600 my-2 bg-gray-200 rounded-lg">
                        <p>successfully registered</p>
                    </label>';
        } elseif (isset($data["error"])) {
            echo '<label for="" class="block p-3 text-center text-red-600 my-2 bg-gray-200 rounded-lg">
            <p>Incorrect Username/Password</p>
        </label>';
        }
        ?>
    </form>
</body>

</html>