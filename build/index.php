<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selltor: Buy and sell shelters</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- navbar -->
    <?php include 'includes/navbar.php';?>
    <!-- navbar ends -->

    <!-- home search -->
    <?php include 'includes/home_search.php';?>
    <!-- home search ends -->


    <!-- body container -->
    <div class="text-center bg-gray-300">

        <div class="w-full flex items-center justify-center relative" style=top:-2rem>

            <span class="rounded-full h-16 w-16 bg-gray-400 text-secondary flex items-center justify-center">
                V
            </span>
        </div>

        <div class="divide-y-2 divide-secondary-hover w-auto pb-10 text-gray-700 inline-block text-center">
            <p class="text-4xl font-bold ">Explore Properties</p>
            <p class="text-sm">Explore properties from top ranking agents.</p>
        </div>


        <!-- cards container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 lg:px-48 py-10 gap-4">

            <!-- property card -->

            <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 lg:m-0">

                <!-- property image -->
                <div class="h-64 bg-cover" style="background-image:url('img/property2.png')"></div>


                <!-- agent image -->
                <div class="relative w-full flex justify-center">
                    <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 "
                        style="top:-30px">
                </div>

                <!-- heart-->
                <div class="relative w-full flex justify-center">
                    <!-- <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 " style="top:-30px"> -->
                    <a href="" class="h-10 w-10 bg-secondary rounded-full absolute bg-center"
                        style="background-image:url('img/like_icon.svg'); top:-1rem; right:2rem"></a>
                </div>


                <!-- property name and location -->

                <div class="text-left mx-4 mt-10">
                    <!-- title -->
                    <p class="text-2xl font-bold text-gray-800">Modern Loft, with customized balcony</p>
                    <p class="text-xs text-gray-700 flex">
                        <img src="img/address_icon.svg" alt="" class="pr-4">

                        No 43b, Back Side Estate, Tame Street, Wuse, Abuja.
                    </p>

                </div>

                <!-- divider -->
                <hr class="bg-gray-400 mt-2 mb-6">

                <!-- short description -->
                <div class="text-left ml-4 mb-4">
                    <p class="text-sm text-gray-800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe
                        assumenda similique non animi et porro voluptas.</p>
                </div>

                <!-- facility -->
                <div class="text-left ml-4 mb-4 flex items-baseline text-gray-800">
                    <p class="font-bold mr-4"> Facilities:</p>
                    <p class="text-xs"> 2 Beds | 2 Baths | Balcony</p>
                </div>

                <!-- price -->
                <div class="flex justify-between mb-4 mx-4">
                    <div class="text-left  mb-4 flex items-baseline text-gray-800">
                        <p class="font-bold"> Price:</p>
                        <p class="font-bold text-secondary text-base">&#x20A6; 5,000,000</p>
                    </div>

                    <!-- button -->
                    <span class="bg-primary font-bold px-8 py-2 rounded-full w-auto text-white hover:bg-accent">
                        Rent</span>
                </div>


            </div>

            <!-- property card -->

            <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 lg:m-0">

                <!-- property image -->
                <div class="h-64 bg-cover" style="background-image:url('img/property2.png')"></div>


                <!-- agent image -->
                <div class="relative w-full flex justify-center">
                    <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 "
                        style="top:-30px">
                </div>

                <!-- heart-->
                <div class="relative w-full flex justify-center">
                    <!-- <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 " style="top:-30px"> -->
                    <a href="" class="h-10 w-10 bg-secondary rounded-full absolute bg-center"
                        style="background-image:url('img/like_icon.svg'); top:-1rem; right:2rem"></a>
                </div>


                <!-- property name and location -->

                <div class="text-left mx-4 mt-10">
                    <!-- title -->
                    <p class="text-2xl font-bold text-gray-800">Modern Loft, with customized balcony</p>
                    <p class="text-xs text-gray-700 flex">
                        <img src="img/address_icon.svg" alt="" class="pr-4">

                        No 43b, Back Side Estate, Tame Street, Wuse, Abuja.
                    </p>

                </div>

                <!-- divider -->
                <hr class="bg-gray-400 mt-2 mb-6">

                <!-- short description -->
                <div class="text-left ml-4 mb-4">
                    <p class="text-sm text-gray-800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe
                        assumenda similique non animi et porro voluptas.</p>
                </div>

                <!-- facility -->
                <div class="text-left ml-4 mb-4 flex items-baseline text-gray-800">
                    <p class="font-bold mr-4"> Facilities:</p>
                    <p class="text-xs"> 2 Beds | 2 Baths | Balcony</p>
                </div>

                <!-- price -->
                <div class="flex justify-between mb-4 mx-4">
                    <div class="text-left  mb-4 flex items-baseline text-gray-800">
                        <p class="font-bold"> Price:</p>
                        <p class="font-bold text-secondary text-base">&#x20A6; 5,000,000</p>
                    </div>

                    <!-- button -->
                    <span class="bg-primary font-bold px-8 py-2 rounded-full w-auto text-white hover:bg-accent">
                        Rent</span>
                </div>


            </div>

            <!-- property card -->

            <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 lg:m-0">

                <!-- property image -->
                <div class="h-64 bg-cover" style="background-image:url('img/property2.png')"></div>


                <!-- agent image -->
                <div class="relative w-full flex justify-center">
                    <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 "
                        style="top:-30px">
                </div>

                <!-- heart-->
                <div class="relative w-full flex justify-center">
                    <!-- <img src="img/agent1.jpg" alt="" class="rounded-full w-16 h-16 absolute border-2 " style="top:-30px"> -->
                    <a href="" class="h-10 w-10 bg-secondary rounded-full absolute bg-center"
                        style="background-image:url('img/like_icon.svg'); top:-1rem; right:2rem"></a>
                </div>


                <!-- property name and location -->

                <div class="text-left mx-4 mt-10">
                    <!-- title -->
                    <p class="text-2xl font-bold text-gray-800">Modern Loft, with customized balcony</p>
                    <p class="text-xs text-gray-700 flex">
                        <img src="img/address_icon.svg" alt="" class="pr-4">
                        No 43b, Back Side Estate, Tame Street, Wuse, Abuja.
                    </p>

                </div>
                <!-- divider -->
                <hr class="bg-gray-400 mt-2 mb-6">

                <!-- short description -->
                <div class="text-left ml-4 mb-4">
                    <p class="text-sm text-gray-800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe
                        assumenda similique non animi et porro voluptas.</p>
                </div>
                <!-- facility -->
                <div class="text-left ml-4 mb-4 flex items-baseline text-gray-800">
                    <p class="font-bold mr-4"> Facilities:</p>
                    <p class="text-xs"> 2 Beds | 2 Baths | Balcony</p>
                </div>
                <!-- price -->
                <div class="flex justify-between mb-4 mx-4">
                    <div class="text-left  mb-4 flex items-baseline text-gray-800">
                        <p class="font-bold"> Price:</p>
                        <p class="font-bold text-secondary text-base">&#x20A6; 5,000,000</p>
                    </div>
                    <!-- button -->
                    <span class="bg-primary font-bold px-8 py-2 rounded-full w-auto text-white hover:bg-accent">
                        Rent</span>
                </div>
            </div>

        </div>
    </div>

    <!-- sign in and register modal -->
    <?php include 'includes/login_modal.php'?>

    <!-- bottom -->
    <?php include 'includes/bottom.php';?>
    <!-- bottom end -->

    <!-- footer -->
    <?php include 'includes/footer.php';?>
    <!--  footer end-->


    <script src="js/util.js"></script>
</body>

</html>