<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Administration | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/style/style.css">
    <!-- Styles -->
</head>

<body>
    <div class="flex justify-between">
        <div id="Main"
            class="xl:rounded-r transform  transition duration-500 flex justify-start items-start  w-1/6  bg-gray-900 flex-col">
            <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
                <p class="text-2xl leading-6 text-white">OvonRueden</p>
            </div>
            <div
                class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
                <button
                    class="flex jusitfy-start items-center space-x-6 w-full  focus:outline-none  focus:text-indigo-400  text-white rounded ">
                    <p class="text-base leading-4 ">Dashboard</p>
                </button>
                <button
                    class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
                    <p class="text-base leading-4 ">Users</p>
                </button>
            </div>
            <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
                <button onclick="showMenu1(true)"
                    class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                    <p class="text-sm leading-5  uppercase">Profile Overview</p>
                    <svg id="icon1" class="transform" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 hidden">
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">

                        <p class="text-base leading-4 ">Messages</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Security</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                        <p class="text-base leading-4  ">Settings</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Notifications</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Passwords</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Goals</p>
                    </button>
                </div>
            </div>
            <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
                <button onclick="showMenu2(true)"
                    class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                    <p class="text-sm leading-5 uppercase">VENDORS</p>
                    <svg id="icon2" class="transform rotate-180" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="hidden flex justify-start flex-col items-start pb-5 " id="menu2">
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-base leading-4  ">Messages</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Security</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                        <p class="text-base leading-4  ">Settings</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Notifications</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <p class="text-base leading-4  ">Passwords</p>
                    </button>
                </div>
            </div>
            <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full">
                <button onclick="showMenu3(true)"
                    class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                    <p class="text-sm leading-5  uppercase">SERVICES</p>
                    <svg id="icon3" class="rotate-180 transform" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="hidden flex justify-start flex-col items-start pb-5 " id="menu3">
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                        <p class="text-base leading-4  ">Messages</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                        <p class="text-base leading-4  ">Security</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-52">
                        <p class="text-base leading-4  ">Settings</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                        <p class="text-base leading-4  ">Notifications</p>
                    </button>
                    <button
                        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                        <p class="text-base leading-4  ">Passwords</p>
                    </button>
                </div>
                <div class=" flex justify-between items-center w-full mb-4 pb-2">
                    <div class="flex justify-center items-center  space-x-2">
                        <div>
                            <img class="rounded-full" src="https://i.ibb.co/L1LQtBm/Ellipse-1.png" alt="avatar" />
                        </div>
                        <div class="flex justify-start flex-col items-start">
                            <p class="cursor-pointer text-sm leading-5 text-white">Alexis Enache</p>
                            <p class="cursor-pointer text-xs leading-3 text-gray-300">alexis81@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- navbar --}}
        <div class="rounded-r  w-5/6 items-center ">
            <nav class="flex items-center bg-gray-900 p-3 flex-wrap">
                <button
                    class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
                    data-target="#navigation">
                    <i class="material-icons">menu</i>
                </button>
                <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
                    <div
                        class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">
                        <a href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                            <span>Gallery</span>
                        </a>
                        <a href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <script>
        let icon1 = document.getElementById("icon1");
        let menu1 = document.getElementById("menu1");
        const showMenu1 = (flag) => {
            if (flag) {
                icon1.classList.toggle("rotate-180");
                menu1.classList.toggle("hidden");
            }
        };
        let icon2 = document.getElementById("icon2");

        const showMenu2 = (flag) => {
            if (flag) {
                icon2.classList.toggle("rotate-180");
                menu2.classList.toggle("hidden");
            }
        };
        let icon3 = document.getElementById("icon3");

        const showMenu3 = (flag) => {
            if (flag) {
                icon3.classList.toggle("rotate-180");
                menu3.classList.toggle("hidden");
            }
        };

        let Main = document.getElementById("Main");
        let open = document.getElementById("open");
        let close = document.getElementById("close");
    </script>
</body>


</html>
