<!-- header -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="container mx-auto px-4 py-8 flex items-center">
        <!-- logo -->
        <div class="mr-auto md:w-48 flex-shrink-0">
            <router-link to="/">
                LikeAshraful
            </router-link>
        </div>
        <!-- search -->
        <div class="w-full max-w-xs xl:max-w-lg 2xl:max-w-2xl bg-gray-100 rounded-md hidden lg:flex items-center">
            <input class="bg-transparent font-semibold text-sm pl-4" type="text" placeholder="I'm searching for ..." />
            <svg class="ml-auto h-5 px-4 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far"
                data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                class="svg-inline--fa fa-search fa-w-16 fa-9x">
                <path fill="currentColor"
                    d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z">
                </path>
            </svg>
        </div>

        <!-- buttons -->
        <nav class="contents">
            <ul class="ml-4 xl:w-48 flex items-center justify-end">
                <li class="ml-2 lg:ml-4 relative inline-block">
                    <a class="" href="">
                        <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false"
                            data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x">
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
        <nav class="hidden xl:contents ml-8">
            <ul class="flex items-center text-sm font-bold">
                <li class="px-2 lg:px-3 flex items-center">
                    <svg class="h-7 lg:h-8 p-2 flex-shrink-0" aria-hidden="true" focusable="false" data-prefix="far"
                        data-icon="bolt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                        class="svg-inline--fa fa-bolt fa-w-12 fa-9x">
                        <path fill="currentColor"
                            d="M377.8 167.9c-8.2-14.3-23.1-22.9-39.6-22.9h-94.4l28.7-87.5c3.7-13.8.8-28.3-7.9-39.7C255.8 6.5 242.5 0 228.2 0H97.7C74.9 0 55.4 17.1 52.9 37.1L.5 249.3c-1.9 13.8 2.2 27.7 11.3 38.2C20.9 298 34.1 304 48 304h98.1l-34.9 151.7c-3.2 13.7-.1 27.9 8.6 38.9 8.7 11.1 21.8 17.4 35.9 17.4 16.3 0 31.5-8.8 38.8-21.6l183.2-276.7c8.4-14.3 8.4-31.5.1-45.8zM160.1 457.4L206.4 256H47.5L97.7 48l127.6-.9L177.5 193H334L160.1 457.4z">
                        </path>
                    </svg>
                    <span class="truncate max-w-24">Top</span>
                </li>
                <li class="px-2 lg:px-3 flex items-center">
                    <svg class="h-7 lg:h-8 p-2 flex-shrink-0" aria-hidden="true" focusable="false" data-prefix="far"
                        data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="svg-inline--fa fa-tag fa-w-16 fa-9x">
                        <path fill="currentColor"
                            d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a47.998 47.998 0 0 0 14.059 33.941l211.882 211.882c18.745 18.745 49.137 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM259.886 463.996L48 252.118V48h204.118L464 259.882 259.886 463.996zM192 144c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48z">
                        </path>
                    </svg>
                    <span class="truncate max-w-24">Special</span>
                </li>

                <li class="px-2 lg:px-3 flex items-center">
                    <span>Shop</span>
                    <svg class="ml-1 h-7 lg:h-8 p-2 pr-0 text-gray-500" aria-hidden="true" focusable="false"
                        data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14 fa-9x">
                        <path fill="currentColor"
                            d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z">
                        </path>
                    </svg>
                </li>
            </ul>
        </nav>
        {{-- <a href="" class="ml-auto flex-shrink-0 flex items-center">
            <svg class="h-7 lg:h-8 p-1 sm:p-2 md:text-gray-500" aria-hidden="true" focusable="false" data-prefix="far"
                data-icon="sync-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                class="svg-inline--fa fa-sync-alt fa-w-16 fa-9x">
                <path fill="currentColor"
                    d="M483.515 28.485L431.35 80.65C386.475 35.767 324.485 8 256 8 123.228 8 14.824 112.338 8.31 243.493 7.971 250.311 13.475 256 20.301 256h28.045c6.353 0 11.613-4.952 11.973-11.294C66.161 141.649 151.453 60 256 60c54.163 0 103.157 21.923 138.614 57.386l-54.128 54.129c-7.56 7.56-2.206 20.485 8.485 20.485H492c6.627 0 12-5.373 12-12V36.971c0-10.691-12.926-16.045-20.485-8.486zM491.699 256h-28.045c-6.353 0-11.613 4.952-11.973 11.294C445.839 370.351 360.547 452 256 452c-54.163 0-103.157-21.923-138.614-57.386l54.128-54.129c7.56-7.56 2.206-20.485-8.485-20.485H20c-6.627 0-12 5.373-12 12v143.029c0 10.691 12.926 16.045 20.485 8.485L80.65 431.35C125.525 476.233 187.516 504 256 504c132.773 0 241.176-104.338 247.69-235.493.339-6.818-5.165-12.507-11.991-12.507z">
                </path>
            </svg>
            <span class="hidden sm:inline ml-1 font-bold">Recently Viewed</span>
        </a> --}}
    </div>
</header>
