<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
       .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card.flip .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            backface-visibility: hidden;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="flip-card w-full max-w-md">
        <div class="flip-card-inner mt-6">
            <!-- Login Form -->
            <div class="flip-card-front bg-green-100 p-8 shadow-2xl rounded-2xl">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="text-center items-center justify-center mb-6">
                        <h2 class="text-2xl font-semibold mt-4">Please Login</h2>
                    </div>

                    <div class="mb-4">
                        <input type="email" name="email" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" placeholder="Enter Email" required>
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="password" name="password" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" placeholder="Enter Password" required>
                        @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="submit" value="Login" class="bg-blue-600 hover:bg-gray-900 text-white w-full py-3 rounded-lg cursor-pointer">
                    </div>

                    <div class="mb-4">
                        <a class="underline text-sm text-red-600 hover:text-gray-900 block text-center" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>

                    <div class="mb-4">
                        <a href="javascript:void(0)" class="underline text-sm text-red-500 hover:text-gray-900 block text-center" onclick="document.querySelector('.flip-card').classList.toggle('flip')">
                            {{ __('Don\'t have an account?') }}
                        </a>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="flip-card-back bg-green-100 p-8 shadow-2xl rounded-2xl">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="text-center items-center justify-center mb-6">
                        <h2 class="text-2xl font-semibold mt-4">Please Register</h2>
                    </div>

                    <div class="mb-4">
                        <input id="name" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" type="text" name="name" placeholder="Enter Name" required autofocus autocomplete="name">
                        @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input id="email" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" type="email" name="email" placeholder="Enter Email" required autocomplete="username">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input id="password" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" type="password" name="password" placeholder="Enter Password" required autocomplete="new-password">
                        @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input id="password_confirmation" class="border-0 block w-full p-3 rounded-lg focus:ring focus:ring-blue-500" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="submit" value="Register" class="bg-blue-600 hover:bg-gray-900 text-white w-full py-3 rounded-lg cursor-pointer">
                    </div>

                    <div class="mb-4">
                        <a href="javascript:void(0)" class="underline text-sm text-red-500 hover:text-gray-900 block text-center" onclick="document.querySelector('.flip-card').classList.toggle('flip')">
                            {{ __('Already have an account?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.flip-card').classList.remove('flip');
    </script>
</body>

</html>