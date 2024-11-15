<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Farm Dream Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #sidebar {
            width: 80px;
            transition: width 0.3s ease;
        }

        #sidebar:hover {
            width: 256px;
        }

        #sidebar .sidebar-text {
            display: none;
        }

        #sidebar:hover .sidebar-text {
            display: inline;
        }

        .small-logo {
            display: block;
        }

        .large-logo {
            display: none;
            transition: width 0.3s ease, height 0.3s ease;
        }

        #sidebar:hover .small-logo {
            display: none;
        }

        #sidebar:hover .large-logo {
            display: block;
            width: 200px; /* Adjusted size for larger logo */
            height: auto;
        }

        /* Indent Master Data submenu slightly to the right and add space below */
        .submenu-link {
            margin-left: 20px; /* Move submenu to the right */
            margin-top: 8px;   /* Add some space below Master Data */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans h-screen flex">

    <aside id="sidebar" class="bg-green-700 p-4 flex flex-col text-white space-y-4 transition-all duration-300">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/svg/Logo-Dfarm-small.svg') }}" alt="Small Logo" class="small-logo w-10 h-10">
            <img src="{{ asset('assets/svg/Logo-Dfarm-large.svg') }}" alt="Large Logo" class="large-logo w-32 h-10 ml-2">
        </div>

        <nav class="mt-6 space-y-2">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold justify-center md:justify-start">
                <img src="{{ asset('assets/svg/dashboard-icon.svg') }}" alt="Dashboard Icon" class="w-6 h-6 ml-2"> <!-- Added ml-2 for alignment -->
                <span class="sidebar-text">Dashboard</span>
            </a>

            <div class="justify-center md:justify-start">
                <div class="flex items-center space-x-2 text-lg font-semibold">
                    <img src="{{ asset('assets/svg/master-profile.svg') }}" alt="Master Data Icon" class="w-6 h-6 ml-2"> <!-- Added ml-2 for alignment -->
                    <span class="sidebar-text">Master Data</span>
                </div>
                <!-- Submenu links with extra margin for spacing -->
                <div class="mt-1 sidebar-text">
                    <a href="#" class="block submenu-link text-yellow-300 bg-yellow-100 rounded px-2 py-1 font-medium">Master Jabatan</a>
                    <a href="#" class="block submenu-link hover:text-yellow-300">Master Karyawan</a>
                    <a href="#" class="block submenu-link hover:text-yellow-300">Master Provinsi</a>
                </div>
            </div>

            <a href="#" class="flex items-center space-x-2 text-lg font-semibold text-yellow-300 mt-auto justify-center md:justify-start">
                <span class="sidebar-text">Log Out</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 bg-gray-200 p-8">
        <div class="bg-white rounded-lg p-6 shadow-md">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-2">
                    <label for="show" class="text-gray-700 text-sm">Tampilkan</label>
                    <select id="show" class="border border-gray-300 rounded px-2 py-1 focus:outline-none">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <span class="text-gray-700 text-sm">data</span>
                    <input type="text" placeholder="Search..." class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <button class="bg-green-700 text-white px-4 py-1 rounded-lg font-semibold hover:bg-green-800 transition">+ Tambah User</button>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="border-b-2 py-3 px-6 text-sm">ID</th>
                        <th class="border-b-2 py-3 px-6 text-sm">Nama</th>
                        <th class="border-b-2 py-3 px-6 text-sm">Jabatan</th>
                        <th class="border-b-2 py-3 px-6 text-sm">Password</th>
                        <th class="border-b-2 py-3 px-6 text-sm">Nomor HP</th>
                        <th class="border-b-2 py-3 px-6 text-sm">KTP</th>
                        <th class="border-b-2 py-3 px-6 text-sm">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-green-100">
                        <td class="border-b py-3 px-6 text-xs">SKOPO002</td>
                        <td class="border-b py-3 px-6 text-xs">Lil Nas</td>
                        <td class="border-b py-3 px-6 text-xs">Operator</td>
                        <td class="border-b py-3 px-6 text-xs">asdasdwl123</td>
                        <td class="border-b py-3 px-6 text-xs">0812-1936-2883</td>
                        <td class="border-b py-3 px-6 text-xs">3276 0101 010101 1233</td>
                        <td class="border-b p-6 text-xs">
                            <span class="bg-white text-green-500 rounded-full px-3 py-1 shadow-md font-semibold">Aktif</span>
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border-b py-3 px-6 text-xs">SKOPO077</td>
                        <td class="border-b py-3 px-6 text-xs">Yudho</td>
                        <td class="border-b py-3 px-6 text-xs">Operator</td>
                        <td class="border-b py-3 px-6 text-xs">@@#asd12</td>
                        <td class="border-b py-3 px-6 text-xs">0812-1231-2232</td>
                        <td class="border-b py-3 px-6 text-xs">3276 0101 010101 6654</td>
                        <td class="border-b p-6 text-xs">
                            <span class="bg-white text-green-500 rounded-full px-3 py-1 shadow-md font-semibold">Aktif</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-center items-center mt-5 space-x-4">
                <span class="text-gray-600 text-sm">Sebelumnya</span>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 rounded-lg bg-green-700">1</button>
                    <button class="px-3 py-1 rounded-lg bg-gray-300">2</button>
                    <button class="px-3 py-1 rounded-lg bg-gray-300">3</button>
                </div>
                <span class="text-gray-600 text-sm">Selanjutnya</span>
            </div>
        </div>
    </main>
</body>
</html>
