<x-layouts.base>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full overflow-hidden">
  ```
-->
    <div class="flex h-full">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div class="fixed inset-0 z-40 flex">
                <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
                <div class="relative flex flex-col flex-1 w-full max-w-xs bg-white focus:outline-none">
                    <!--
            Close button, show/hide based on off-canvas menu state.
  
            Entering: "ease-in-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
                    <div class="absolute top-0 right-0 pt-2 -mr-12">
                        <button type="button" class="relative flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Close sidebar</span>
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500" alt="Your Company">
                        </div>
                        <nav aria-label="Sidebar" class="mt-5">
                            <div class="px-2 space-y-1">
                                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Dashboard
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>
                                    Calendar
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                    Teams
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-900 bg-gray-100 rounded-md group" aria-current="page">
                                    <svg class="w-6 h-6 mr-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Directory
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                    </svg>
                                    Announcements
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                    </svg>
                                    Office Map
                                </a>
                            </div>
                            <hr class="my-5 border-t border-gray-200" aria-hidden="true">
                            <div class="px-2 space-y-1">
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md group hover:bg-gray-50 hover:text-gray-900">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    Apps
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md group hover:bg-gray-50 hover:text-gray-900">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                                    </svg>
                                    Settings
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
                        <a href="#" class="flex-shrink-0 block group">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">Tom Cook</p>
                                    <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col flex-1 min-h-0 bg-gray-100 border-r border-gray-200">
                    <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500" alt="Your Company">
                        </div>
                        <nav class="flex-1 mt-5" aria-label="Sidebar">
                            <div class="px-2 space-y-1">
                                <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Dashboard
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>
                                    Calendar
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                    Teams
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-gray-200 rounded-md group" aria-current="page">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Directory
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                    </svg>
                                    Announcements
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                    </svg>
                                    Office Map
                                </a>
                            </div>
                            <hr class="my-5 border-t border-gray-200" aria-hidden="true">
                            <div class="flex-1 px-2 space-y-1">
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md group hover:bg-gray-50 hover:text-gray-900">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    Apps
                                </a>
                                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md group hover:bg-gray-50 hover:text-gray-900">
                                    <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                                    </svg>
                                    Settings
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
                        <a href="#" class="flex-shrink-0 block w-full group">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block rounded-full h-9 w-9" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Tom Cook</p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 min-w-0 overflow-hidden">
            <div class="lg:hidden">
                <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
                    <div>
                        <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500" alt="Your Company">
                    </div>
                    <div>
                        <button type="button" class="inline-flex items-center justify-center w-12 h-12 -mr-3 text-gray-500 rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative z-0 flex flex-1 overflow-hidden">
                <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
                    <!-- Breadcrumb -->
                    <nav class="flex items-start px-4 py-3 sm:px-6 lg:px-8 xl:hidden" aria-label="Breadcrumb">
                        <a href="#" class="inline-flex items-center space-x-3 text-sm font-medium text-gray-900">
                            <svg class="w-5 h-5 -ml-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                            <span>Directory</span>
                        </a>
                    </nav>

                    <article>
                        <!-- Profile header -->
                        <div>
                            <div>
                                <img class="object-cover w-full h-32 lg:h-48" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
                            </div>
                            <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                    <div class="flex">
                                        <img class="w-24 h-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                    </div>
                                    <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                                        <div class="flex-1 min-w-0 mt-6 sm:hidden 2xl:block">
                                            <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-3 justify-stretch sm:flex-row sm:space-x-4 sm:space-y-0">
                                            <button type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                <svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                                </svg>
                                                Message
                                            </button>
                                            <button type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                <svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                                </svg>
                                                Call
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 hidden min-w-0 mt-6 sm:block 2xl:hidden">
                                    <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="mt-6 sm:mt-2 2xl:mt-5">
                            <div class="border-b border-gray-200">
                                <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                                    <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                                        <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                        <a href="#" class="px-1 py-4 text-sm font-medium text-gray-900 border-b-2 border-pink-500 whitespace-nowrap" aria-current="page">Profile</a>
                                        <a href="#" class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">Calendar</a>
                                        <a href="#" class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">Recognition</a>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Description list -->
                        <div class="max-w-5xl px-4 mx-auto mt-6 sm:px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Phone</dt>
                                    <dd class="mt-1 text-sm text-gray-900">(555) 123-4567</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                                    <dd class="mt-1 text-sm text-gray-900">ricardocooper@example.com</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Title</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Senior Front-End Developer</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Team</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Product Development</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Location</dt>
                                    <dd class="mt-1 text-sm text-gray-900">San Francisco</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Sits</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Oasis, 4th floor</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Salary</dt>
                                    <dd class="mt-1 text-sm text-gray-900">$145,000</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Birthday</dt>
                                    <dd class="mt-1 text-sm text-gray-900">June 8, 1990</dd>
                                </div>

                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">About</dt>
                                    <dd class="mt-1 space-y-5 text-sm text-gray-900 max-w-prose">
                                        <p>Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit dolor consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean posuere aliquam.</p>
                                        <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris amet. Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum, cursus felis dui suspendisse velit pharetra. Augue et duis cursus maecenas eget quam lectus. Accumsan vitae nascetur pharetra rhoncus praesent dictum risus suspendisse.</p>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Team member list -->
                        <div class="max-w-5xl px-4 pb-12 mx-auto mt-8 sm:px-6 lg:px-8">
                            <h2 class="text-sm font-medium text-gray-500">Team members</h2>
                            <div class="grid grid-cols-1 gap-4 mt-1 sm:grid-cols-2">
                                <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:border-gray-400">
                                    <div class="flex-shrink-0">
                                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                                            <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:border-gray-400">
                                    <div class="flex-shrink-0">
                                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900">Michael Foster</p>
                                            <p class="text-sm text-gray-500 truncate">Co-Founder / CTO</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:border-gray-400">
                                    <div class="flex-shrink-0">
                                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900">Dries Vincent</p>
                                            <p class="text-sm text-gray-500 truncate">Business Relations</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:border-gray-400">
                                    <div class="flex-shrink-0">
                                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900">Lindsay Walton</p>
                                            <p class="text-sm text-gray-500 truncate">Front-end Developer</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
                <aside class="flex-shrink-0 hidden border-r border-gray-200 w-96 xl:order-first xl:flex xl:flex-col">
                    <div class="px-6 pt-6 pb-4">
                        <h2 class="text-lg font-medium text-gray-900">Directory</h2>
                        <p class="mt-1 text-sm text-gray-600">Search directory of 3,018 employees</p>
                        <form class="flex mt-6 gap-x-4" action="#">
                            <div class="flex-1 min-w-0">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="search" name="search" id="search" class="block w-full rounded-md border-0 py-1.5 pl-10 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-500 sm:text-sm sm:leading-6" placeholder="Search">
                                </div>
                            </div>
                            <button type="submit" class="inline-flex justify-center px-3 py-2 text-gray-400 bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                    <!-- Directory list -->
                    <nav class="flex-1 min-h-0 overflow-y-auto" aria-label="Directory">
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>A</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Leslie Abbott</p>
                                                <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Hector Adams</p>
                                                <p class="text-sm text-gray-500 truncate">VP, Marketing</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Blake Alexander</p>
                                                <p class="text-sm text-gray-500 truncate">Account Coordinator</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Fabricio Andrews</p>
                                                <p class="text-sm text-gray-500 truncate">Senior Art Director</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>B</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Angela Beaver</p>
                                                <p class="text-sm text-gray-500 truncate">Chief Strategy Officer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Yvette Blanchard</p>
                                                <p class="text-sm text-gray-500 truncate">Studio Artist</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Lawrence Brooks</p>
                                                <p class="text-sm text-gray-500 truncate">Content Specialist</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>C</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Jeffrey Clark</p>
                                                <p class="text-sm text-gray-500 truncate">Senior Art Director</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Kathryn Cooper</p>
                                                <p class="text-sm text-gray-500 truncate">Associate Creative Director</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>E</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Alicia Edwards</p>
                                                <p class="text-sm text-gray-500 truncate">Junior Copywriter</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Benjamin Emerson</p>
                                                <p class="text-sm text-gray-500 truncate">Director, Print Operations</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Jillian Erics</p>
                                                <p class="text-sm text-gray-500 truncate">Designer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Chelsea Evans</p>
                                                <p class="text-sm text-gray-500 truncate">Human Resources Manager</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>G</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Michael Gillard</p>
                                                <p class="text-sm text-gray-500 truncate">Co-Founder / CTO</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Dries Giuessepe</p>
                                                <p class="text-sm text-gray-500 truncate">Manager, Business Relations</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>M</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1507101105822-7472b28e22ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Jenny Harrison</p>
                                                <p class="text-sm text-gray-500 truncate">Studio Artist</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Lindsay Hatley</p>
                                                <p class="text-sm text-gray-500 truncate">Front-end Developer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Anna Hill</p>
                                                <p class="text-sm text-gray-500 truncate">Partner, Creative</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>S</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Courtney Samuels</p>
                                                <p class="text-sm text-gray-500 truncate">Designer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Tom Simpson</p>
                                                <p class="text-sm text-gray-500 truncate">Director, Product Development</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>T</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Floyd Thompson</p>
                                                <p class="text-sm text-gray-500 truncate">Principal Designer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Leonard Timmons</p>
                                                <p class="text-sm text-gray-500 truncate">Senior Designer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Whitney Trudeau</p>
                                                <p class="text-sm text-gray-500 truncate">Copywriter</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>W</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Kristin Watson</p>
                                                <p class="text-sm text-gray-500 truncate">VP, Human Resources</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Emily Wilson</p>
                                                <p class="text-sm text-gray-500 truncate">VP, User Experience</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
                                <h3>Y</h3>
                            </div>
                            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                                <li>
                                    <div class="relative flex items-center px-6 py-5 space-x-3 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500 hover:bg-gray-50">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">Emma Young</p>
                                                <p class="text-sm text-gray-500 truncate">Senior Front-end Developer</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
            </div>
        </div>
    </div>

</x-layouts.base>
