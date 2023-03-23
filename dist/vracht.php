<!DOCTYPE html>
<html lang="en" class="bg-[#FEF9EF]">

<?php
include "header.php";
?>
<title>Vracht</title>

<body>
<?php
include "sidebar.php";
?>

<main class="flex-1">
    <div class="py-6 bg-[#FEF9EF]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 text-center">Vrachtoverzicht</h1>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="sticky top-0 z-10 flex h-16 flex-shrink-0">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4">
                            <li>
                                <div>
                                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Vrachtoverzicht</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <a href="#"
                                       class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Schip</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                                       aria-current="page">Container</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <a href="#" class="ml-4 text-sm font-medium text-gray-700" aria-current="page">Producten</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <div class="flex flex-1 justify-between px-4">
                        <div class="flex flex-1">
                        </div>
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                    class="inline-flex items-center rounded-md border border-gray-300 bg-[#FFA733] text-white px-4 py-2 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Import
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flow-root">
                    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Product
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Hoeveelheid
                                        </th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">40</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">20</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">50</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">15</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">40</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            Fietsonderdeel
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">20</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-6 float-right text-sm font-medium">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                 className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </td>
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