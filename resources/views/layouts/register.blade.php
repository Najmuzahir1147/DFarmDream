<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Farm Dream Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="flex space-x-32 items-center">
        <!-- Logo Section (Left Panel) - No changes made here -->
        <div class="bg-green-700 rounded-3xl p-16 flex justify-center items-center w-[40rem] h-[38rem] -ml-40">
            <img src="{{ asset('assets/svg/Logo-Dfarm-large.svg') }}" alt="DFarm Logo">
        </div>

        <!-- Register Form Section (Right Panel) - Adjusted for a smaller form layout -->
        <div class="w-64"> <!-- Reduced width of the registration form container -->
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create an Account <span aria-label="wave" role="img">👋</span></h2>
            <form action="{{ route('register') }}" method="POST" class="space-y-3"> <!-- Reduced vertical spacing between fields -->
                @csrf
                <!-- Full Name Input -->
                <div>
                    <label for="name" class="text-gray-700 block mb-1">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter your full name"> <!-- Reduced padding -->
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="text-gray-700 block mb-1">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter your email"> <!-- Reduced padding -->
                </div>

                <!-- ID Input -->
                <div>
                    <label for="id" class="text-gray-700 block mb-1">ID</label>
                    <input type="text" id="id" name="id" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Choose an ID"> <!-- Reduced padding -->
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="text-gray-700 block mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter your password"> <!-- Reduced padding -->
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="password_confirmation" class="text-gray-700 block mb-1">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Confirm your password"> <!-- Reduced padding -->
                </div>

                <!-- Location Input -->
                <div>
                    <label for="location" class="text-gray-700 block mb-1">Location</label>
                    <input type="text" id="location" name="location" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Province, Kabupaten"> <!-- Reduced padding -->
                </div>

                <!-- Submit Button -->
                <div>
                    <a href="{{ url('/login') }}" class="w-full">
                        <button type="button" class="w-full bg-green-700 text-white font-semibold py-2 rounded-lg hover:bg-green-800 transition duration-300">Register</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
