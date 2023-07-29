<x-layouts.host title="Settings as">



    {{-- <div class="hidden">
        <div x-show="settingsMenuVisible" class="absolute inset-0 bottom-0 z-50 flex flex-col justify-between bg-white page-padding">
            <nav class="flex flex-col flex-1" aria-label="Sidebar">
                <ul role="list" class="-mx-2 space-y-1">
                    <div class="text-xs font-medium leading-6 text-gray-400">General Settings</div>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-indigo-600 bg-gray-100 rounded-md group gap-x-3">Dashboard</a>
                    </li>
                    <div class="text-xs font-medium leading-6 text-gray-400">General</div>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Team</a>
                    </li>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Projects</a>
                    </li>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Calendar</a>
                    </li>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Documents</a>
                    </li>
                    <li>
                        <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Reports</a>
                    </li>
                </ul>
            </nav>
            <div class="mx-auto">
                <button x-on:click="settingsMenuVisible = false" class="text-xs button button-muted">Close</button>
            </div>
        </div>
    </div>

    <div class="relative flex flex-1 hidden h-full overflow-hidden">

        <div class="hidden h-full laptop:flex-1 laptop:flex">
            <div class="w-64 h-full bg-white border-r page-padding">
                <nav class="flex flex-col flex-1" aria-label="Sidebar">
                    <ul role="list" class="space-y-1">
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-indigo-600 rounded-md bg-gray-50 group gap-x-3">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Team</a>
                        </li>
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Projects</a>
                        </li>
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Calendar</a>
                        </li>
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Documents</a>
                        </li>
                        <li>
                            <a href="#" class="flex p-2 pl-3 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3">Reports</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="w-full overflow-y-auto">

            <header class="py-2 bg-white border-b border-light page-padding lg:hidden">
                <button x-on:click="settingsMenuVisible = true" class="flex items-center px-1 py-2 space-x-2 text-sm font-medium text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 6l-6 6l6 6"></path>
                    </svg>
                    <span>Settings</span>
                </button>
            </header>

            <div class="mx-auto space-y-10 divide-y divide-gray-900/10 page-padding-y sm:page-padding max-w-screen-desktop">
                <div class="grid grid-cols-1 gap-x-8 gap-y-8 2xl:grid-cols-3">
                    <div class="px-4 tablet:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>

                    <form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        <div class="px-4 py-6 sm:p-8">
                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <span class="flex items-center pl-3 text-gray-500 select-none sm:text-sm">http://</span>
                                            <input type="text" name="website" id="website" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="www.example.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                    <div class="mt-2">
                                        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                                </div>

                                <div class="col-span-full">
                                    <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                                    <div class="flex items-center mt-2 gap-x-3">
                                        <svg class="w-12 h-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                        </svg>
                                        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
                                    <div class="flex justify-center px-6 py-10 mt-2 border border-dashed rounded-lg border-gray-900/25">
                                        <div class="text-center">
                                            <svg class="w-12 h-12 mx-auto text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex mt-4 text-sm leading-6 text-gray-600">
                                                <label for="file-upload" class="relative font-semibold text-indigo-600 bg-white rounded-md cursor-pointer focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-4 border-t gap-x-6 border-gray-900/10 sm:px-8">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> --}}

</x-layouts.host>
