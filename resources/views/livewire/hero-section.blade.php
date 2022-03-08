<section id='hero' class="relative bg-white overflow-hidden">

    {{-- Div to identify the Hero space and background. --}}
    <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">

      {{-- SVG image that displays the grey dots to the right of the hero background. --}}
        <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none"
            viewBox="0 0 640 784">
            <defs>
                <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
            <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
        </svg>
    </div>

    {{-- Div to hold the data and image. --}}
    <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">

      {{-- This div will go across the screen and will managed the different navbar display. --}}
        <div>
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <span class="sr-only">Ragazza Contracting</span>
                            
                            {{-- SVG Logo Top Left of Website --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 325.98 575.63" width="100" height="100"><path d="M181.46,265,177,276q14.06,11.63,31.76,29.33l9.4,9.4q11.18,11.07,14.44,13.78t5.59,2.71q4.2,0,12.17-6.08l2.77,3.21Q240.33,339,230,346.45l-3.87-4q-36.63-37.39-55.55-54.22a111.69,111.69,0,0,1-32.76,36.63Q107.65,346.35,79,346.34q-25.33,0-41.22-15.1T21.89,292.12q0-21.58,12.51-41.22t35.52-34.14q21.36-13.38,52.06-21a265,265,0,0,1,63.69-7.58q32.87,0,50.46,8.14t17.59,23.29q0,20.15-26.66,30.43-13,5.09-16.27,14.94-7.64-.43-16.38-.44Q187.56,264.57,181.46,265Zm-16.93-42.27a301.88,301.88,0,0,0,32.65-8.41l-.56,2q-5,20.7-10.29,36c4.21.22,7.2.34,9,.34q20,0,31.48-8.3t11.45-22.91q0-27.33-62-27.33-69.16,0-107.34,31-33,26.9-33,62.41,0,22.36,14.72,36.35t38.28,14a73,73,0,0,0,26-5.09A74.75,74.75,0,0,0,138,319.23q13.62-11.84,25.46-37.62-18.7-16.83-35.19-16.82-14.73,0-24.24,9.51t-9.51,24.35a45,45,0,0,0,1.1,9q-8.52-4.65-8.52-13.17,0-12.39,17.65-26.39t33.14-14q11.63,0,22.58,8.19l7,5.31,1.66,1.11a165.11,165.11,0,0,0,7.3-20.47q3.44-11.73,3.43-16.16,0-6.3-7.41-6.31a39.25,39.25,0,0,0-6.86.89Z"/><path d="M163.33,573.63c-8.74-22.38-13.37-45.32-12.14-69.28,2-39.93,19.14-73.59,43.47-104.25,15.08-19,33.24-34.89,51-51.25,16.68-15.39,32.3-31.8,43.7-51.66,11.24-19.59,16.79-40.5,13.58-63.25a12.6,12.6,0,0,1,.39-2.38c8.47,15.09,13.7,30.2,13.68,46.87,0,25-11,45.55-25.81,64.61-14.17,18.26-31.72,33.08-49,48.24-27.64,24.32-51.14,51.92-66.44,85.82-13.59,30.1-18.83,61.27-12,94a10.71,10.71,0,0,1,.14,2C163.92,573.15,163.7,573.27,163.33,573.63Z"/><path d="M6.58,325.32c-6.32-23.18-8.49-46.47-4.73-70.17C8.11,215.66,28.67,184,56.12,156.09c17-17.3,36.74-31.18,56.11-45.57,18.22-13.53,35.48-28.2,48.92-46.74,13.26-18.29,21-38.49,20.21-61.45A12,12,0,0,1,182,0c6.82,15.91,10.42,31.48,8.64,48.06-2.67,24.82-15.79,44.12-32.51,61.51-16,16.66-35,29.53-53.8,42.79C74.27,173.61,48,198.57,29.17,230.66,12.47,259.14,4,289.58,7.3,322.83a10,10,0,0,1-.07,2C7.23,324.91,7,325,6.58,325.32Z"/><path d="M190.46,267,186,278q14.06,11.63,31.76,29.33l9.4,9.4q11.18,11.07,14.44,13.78t5.59,2.71q4.2,0,12.17-6.08l2.77,3.21Q249.33,341,239,348.45l-3.87-4q-36.63-37.39-55.55-54.22a111.69,111.69,0,0,1-32.76,36.63Q116.65,348.35,88,348.34q-25.33,0-41.22-15.1T30.89,294.12q0-21.58,12.51-41.22t35.52-34.14q21.36-13.38,52.06-21a265,265,0,0,1,63.69-7.58q32.87,0,50.46,8.14t17.59,23.29q0,20.15-26.66,30.43-13,5.09-16.27,14.94-7.64-.43-16.38-.44Q196.56,266.57,190.46,267Zm-16.93-42.27a301.88,301.88,0,0,0,32.65-8.41l-.56,2q-5,20.7-10.29,36c4.21.22,7.2.34,9,.34q20,0,31.48-8.3t11.45-22.91q0-27.33-62-27.33-69.16,0-107.34,31-33,26.9-33,62.41,0,22.36,14.72,36.35t38.28,14a73,73,0,0,0,26-5.09A74.75,74.75,0,0,0,147,321.23q13.62-11.84,25.46-37.62-18.7-16.83-35.19-16.82-14.73,0-24.24,9.51t-9.51,24.35a45,45,0,0,0,1.1,9q-8.52-4.65-8.52-13.17,0-12.39,17.65-26.39t33.14-14q11.63,0,22.58,8.19l7,5.31,1.66,1.11a165.11,165.11,0,0,0,7.3-20.47q3.44-11.73,3.43-16.16,0-6.3-7.41-6.31a39.25,39.25,0,0,0-6.86.89Z" fill="red"/><path d="M172.33,575.63c-8.74-22.38-13.37-45.32-12.14-69.28,2-39.93,19.14-73.59,43.47-104.25,15.08-19,33.24-34.89,51-51.25,16.68-15.39,32.3-31.8,43.7-51.66,11.24-19.59,16.79-40.5,13.58-63.25a12.6,12.6,0,0,1,.39-2.38c8.47,15.09,13.7,30.2,13.68,46.87,0,25-11,45.55-25.81,64.61-14.17,18.26-31.72,33.08-49,48.24-27.64,24.32-51.14,51.92-66.44,85.82-13.59,30.1-18.83,61.27-12,94a10.71,10.71,0,0,1,.14,2C172.92,575.15,172.7,575.27,172.33,575.63Z" fill="red"/><path d="M15.58,327.32c-6.32-23.18-8.49-46.47-4.73-70.17,6.26-39.49,26.82-71.15,54.27-99.06,17-17.3,36.74-31.18,56.11-45.57,18.22-13.53,35.48-28.2,48.92-46.74,13.26-18.29,21-38.49,20.21-61.45A12,12,0,0,1,191,2c6.82,15.91,10.42,31.48,8.64,48.06-2.67,24.82-15.79,44.12-32.51,61.51-16,16.66-35,29.53-53.8,42.79C83.27,175.61,57,200.57,38.17,232.66,21.47,261.14,13,291.58,16.3,324.83a10,10,0,0,1-.07,2C16.23,326.91,16,327,15.58,327.32Z" fill="red"/></svg>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                                aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden md:block md:ml-10 md:space-x-10">
                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Services</a>

                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">About Us</a>

                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Partners</a>

                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Contact Us</a>
                    </div>
                </div>

                {{-- LOG IN / REGISTER MODEL FOR MOBILE DEVICES ***FOR NOW IT WILL BE HIDDEN --}}
                <div class="hidden md:block text-right">
                    <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">

                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="#"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-gray-50">
                                        Dashboard </a>
                                @else
                                    <a href="#"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-gray-50">
                                        Log in </a>
                                    @if (Route::has('register'))
                                        <a href="#"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-gray-50">
                                            Register </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </span>
                </div>
            </nav>

            <!--
          Mobile menu, show/hide based on menu open state.
  
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
            <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-red-600.svg"
                                alt="">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                                <span class="sr-only">Close main menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Services</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About Us</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Partners</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact Us</a>
                    </div>
                    <a href="#"
                        class="block w-full px-5 py-3 text-center font-medium text-red-600 bg-gray-50 hover:bg-gray-100">
                        Log in </a>
                </div>
            </div>
        </div>

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1>
                        <span
                            class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming
                            soon</span>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="block text-gray-900">Data to enrich your</span>
                            <span class="block text-red-600">online business</span>
                        </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Anim aute id magna
                        aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat
                        veniam occaecat fugiat aliqua ad ad non deserunt sunt.</p>

                </div>
                <div
                    class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                        width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                        <defs>
                            <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                    </svg>
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <button type="button"
                            class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <span class="sr-only">Watch our video to learn more</span>
                            <img class="w-full opacity-50"
                                src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                alt="">
                            <div class="absolute inset-0 w-full h-full flex items-center justify-center"
                                aria-hidden="true">
                               
                                <svg width="200" height="200 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.98 573.63"><path d="M181.46,265,177,276q14.06,11.63,31.76,29.33l9.4,9.4q11.18,11.07,14.44,13.78t5.59,2.71q4.2,0,12.17-6.08l2.77,3.21Q240.33,339,230,346.45l-3.87-4q-36.63-37.39-55.55-54.22a111.69,111.69,0,0,1-32.76,36.63Q107.65,346.35,79,346.34q-25.33,0-41.22-15.1T21.89,292.12q0-21.58,12.51-41.22t35.52-34.14q21.36-13.38,52.06-21a265,265,0,0,1,63.69-7.58q32.87,0,50.46,8.14t17.59,23.29q0,20.15-26.66,30.43-13,5.09-16.27,14.94-7.64-.43-16.38-.44Q187.56,264.57,181.46,265Zm-16.93-42.27a301.88,301.88,0,0,0,32.65-8.41l-.56,2q-5,20.7-10.29,36c4.21.22,7.2.34,9,.34q20,0,31.48-8.3t11.45-22.91q0-27.33-62-27.33-69.16,0-107.34,31-33,26.9-33,62.41,0,22.36,14.72,36.35t38.28,14a73,73,0,0,0,26-5.09A74.75,74.75,0,0,0,138,319.23q13.62-11.84,25.46-37.62-18.7-16.83-35.19-16.82-14.73,0-24.24,9.51t-9.51,24.35a45,45,0,0,0,1.1,9q-8.52-4.65-8.52-13.17,0-12.39,17.65-26.39t33.14-14q11.63,0,22.58,8.19l7,5.31,1.66,1.11a165.11,165.11,0,0,0,7.3-20.47q3.44-11.73,3.43-16.16,0-6.3-7.41-6.31a39.25,39.25,0,0,0-6.86.89Z"/><path d="M163.33,573.63c-8.74-22.38-13.37-45.32-12.14-69.28,2-39.93,19.14-73.59,43.47-104.25,15.08-19,33.24-34.89,51-51.25,16.68-15.39,32.3-31.8,43.7-51.66,11.24-19.59,16.79-40.5,13.58-63.25a12.6,12.6,0,0,1,.39-2.38c8.47,15.09,13.7,30.2,13.68,46.87,0,25-11,45.55-25.81,64.61-14.17,18.26-31.72,33.08-49,48.24-27.64,24.32-51.14,51.92-66.44,85.82-13.59,30.1-18.83,61.27-12,94a10.71,10.71,0,0,1,.14,2C163.92,573.15,163.7,573.27,163.33,573.63Z"/><path d="M6.58,325.32c-6.32-23.18-8.49-46.47-4.73-70.17C8.11,215.66,28.67,184,56.12,156.09c17-17.3,36.74-31.18,56.11-45.57,18.22-13.53,35.48-28.2,48.92-46.74,13.26-18.29,21-38.49,20.21-61.45A12,12,0,0,1,182,0c6.82,15.91,10.42,31.48,8.64,48.06-2.67,24.82-15.79,44.12-32.51,61.51-16,16.66-35,29.53-53.8,42.79C74.27,173.61,48,198.57,29.17,230.66,12.47,259.14,4,289.58,7.3,322.83a10,10,0,0,1-.07,2C7.23,324.91,7,325,6.58,325.32Z"/></svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
