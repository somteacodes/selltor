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

    <div class="grid grid-cols-1 lg:grid-cols-4 bg-primary lg:px-16 px-4 pb-4 pt-6">

        <div class="">
            <img src="img/logo_big.svg" alt="Selltor" class="w-32">

            <p class="text-white text-xd pt-6">
                Selltor is all in one properties In ut odio libero, at vulputate urna. Nulla tristique mi a massa
                convallis cursus. Nulla eu mi magna.
            </p>

        </div>

        <div class="lg:col-span-2 lg:text-right pt-8 pr-16">
            <p class="font-bold text-white mb-4">Quick links</p>
            <div class="underline">
                <p><a href="#" class="text-accent font-bold text-base">About us</a></p>
                <p><a href="#" class="text-accent font-bold text-base">Services</a></p>
                <p> <a href="#" class="text-accent font-bold text-base">Team</a></p>
            </div>
        </div>



        <div class="pt-6">
            <p class="font-bold text-white mb-4">Contact us</p>
            <a href="#" class="rounded-full bg-white bg-opacity-50 py-4 px-8 text-white text-sm flex items-center mb-4">
                <img src="img/mail_icon.svg" alt="envelope icon" class="h-4 w-4 mr-4">
                email@selltor.domain
            </a>
            <a href="#" class="rounded-full bg-white bg-opacity-50 py-4 px-8 text-white text-sm flex items-center mb-4">
                <img src="img/phone_icon.svg" alt="envelope icon" class="h-4 w-4 mr-4">
                Phone: +234 803 000 0000
            </a>
            <a href="#" class="rounded-full bg-white bg-opacity-50 py-4 px-8 text-white text-sm flex items-center mb-4">
                <img src="img/address_contact_icon.svg" alt="envelope icon" class="h-4 w-4 mr-4">
                Address: Martian Street, Great
                Ave, Abuja, Nigeria.
            </a>
        </div>
    </div>
    <!-- bottom end -->

    <!-- footer -->
    <div class="bg-black lg:flex justify-between py-4 px-4 lg:px-16">
        <div class="mb-4">

            <p class="text-white">

                &copy; <a href="#" class="text-secondary">Somteacodes</a> 2020. All rights reserved
            </p>
        </div>

        <div class="flex items-center">
            <p class="text-secondary text-xs mr-4">
                <a href="#">Terms of Use</a> |
                <a href="#">Privacy Terms</a>
            </p>

            <!-- select input -->
            <div class="relative">
                <select name="currecy" id="currency"
                    class="text-white font-bold py-3 px-4 rounded bg-opacity-50 bg-white appearance-none focus:outline-none pr-6">
                    <option style="color:#FCA311" value="Naira">&#x20A6; Naira</option>
                    <option style="color:#FCA311" value="USD">USD</option>
                    <option style="color:#FCA311" value="EUR">EUR</option>

                </select>

                <div class="absolute flex items-center right-0 inset-y-0 px-2">
                    <img src="img/pointer_down.svg" alt="">
                </div>
            </div>
        </div>

    </div>
    <!--  footer end-->



</body>

</html>