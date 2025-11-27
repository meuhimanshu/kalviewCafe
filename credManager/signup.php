<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Kal View Cafe</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../output.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-t from-[#d1c49c] to-bgColour font-poppins">
    <nav class="sticky top-0 z-50 px-4 py-2 font-poppins font-semibold flex items-center justify-between bg-bgColour text-primaryColour shadow-md">
        <div id="logo" class="flex gap-2 w-fit">
            <span class="items-center">
                <img class="h-16" src="../assets/logoBig.png" alt="">
            </span>
        </div>
        <div id="navoptions" class="text-lg flex gap-16 items-center">
            <a href="#menu"><span class="mx-3">Menu</span></a>
            <a href="#ourstory"><span class="mx-3">Our Story</span></a>
            <a href="#contact"><span class="mx-3">Contact</span></a>
            <form action="" method="post">
                <a href=""><span class="mx-3">Orders</span></a>
            </form>
        </div>
        <div id="cred" class="text-lg flex items-center">
            <button class="mx-2">Login</button>
            <button class="mx-2 border rounded-lg border-primaryColour p-2 hover:bg-primaryColour hover:text-white transition duration-300">Sign Up</button>
        </div>
    </nav>  
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md mx-auto my-20">
        <h2 class="text-2xl font-semibold text-center text-primaryColour mb-6">Sign Up for Kal View Cafe</h2>
        <form action="../credManager/signupProcess.php" method="post">
            <div class="mb-4">
                <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primaryColour focus:border-primaryColour" placeholder="Enter your full name" required>
            </div>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primaryColour focus:border-primaryColour" placeholder="Enter your username" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primaryColour focus:border-primaryColour" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primaryColour focus:border-primaryColour" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="text" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primaryColour focus:border-primaryColour" placeholder="Create a password" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-primaryColour text-white font-semibold px-6 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">Sign Up</button>
            </div>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account? 
            <a href="../credManager/login.php" class="text-primaryColour font-medium hover:underline">Log in here</a>.
        </p>
    </div>
</body>
<footer id="contact" class=" mt-9 bg-gradient-to-r from-[#976737] to-[#8e5527] text-white py-4">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <h2 class="text-xl font-bold">Kal View Cafe</h2>
                <p class="text-white">Your favorite spot for great food and drinks.</p>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-lg font-bold">Contact Us</h3>
                    <ul>
                        <li>7000 College Way, Coldstream</li>
                        <li>(123) 456-7890</li>
                        <li>kalviewcafe@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="text-center text-sm text-white mt-4">© 2024 Kal View Cafe. All Rights Reserved.</p>
    </div>
</footer>
<script src="/script.js"></script>
</html>
