<!DOCTYPE html>
<html lang="en" class="bg-[#FEF9EF]">

<?php
include "header.php";
?>
<title>Dashboard</title>

<body>

<?php
include "sidebar.php";
?>

<main class="flex-1">
    <div class="py-6 bg-[#FEF9EF]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 text-center">Dashboard</h1>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <!-- Card -->

                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: outline/folder -->
                                    <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="truncate text-sm font-medium text-gray-500">Openstaande
                                            bestellingen
                                        </dt>
                                        <dd>
                                            <div class="text-lg font-medium text-gray-900">60</div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-5 py-3">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-[#e32e34] hover:text-[#FFA733]">Bekijk alle</a>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: outline/users -->
                                    <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="truncate text-sm font-medium text-gray-500">Klanten</dt>
                                        <dd>
                                            <div class="text-lg font-medium text-gray-900">15</div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-5 py-3">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-[#e32e34] hover:text-[#FFA733]">Bekijk alle</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /End replace -->
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 md:py-8">
            <img class="w-auto mx-auto" src="img/linegraph.jpg" alt="Your Company">
        </div>
    </div>
</main>
</div>
</div>
</body>

</html>