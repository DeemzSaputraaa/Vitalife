{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Sign in Sign up -->
    <div class="flex flex-col justify-center mb-6">
        <div class="bg-white flex justify-center rounded-md p-2 shadow-md h-12 w-96 mx-auto relative">
            <div class="flex justify-between items-center w-full px-2">
                <a href="{{ route('login') }}" id="signInBtn"
                    class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                    <span class="px-2 py-1 rounded">Sign In</span>
                </a>
                <div class="h-8 w-px bg-gray-300 mx-2 px-4">|</div>
                <a href="{{ route('register') }}" id="signUpBtn"
                    class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                    <span class="px-2 py-1 rounded">Sign Up</span>
                </a>
                <div id="slider"
                    class="absolute top-[5px] left-[9px] w-[45%] h-[34px] bg-blue-500 rounded-md transition-all duration-300">
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <h2 class="dark:text-dark text-3xl font-bold">
                Welcome to Vitalife
            </h2>
        </div>
    </div>

    <!-- Login Form -->
    <form id="loginForm" method="POST" action="{{ route('login') }}" class="pb-20">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between items-center mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-white border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-900 dark:text-gray-600">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
            <div class="w-full">
                <button type="submit"
                    class="w-full bg-blue-300 text-white py-2 px-4 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-500"
                    onclick="animateButton(this)">
                    {{ __('Log in') }}
                </button>
            </div>
        </div>
    </form>

    <script>
        const signInBtn = document.getElementById('signInBtn');
        const signUpBtn = document.getElementById('signUpBtn');
        const slider = document.getElementById('slider');

        function setActiveButton(activeBtn, inactiveBtn) {
            activeBtn.querySelector('span').classList.add('border', 'border-gray-400', 'bg-gray-100');
            inactiveBtn.querySelector('span').classList.remove('border', 'border-gray-400', 'bg-gray-100');
        }

        function animateButton(button) {
            button.classList.add('animate-pulse', 'scale-90');
            setTimeout(() => {
                button.classList.remove('animate-pulse', 'scale-90');
            }, 300);
        }

        signInBtn.addEventListener('click', () => {
            slider.style.left = '9px';
            setActiveButton(signInBtn, signUpBtn);
        });

        signUpBtn.addEventListener('click', () => {
            slider.style.left = 'calc(50% + 5px)';
            setActiveButton(signUpBtn, signInBtn);
        });

        // Set initial active state
        setActiveButton(signInBtn, signUpBtn);
    </script>
</x-guest-layout> --}}



{{-- <x-guest-layout>
    <div class="grid grid-cols-2 min-h-screen bg-gray-100">
        <!-- Left Column -->
        <div class="flex flex-col justify-center items-center px-6 bg-white">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold mb-8 text-emerald-500">Sign in to Diprella</h2>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 10.06c0-5.52-4.48-10-10-10s-10 4.48-10 10 4.48 10 10 10 10-4.48 10-10zm-10 5.84c-3.23 0-5.84-2.61-5.84-5.84s2.61-5.84 5.84-5.84 5.84 2.61 5.84 5.84-2.61 5.84-5.84 5.84z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                </div>

                <p class="text-gray-500 mb-6">or use your email account:</p>

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex justify-between items-center mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-white border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-900 dark:text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
                        <div class="w-full">
                            <button type="submit"
                                class="w-full bg-blue-300 text-white py-2 px-4 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-500"
                                onclick="animateButton(this)">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column -->
        <div class="w-full md:w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset('image/bgyoga.jpg') }}');">
            <div class="flex items-center justify-center h-full bg-black bg-opacity-50 p-8">
                <div class="text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">Welcome Back</h2>
                    <p class="mb-8">Enter your personal details and start your journey with us</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="grid grid-cols-2 min-h-screen bg-gray-100">
        <!-- Left Column -->
        <div class="relative flex flex-col justify-center items-center px-6 text-white min-h-screen bg-cover bg-center rounded-l-lg"
            style="background-image: url('../image/login.jpg');">
            <div class="absolute inset-0 bg-gradient-to-l from-blue-700 to-transparent opacity-70"></div>
            <div class="absolute top-4 left-4 z-20 px-4 py-28">
                <img src="../image/LOGO_1.png" alt="Logo" class="w-32 h-auto">
            </div>
            <div class="relative z-10 text-start px-3">
                <h2 class="text-4xl font-bold mb-4">Hello, Welcome</h2>
                <p class="mb-8">Hello healthy traveller friends, register an account then continue travelling</p>
                <a href="{{ route('register') }}"
                    class="inline-block border border-white text-white py-2 px-8 rounded-full hover:bg-white hover:text-black transition duration-300">
                    SIGN UP
                </a>
            </div>
        </div>

        <!-- Right Column - Create Account -->
        <div class="flex flex-col justify-center items-center px-6 bg-white">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold mb-8 text-emerald-500">Sign in to Diprella</h2>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 10.06c0-5.52-4.48-10-10-10s-10 4.48-10 10 4.48 10 10 10 10-4.48 10-10zm-10 5.84c-3.23 0-5.84-2.61-5.84-5.84s2.61-5.84 5.84-5.84 5.84 2.61 5.84 5.84-2.61 5.84-5.84 5.84z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                </div>
                <p class="text-gray-500 mb-6">or use your email account:</p>
                <!-- Registration Form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 relative">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-inputPW id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex justify-between items-center mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-white border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-900 dark:text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="mt-4 flex flex-col items-center">
                        <div class="w-full">
                            <button type="submit"
                                class="w-full bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-700"
                                onclick="animateButton(this)">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
