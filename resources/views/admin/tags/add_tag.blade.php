@extends('admin.layouts.app')
@section('title', 'Tags')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-md2 font-bold text-black dark:text-white">
                        Tag
                    </h2>
                    <nav>
                        <ol class="flex items-center gap-2">
                            <li><a class="font-medium" href="/admin">Dashboard /</a></li>
                            <li class="font-medium text-primary">Tag</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                @include('admin.includes.message')

                <!-- ====== Form Elements Section Start -->
                <form action="{{ route('admin.tags.store') }}" method="post">
                    @csrf
                    <div class="flex grid grid-cols-12 gap-9">
                        <div class="gap-9 col-span-12 lg:col-span-6">
                            <!-- Input Fields -->
                            <div
                                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        Create New Tag
                                    </h3>
                                </div>
                                <div class="flex flex-col gap-5.5 p-6.5">
                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Title
                                        </label>
                                        <input type="text" placeholder="Title"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                            value="{{ old('name') }}" name="name" />
                                    </div>

                                    <div>
                                        <button type="submit"
                                            class="inline-flex items-center justify-center bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Submit</button>

                                        <a href="{{ route('admin.tags.index') }}"
                                            class="inline-flex items-center justify-center bg-warning py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-0 col-span-12 lg:col-span-6">
                            <div class="flex flex-col gap-10">
                                <div
                                    class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                                    <div class="max-w-full overflow-x-auto">
                                        <table class="w-full table-auto">
                                            <thead>
                                                <tr class="bg-gray-2 text-left dark:bg-meta-4">
                                                    <th
                                                        class="min-w-[80px] py-4 px-4 font-medium text-black dark:text-white">
                                                        Sl
                                                    </th>
                                                    <th
                                                        class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                                                        Name
                                                    </th>
                                                    <th class="py-4 px-4 font-medium text-black dark:text-white">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tags as $key => $tag)
                                                    <tr>
                                                        <td
                                                            class="border-b border-[#eee] py-5 px-4 pl-9 dark:border-strokedark xl:pl-11">
                                                            <p class="font-medium text-black dark:text-white">
                                                                {{ $key + 1 }}</p>
                                                        </td>
                                                        <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                                            <p
                                                                class="inline-flex rounded-full  py-1 px-3 text-sm font-medium">
                                                                {{ $tag->name }}
                                                            </p>
                                                        </td>


                                                        <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                                            <div class="flex items-center space-x-3.5">
                                                                <a href="{{ route('admin.tags.edit', $tag->id) }}"
                                                                    class="hover:text-primary">
                                                                    <svg class="fill-current" width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g opacity="0.8" clip-path="url(#clip0_88_10224)">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M1.56524 3.23223C2.03408 2.76339 2.66997 2.5 3.33301 2.5H9.16634C9.62658 2.5 9.99967 2.8731 9.99967 3.33333C9.99967 3.79357 9.62658 4.16667 9.16634 4.16667H3.33301C3.11199 4.16667 2.90003 4.25446 2.74375 4.41074C2.58747 4.56702 2.49967 4.77899 2.49967 5V16.6667C2.49967 16.8877 2.58747 17.0996 2.74375 17.2559C2.90003 17.4122 3.11199 17.5 3.33301 17.5H14.9997C15.2207 17.5 15.4326 17.4122 15.5889 17.2559C15.7452 17.0996 15.833 16.8877 15.833 16.6667V10.8333C15.833 10.3731 16.2061 10 16.6663 10C17.1266 10 17.4997 10.3731 17.4997 10.8333V16.6667C17.4997 17.3297 17.2363 17.9656 16.7674 18.4344C16.2986 18.9033 15.6627 19.1667 14.9997 19.1667H3.33301C2.66997 19.1667 2.03408 18.9033 1.56524 18.4344C1.0964 17.9656 0.833008 17.3297 0.833008 16.6667V5C0.833008 4.33696 1.0964 3.70107 1.56524 3.23223Z"
                                                                                fill=""></path>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M16.6664 2.39884C16.4185 2.39884 16.1809 2.49729 16.0056 2.67253L8.25216 10.426L7.81167 12.188L9.57365 11.7475L17.3271 3.99402C17.5023 3.81878 17.6008 3.5811 17.6008 3.33328C17.6008 3.08545 17.5023 2.84777 17.3271 2.67253C17.1519 2.49729 16.9142 2.39884 16.6664 2.39884ZM14.8271 1.49402C15.3149 1.00622 15.9765 0.732178 16.6664 0.732178C17.3562 0.732178 18.0178 1.00622 18.5056 1.49402C18.9934 1.98182 19.2675 2.64342 19.2675 3.33328C19.2675 4.02313 18.9934 4.68473 18.5056 5.17253L10.5889 13.0892C10.4821 13.196 10.3483 13.2718 10.2018 13.3084L6.86847 14.1417C6.58449 14.2127 6.28409 14.1295 6.0771 13.9225C5.87012 13.7156 5.78691 13.4151 5.85791 13.1312L6.69124 9.79783C6.72787 9.65131 6.80364 9.51749 6.91044 9.41069L14.8271 1.49402Z"
                                                                                fill=""></path>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_88_10224">
                                                                                <rect width="18" height="18"
                                                                                    fill="white"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $tags->links('admin.includes.custom-pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
