@extends('admin.layouts.app')
@section('title', 'Add New User')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Add New User
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li><a class="font-medium" href="/admin">Dashboard /</a></li>
                        <li class="font-medium text-primary">User</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            @include('admin.includes.message')

            <!-- ====== Form Elements Section Start -->
            <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="flex grid grid-cols-12 gap-9">
                    <div class="gap-9 col-span-12 lg:col-span-8">
                        <!-- Input Fields -->
                        <div
                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                                <h3 class="font-medium text-black dark:text-white">
                                    Add New User
                                </h3>
                            </div>
                            <div class="flex flex-col gap-5.5 p-6.5">
                                <div>
                                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                        User Name
                                    </label>
                                    <input id="name" type="text" placeholder="User Name"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                        value="{{ old('name') }}" name="name" />
                                </div>

                                <div>
                                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                        Email
                                    </label>
                                    <input id="email" type="email" name="email" placeholder="Email"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                                </div>

                                <div>
                                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                        Password
                                    </label>
                                    <input id="password" type="pasword" name="Password" placeholder="********"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                                </div>

                                <div>
                                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                        Confirm Password
                                    </label>
                                    <input id="confirm_password" type="password" name="confirm_password"
                                        placeholder="*******"
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                                </div>

                                <div>
                                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                                        Select Roles
                                    </label>
                                    <div class="">
                                        <select name="role" id="my-multiple-select"
                                            class="relative z-20 w-full rounded border border-stroke p-1.5 pr-8 font-medium outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <input name="status"
                                        class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                        type="checkbox" role="switch" id="flexSwitchChecked" checked />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                        for="flexSwitchChecked">Active/InActive</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gap-0 col-span-12 lg:col-span-4">
                        <div
                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

                            <div class="flex flex-col gap-5.5 p-6.5">
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
                                                Profile Image
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
                                    <button type="submit"
                                        class="inline-flex items-center justify-center bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Submit</button>

                                    <a href="{{ route('admin.users.index') }}"
                                        class="inline-flex items-center justify-center bg-warning py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- ====== Form Elements Section End -->
        </div>
    </main>

@endsection

@push('scripts')
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
@endpush
