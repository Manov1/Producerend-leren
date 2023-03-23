<!DOCTYPE html>
<html lang="en" class="bg-[#FEF9EF]">

<?php
include "header.php";
?>
<title>Klant</title>

<body>
<?php
include "sidebar.php";
?>

<main class="flex-1">
    <div class="py-6 bg-[#FEF9EF]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 text-center">Klant toevoegen</h1>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                        <form class="space-y-6" action="#" method="POST">
                            <div>
                                <label for="voornaam" class="block text-sm font-medium text-gray-700">Voornaam:</label>
                                <div class="mt-1">
                                    <input id="voornaam" name="voornaam" type="text" required=""
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="password"
                                       class="block text-sm font-medium text-gray-700">Achternaam:</label>
                                <div class="mt-1">
                                    <input id="achtenaam" name="achtenaam" type="text" required=""
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres:</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required=""
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="password"
                                       class="block text-sm font-medium text-gray-700">Bedrijfsnaam:</label>
                                <div class="mt-1">
                                    <input id="Bedrijf" name="Bedrijf" type="text" required=""
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                        class="flex w-full justify-center rounded-md border border-transparent bg-[#FFA733] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Toevoegen
                                </button>
                            </div>
                        </form>
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