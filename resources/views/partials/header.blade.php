<!-- header -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="container mx-auto px-4 py-8 flex items-center">
        <!-- logo -->
        <div class="mr-auto md:w-48 flex-shrink-0">
            <router-link to="/">LikeAshraful </router-link>
        </div>

        <!-- buttons -->
        <nav class="contents">
            <ul class="ml-4 xl:w-48 flex items-center justify-end">
                <li class="ml-2 lg:ml-4 relative inline-block">
                    <a class="" href="">
                        <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far"
                            data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-user fa-w-14 fa-9x">
                            <path fill="currentColor"
                                d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="ml-2 lg:ml-4 relative inline-block">
                    <a class="" href="">
                        <div
                            class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">
                            3</div>
                        <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false"
                            data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16 fa-9x">
                            <path fill="currentColor"
                                d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                            </path>
                        </svg>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <hr />
    <!-- header navigation -->
    <div class="container mx-auto px-4 py-2 flex items-center">
        <!-- menu -->
        <nav class="xl:contents ml-8">
            <ul class="flex items-center text-sm font-bold">
                <li class="px-3 lg:px-3 flex items-center">
                    <router-link to="/national">জাতীয়</router-link>
                </li>
                <li class="px-3 lg:px-3 flex items-center">
                    <router-link to="/sports">খেলা</router-link>
                </li>
                <li class="px- lg:px-3 flex items-center">
                    <router-link to="/entertainment">বিনোদন</router-link>
                </li>
            </ul>
        </nav>
    </div>
</header>
