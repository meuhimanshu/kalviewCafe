
<?php

session_start();

if (!isset($_COOKIE['user'])) {
    header("Location: ../credManager/login.php");
    exit();
}

$username=$_COOKIE['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kal View Cafe</title>
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
            <img src="../assets/user.png" class="size-12 mx-2 "  alt="">
            <div>
            <?php
            echo "<p>$username</p>";
            ?>
            <a href="../credManager/logout.php"><p class="text-sm text-black">Logout</p></a>
        </div>

            </div>
    </nav>
    
    <div id="heroPage" class="text-center items-center font-poppins mt-28 pb-10 ">
        <h1 class="text-5xl font-bold text-primaryColour">Great coffee, even better views.</h1>
        <img src="../assets/mug.png" alt="" class="h-[500px] mx-auto">
        <div id="menu" ></div>
    </div>

    <div id="ourmenu" class="bg-gradient-to-r from-[#976737] to-[#8e5527] items-center pb-20">
        <h1 class="text-3xl font-semibold text-white text-center pt-16 pb-10  ">OUR MENU</h1>
        <div id="selction" class="text-center text-white text-lg">
            <button id="foodbtn" onclick="showFood()" class="  text-primaryColour bg-white rounded-3xl mx-4 py-2 px-6">
                Food
            </button>
            <button id="drinksbtn" onclick="showDrinks()" class=" text-primaryColour bg-white rounded-3xl mx-4 py-2 px-6">
                Drinks
            </button>
        </div>
        <div id="food" >
            <div id="line1" class="flex justify-center gap-14 p-14">
                <div id="bagel_cheese_cream" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/bagel_cheese_cream.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Bagel Cheese Cream</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A creamy, dreamy delight, the perfect 
                        indulgent treat to elevate your breakfast or brunch.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$3.50</p>
                    <a href="../foodtocart/bagel.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Breakfast_Quesadill" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Breakfast_Quesadilla.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Breakfast Quesadill</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A savory twist on breakfast classics, Breakfast Quesadilla, 
                        a cheesy, egg-filled delight wrapped in a tortilla.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$8.35</p>
                    <a href="../foodtocart/quesadill.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Classic B.L.T." class="bg-bgColour pb-6 w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Classic B.L.T.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Classic B.L.T.</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A timeless American classic sandwich of 
                        crispy bacon, crisp lettuce, and ripe tomatoes on toasted bread.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$5.85</p>
                    <a href="../foodtocart/classic_blt.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
            </div>
            <div id="line2" class="flex justify-center gap-14 pt-4">
                <div id="farmer_sandwich" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/farmer_sandwich.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Farmer Sandwich</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A hearty and wholesome meal: Farmer's Sandwich, a rustic delight piled 
                        high with fresh vegetables and your choice of protein.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$8.35</p>
                    <a href="../foodtocart/Farmer_Sandwich.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Soup_Scon" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Soup_Scone.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Soup Scone</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A Match Made in Heaven: Our Soup and Scone combo is the 
                        ultimate comfort food, perfect for a chilly day.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$5.85</p>
                    <a href="../foodtocart/Soup_Scone.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="samosa" class="bg-bgColour pb-6 w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Samosa.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Samosa</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A crispy, deep-fried pastry filled with a flavorful mixture of spiced vegetables. 
                       Perfect for any occasion.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$3.25</p>
                    <a href="../foodtocart/Samosa.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
            </div>
        </div>
        <div id="drinks" class="hidden" >
            <div id="line1" class="flex justify-center gap-14 p-14">
                <div id="Iced Latte" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Iced Latte.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Iced Latte</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A rich and creamy iced coffee, perfect for a hot summer day, 
                        with a shot of espresso and steamed milk.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$5.50</p>
                    <a href="../foodtocart/Iced Latte.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Hot Chocolate " class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Hot Chocolate.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Hot Chocolate </p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A warm and comforting drink, perfect for a cold winter day,
                         made with rich cocoa and topped with whipped cream.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$4.00</p>
                    <a href="../foodtocart/Hot Chocolate.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Matcha Latte" class="bg-bgColour pb-6 w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Matcha Latte.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Matcha Latte</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A healthy and energizing drink, made with matcha green tea powder and steamed milk, 
                        offering a calming and focused boost.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$6.85</p>
                    <a href="../foodtocart/Matcha Latte.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
            </div>
            <div id="line2" class="flex justify-center gap-14 pt-4">
                <div id="Fruit Smoothie" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Fruit Smoothie.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Fruit Smoothie</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A refreshing and healthy drink, made with a blend of fresh fruits and yogurt,
                         providing a nutritious and delicious pick-me-up.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$11</p>
                    <a href="../foodtocart/Fruit Smoothie.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="chai_latte" class="bg-bgColour w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/chai latte.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Chai Latte</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A comforting and aromatic beverage, perfect blend of black tea,
                         milk, and a medley of warming spices.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$3.85</p>
                    <a href="../foodtocart/Chai Latte.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
                   <div id="Fresh Juice" class="bg-bgColour pb-6 w-[350px] text-center rounded-lg hover:scale-105 hover:shadow-2xl shadow-black transition duration-300 overflow-hidden">
                    <img src="../assets/menu/Fresh Juice.png" class="h-[350px] rounded-lg hover:scale-105 transition duration-300" >
                    <p class="text-center mt-4 p-3 text-lg font-bold">Fresh Juice</p>
                    <p class="w-[350px] text-[13px] text-center px-6">
                        A healthy and refreshing drink, made with freshly squeezed fruits and vegetables, 
                        providing essential vitamins and minerals.
                    </p>
                    <p class="text-center font-bold text-2xl mt-4">$5.25</p>
                    <a href="foodtocart/Fresh Juice.php">
                        <button class="rounded-3xl bg-primaryColour text-white hover:scale-105 transition duration-300  my-2 px-7 py-2">
                            Order Now
                        </button>
                    </a>
                   </div>
            </div>
        </div>
        <div id="ourstory"></div>
    </div>

    <div class="bg-gradient-to-r from-bgColour to-[#d1c49c] items-center font-poppins" >
        <h1 class="text-3xl font-semibold text-primaryColour text-center pt-16 pb-10  ">OUR STORY</h1>
        <section id="kal-view-cafe" class="pb-16">
            <div class="container mx-auto px-4 text-primaryColour text-center items-center">
                <h2 class="text-3xl font-bold text-center mb-8">
                    Kal View Cafe: A Taste of Fresh, Local, and Wholesome
                </h2>
                <p class="text-lg text-amber-800 text-center mb-8">
                    Nestled on the picturesque Okanagan College Vernon Campus, Kal View Cafe offers a 
                    delightful culinary experience that celebrates the region's vibrant flavors. As a proud partnership with Uprooted Kitchen & Catering Co.,
                    Kal View Cafe is committed to serving fresh, wholesome, and locally-sourced food.
                </p>
        
                <div class="flex justify-center">
                    <img src="../assets/sitting.webp" alt="" class="h-[500px] rounded-2xl shadow-xl border-2 border-primaryColour hover:scale-105 transition duration-500">
                </div>
                
                <div class="text-center pt-16">
                    <h3 class="text-2xl font-bold mb-4">Join Us at Kal View Cafe</h3>
                    <p class="text-lg text-amber-800">Whether you're a student, faculty member, or a local resident, we invite you to experience the warmth and flavor of Kal View Cafe. Come visit us and discover why we're a beloved destination for food lovers in the Okanagan Valley.</p>
                </div>
            </div>
        </section>
        
    </div>
    
</body>
<footer id="contact" class="bg-gradient-to-r from-[#976737] to-[#8e5527] text-white py-4">
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
<script src="script.js"></script>
</html>
