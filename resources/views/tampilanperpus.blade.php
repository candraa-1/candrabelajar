<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>

    
    <nav class="h-16 bg-red-300 flex justify-center items-center">
        <ul class="flex space-x-10">
            <li>Home</li>
            <li>About</li>
            <li>Menu</li>
            <li>Contact</li>
        </ul>
    </nav>


    
    <div class="flex min-h-screen">

        
        <aside class="w-64 bg-blue-800 text-white p-6">

                <ul class="space-y-4">
                <li>Dashboard</li>
                <li>Data Siswa</li>
                <li>Laporan</li>
                <li>Settings</li>
            </ul>

        </aside>


        
        <main class="flex-1 bg-gray-100 p-8">

            <h1 class="text-2xl font-bold mb-6">
                Data Siswa
            </h1>

            <table class="w-full border-collapse bg-white">

                <thead class="bg-gray-300">
                    <tr>
                        <th class="border border-gray-500 px-4 py-2 text-left">
                            No
                        </th>
                        <th class="border border-gray-500 px-4 py-2 text-left">
                            Nama
                        </th>
                        <th class="border border-gray-500 px-4 py-2 text-left">
                            NIK
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="border border-gray-500 px-4 py-2">1</td>
                        <td class="border border-gray-500 px-4 py-2">Candra</td>
                        <td class="border border-gray-500 px-4 py-2">123445</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-500 px-4 py-2">2</td>
                        <td class="border border-gray-500 px-4 py-2">Naufal</td>
                        <td class="border border-gray-500 px-4 py-2">1222</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-500 px-4 py-2">3</td>
                        <td class="border border-gray-500 px-4 py-2">Nijar</td>
                        <td class="border border-gray-500 px-4 py-2">19898</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-500 px-4 py-2">4</td>
                        <td class="border border-gray-500 px-4 py-2">Kenzo</td>
                        <td class="border border-gray-500 px-4 py-2">9090</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-500 px-4 py-2">5</td>
                        <td class="border border-gray-500 px-4 py-2">Ega</td>
                        <td class="border border-gray-500 px-4 py-2">54545</td>
                    </tr>

                </tbody>

            </table>

        </main>

    </div>

</body>
</html>