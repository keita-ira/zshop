<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZShop - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

<!-- Main Layout -->
<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-1/4 bg-[#6B4F3B] text-white p-4 flex flex-col">
        <h2 class="text-2xl font-bold mb-6">
            <img src="assets/ZSHOP.png" alt="ZShop Logo" class="w-40 mb-4 mx-auto">
        </h2>
        <ul class="flex-grow">
            <li class="mb-4"><a href="index.php" class="text-lg hover:text-gray-200">Home</a></li>
            <li class="mb-4"><a href="shop.php" class="text-lg hover:text-gray-200">Products</a></li>
            <li class="mb-4"><a href="about.php" class="text-lg hover:text-gray-200">About</a></li>
            <li class="mb-4"><a href="contact.php" class="text-lg hover:text-gray-200">Contact</a></li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white">
            <a href="login.php" class="block mb-2 text-lg hover:text-gray-200">Login</a>
            <a href="signup.php" class="text-lg hover:text-gray-200">Sign Up</a>
        </div>
    </div>

    <!-- Main Content with Hero Background -->
    <div class="w-3/4 relative bg-cover bg-center" style="background-image: url('hero.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white fade-in">
            <div>
                <img src="assets/ZSHOP.png" alt="ZShop Logo" class="w-40 mx-auto mb-6">
                <h1 class="text-5xl font-bold mb-4">Welcome to ZShop</h1>
                <p class="text-xl">Your favorite place to shop quality products</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>

