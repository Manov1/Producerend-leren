<!DOCTYPE html>
<html lang="en" class="bg-[#FEF9EF]">

<?php
include "header.php";
?>
<title>Producten</title>

<body>
<?php
include "sidebar.php";
?>

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
                            <button type="button"
                                    class="inline-flex items-center rounded-md border border-gray-300 bg-[#FFA733] text-white px-4 py-2 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Product toevoegen
                            </button>
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
                                        <th scope="col"
                                            class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Productnummer
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Omschrijving
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Op
                                            voorraad
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            DHF-800
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">543</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            JKE-800
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">34</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            VWI-868
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">60</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            GTX-3783
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">64</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            DHF-864
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">573</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            GTW-268
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">voorbeeld
                                            omschrijving
                                        </td>
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