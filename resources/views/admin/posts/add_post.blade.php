@extends('admin.layouts.app')

@section('title', 'Create New Post')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endpush

@section('content')

    <div id="page-wrapper">
        <div class="row">

            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-md2 font-bold text-black dark:text-white">
                        Create New Post
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li><a class="font-medium" href="/admin">Dashboard /</a></li>
                            <li class="font-medium text-primary">Create New Post</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                @include('admin.includes.message')

                <!-- ====== Form Elements Section Start -->
                <form action="{{ route('admin.add_post') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="flex grid grid-cols-12 gap-9">
                        <div class="gap-9 col-span-12 lg:col-span-8">
                            <!-- Input Fields -->
                            <div
                                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        Create New Post
                                    </h3>
                                </div>
                                <div class="flex flex-col gap-5.5 p-6.5">
                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Post Title
                                        </label>
                                        <input id="title" type="text" placeholder="Post Title"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                            value="{{ old('title') }}" name="title" onchange="slugGenerator()"
                                            onkeypress="slugGenerator()" />
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Slug
                                        </label>
                                        <input id="slug" type="text" name="slug" placeholder="Slug"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Post Content
                                        </label>
                                        <textarea rows="6" placeholder="Post Content" name="content"
                                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"></textarea>
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Select Tags
                                        </label>
                                        <div class="">
                                            {{-- <div class="flex flex-wrap items-center">
                                                <span
                                                    class="m-1.5 flex items-center justify-center rounded border-[.5px] border-stroke dark:border-strokedark bg-gray dark:bg-white/30 py-1.5 px-2.5 text-sm font-medium">
                                                    Design
                                                    <span class="cursor-pointer pl-2 hover:text-danger">
                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span
                                                    class="m-1.5 flex items-center justify-center rounded border-[.5px] border-stroke dark:border-strokedark bg-gray dark:bg-white/30 py-1.5 px-2.5 text-sm font-medium">
                                                    Development
                                                    <span class="cursor-pointer pl-2 hover:text-danger">
                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div> --}}
                                            <select name="tags[]" id="my-multiple-select"
                                                class="relative z-20 w-full rounded border border-stroke p-1.5 pr-8 font-medium outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                                multiple>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <span class="absolute top-1/2 right-4 z-10 -translate-y-1/2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.8">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                fill="#637381"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div> --}}


                                        </div>
                                    </div>

                                    <div>
                                        <input name="status"
                                            class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                            type="checkbox" role="switch" id="flexSwitchChecked" checked />
                                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                            for="flexSwitchChecked">Publish/Draft</label>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="gap-0 col-span-12 lg:col-span-4">
                            <div
                                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

                                <div class="flex flex-col gap-5.5 p-6.5">

                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Select Category
                                        </label>
                                        <div class="relative z-20 bg-white dark:bg-form-input">
                                            <span class="absolute top-1/2 left-4 z-30 -translate-y-1/2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.0007 2.50065C5.85852 2.50065 2.50065 5.85852 2.50065 10.0007C2.50065 14.1428 5.85852 17.5007 10.0007 17.5007C14.1428 17.5007 17.5007 14.1428 17.5007 10.0007C17.5007 5.85852 14.1428 2.50065 10.0007 2.50065ZM0.833984 10.0007C0.833984 4.93804 4.93804 0.833984 10.0007 0.833984C15.0633 0.833984 19.1673 4.93804 19.1673 10.0007C19.1673 15.0633 15.0633 19.1673 10.0007 19.1673C4.93804 19.1673 0.833984 15.0633 0.833984 10.0007Z"
                                                            fill="#637381"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0.833984 9.99935C0.833984 9.53911 1.20708 9.16602 1.66732 9.16602H18.334C18.7942 9.16602 19.1673 9.53911 19.1673 9.99935C19.1673 10.4596 18.7942 10.8327 18.334 10.8327H1.66732C1.20708 10.8327 0.833984 10.4596 0.833984 9.99935Z"
                                                            fill="#637381"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.50084 10.0008C7.55796 12.5632 8.4392 15.0301 10.0006 17.0418C11.5621 15.0301 12.4433 12.5632 12.5005 10.0008C12.4433 7.43845 11.5621 4.97153 10.0007 2.95982C8.4392 4.97153 7.55796 7.43845 7.50084 10.0008ZM10.0007 1.66749L9.38536 1.10547C7.16473 3.53658 5.90275 6.69153 5.83417 9.98346C5.83392 9.99503 5.83392 10.0066 5.83417 10.0182C5.90275 13.3101 7.16473 16.4651 9.38536 18.8962C9.54325 19.069 9.76655 19.1675 10.0007 19.1675C10.2348 19.1675 10.4581 19.069 10.6159 18.8962C12.8366 16.4651 14.0986 13.3101 14.1671 10.0182C14.1674 10.0066 14.1674 9.99503 14.1671 9.98346C14.0986 6.69153 12.8366 3.53658 10.6159 1.10547L10.0007 1.66749Z"
                                                            fill="#637381"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <select
                                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                                name="category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="absolute top-1/2 right-4 z-10 -translate-y-1/2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                            fill="#637381"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>


                                    <div>
                                        <input id="upload" type="file" class="invisible" name="image"
                                            accept="image/*" />
                                        <div id="image-preview"
                                            class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">

                                            <label for="upload" class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                </svg>
                                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload
                                                    picture
                                                </h5>
                                                <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size
                                                    should
                                                    be less than <b class="text-gray-600">2mb</b></p>
                                                <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b
                                                        class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
                                                <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                            Select Author
                                        </label>
                                        <div class="relative z-20 bg-white dark:bg-form-input">
                                            <span class="absolute top-1/2 left-4 z-30 -translate-y-1/2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.0007 2.50065C5.85852 2.50065 2.50065 5.85852 2.50065 10.0007C2.50065 14.1428 5.85852 17.5007 10.0007 17.5007C14.1428 17.5007 17.5007 14.1428 17.5007 10.0007C17.5007 5.85852 14.1428 2.50065 10.0007 2.50065ZM0.833984 10.0007C0.833984 4.93804 4.93804 0.833984 10.0007 0.833984C15.0633 0.833984 19.1673 4.93804 19.1673 10.0007C19.1673 15.0633 15.0633 19.1673 10.0007 19.1673C4.93804 19.1673 0.833984 15.0633 0.833984 10.0007Z"
                                                            fill="#637381"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0.833984 9.99935C0.833984 9.53911 1.20708 9.16602 1.66732 9.16602H18.334C18.7942 9.16602 19.1673 9.53911 19.1673 9.99935C19.1673 10.4596 18.7942 10.8327 18.334 10.8327H1.66732C1.20708 10.8327 0.833984 10.4596 0.833984 9.99935Z"
                                                            fill="#637381"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.50084 10.0008C7.55796 12.5632 8.4392 15.0301 10.0006 17.0418C11.5621 15.0301 12.4433 12.5632 12.5005 10.0008C12.4433 7.43845 11.5621 4.97153 10.0007 2.95982C8.4392 4.97153 7.55796 7.43845 7.50084 10.0008ZM10.0007 1.66749L9.38536 1.10547C7.16473 3.53658 5.90275 6.69153 5.83417 9.98346C5.83392 9.99503 5.83392 10.0066 5.83417 10.0182C5.90275 13.3101 7.16473 16.4651 9.38536 18.8962C9.54325 19.069 9.76655 19.1675 10.0007 19.1675C10.2348 19.1675 10.4581 19.069 10.6159 18.8962C12.8366 16.4651 14.0986 13.3101 14.1671 10.0182C14.1674 10.0066 14.1674 9.99503 14.1671 9.98346C14.0986 6.69153 12.8366 3.53658 10.6159 1.10547L10.0007 1.66749Z"
                                                            fill="#637381"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <select
                                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                                name="author">
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="absolute top-1/2 right-4 z-10 -translate-y-1/2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                            fill="#637381"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit"
                                            class="inline-flex items-center justify-center bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Submit</button>

                                        <a href="{{ url('/admin') }}"
                                            class="inline-flex items-center justify-center bg-warning py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- ====== Form Elements Section End -->
            </div>


        </div>
        <div>
        @endsection
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
            <script>
                const selectElement = document.getElementById('my-multiple-select');
                const choices = new Choices(selectElement, {
                    removeItemButton: true,
                    // Add more configuration options here
                });
            </script>
            <script>
                const uploadInput = document.getElementById('upload');
                const filenameLabel = document.getElementById('filename');
                const imagePreview = document.getElementById('image-preview');

                // Check if the event listener has been added before
                let isEventListenerAdded = false;

                uploadInput.addEventListener('change', (event) => {
                    const file = event.target.files[0];

                    if (file) {
                        filenameLabel.textContent = file.name;

                        const reader = new FileReader();
                        reader.onload = (e) => {
                            imagePreview.innerHTML =
                                `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                            imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                            // Add event listener for image preview only once
                            if (!isEventListenerAdded) {
                                imagePreview.addEventListener('click', () => {
                                    uploadInput.click();
                                });

                                isEventListenerAdded = true;
                            }
                        };
                        reader.readAsDataURL(file);
                    } else {
                        filenameLabel.textContent = '';
                        imagePreview.innerHTML =
                            `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
                        imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                        // Remove the event listener when there's no image
                        imagePreview.removeEventListener('click', () => {
                            uploadInput.click();
                        });

                        isEventListenerAdded = false;
                    }
                });

                uploadInput.addEventListener('click', (event) => {
                    event.stopPropagation();
                });
            </script>


            <script>
                function slugGenerator() {
                    const a = document.getElementById("title").value;
                    const b = a.toLowerCase().replace(/ /g, '-')
                        .replace(/[^\w-]+/g, '');
                    document.getElementById("slug").value = b;
                }
            </script>
        @endpush
