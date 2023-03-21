<!DOCTYPE html>
<html lang="en" class="bg-[#FEF9EF]">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
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
                <div class="relative flex w-full max-w-xs flex-1 flex-col bg-[#FEF9EF] pt-5 pb-4">
                    <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-shrink-0 items-center px-4">
                        <img class="w-auto" src="img/logoSunrace.svg" alt="Your Company">
                    </div>
                    <div class="mt-5 h-0 flex-1 overflow-y-auto">
                        <nav class="space-y-1 px-2">
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                            <a href="index.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!--
                Heroicon name: outline/home

                Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
              -->

                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="vracht.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                </svg>
                                Vracht
                            </a>

                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                Bestellingen
                            </a>

                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/users -->
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                Klanten
                            </a>

                            <a href="producten.php" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                Producten
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="w-14 flex-shrink-0" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-[#FEF9EF] pt-5">
                <div class="flex flex-shrink-0 items-center px-4">
                    <img class="w-auto" src="img/logoSunrace.svg" alt="Your Company">
                </div>
                <div class="mt-5 flex flex-grow flex-col">
                    <nav class="flex-1 space-y-1 px-2 pb-4">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="index.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!--
              Heroicon name: outline/home

              Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
            -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="vracht.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                            </svg>
                            Vracht
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                            </svg>
                            Bestellingen
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            Klanten
                        </a>

                        <a href="producten.php" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            Producten
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col md:pl-64">
            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
                <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/bars-3-bottom-left -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </button>
                <div class="flex flex-1 justify-between bg-[#FEF9EF] px-4">
                    <div class="flex flex-1">
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="login.php">
                            <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-[#FFA733] text-white px-4 py-2 text-sm font-medium  shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Uitloggen</button>
                        </a>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="flex-1">
                <div class="py-6 bg-[#FEF9EF]">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900 text-center">Productoverzicht</h1>
                    </div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div class="py-4">
                            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0">
                                <div class="flex flex-1 justify-between px-4">
                                    <div class="flex flex-1">
                                    </div>
                                    <div class="ml-4 flex items-center md:ml-6">
                                        <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-[#FFA733] text-white px-4 py-2 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Product toevoegen</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flow-root">
                                <div class="-my-2 overflow-x-auto lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Productnummer</th>
                                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Omschrijving</th>
                                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Op voorraad</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">DHF-800</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">543</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">JKE-800</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">34</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">VWI-868</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">60</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">GTX-3783</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">64</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">DHF-864</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">573</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">GTW-268</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld omschrijving</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">33</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /End replace -->
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>