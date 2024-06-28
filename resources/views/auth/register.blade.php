<x-guest-layout>
    <div class="flex flex-col md:flex-row justify-center items-start gap-8">
        <div class="w-full md:w-1/2">
            <div class="flex flex-col justify-center mb-6">
                <div class="bg-white flex justify-center rounded-md p-2 shadow-md h-12 w-96 mx-auto relative">
                    <div class="flex justify-between items-center w-full px-2">
                        <a href="{{ route('login') }}" id="signInBtn"
                            class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                            <span
                                class="px-2 py-1 rounded {{ Request::routeIs('login') ? 'border border-gray-400 bg-gray-100' : '' }}">Sign
                                In</span>
                        </a>
                        <div class="h-8 w-px bg-gray-300 mx-2 px-4">|</div>
                        <a href="{{ route('register') }}" id="signUpBtn"
                            class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                            <span
                                class="px-2 py-1 rounded {{ Request::routeIs('register') ? 'border border-gray-400 bg-gray-100' : '' }}">Sign
                                Up</span>
                        </a>
                        <div id="slider"
                            class="absolute top-[5px] {{ Request::routeIs('login') ? 'left-[9px]' : 'left-[calc(50% + 5px)]' }} w-[45%] h-[34px] bg-blue-500 rounded-md transition-all duration-300">
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="dark:text-dark text-5xl font-bold">
                        Welcome to Vitalife
                    </h2>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <div class="relative">
                        <x-text-inputPW id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="new-password" />
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <div class="relative">
                        <x-text-inputPW id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-start mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div class="flex items-center justify-center mt-4 bg-gray-900">


                    <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
                        <div class="w-full">
                            <button type="submit"
                                class="w-full bg-blue-300 text-white py-2 px-4 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-500"
                                onclick="animateButton(this)">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
        const signInBtn = document.getElementById('signInBtn');
        const signUpBtn = document.getElementById('signUpBtn');
        const slider = document.getElementById('slider');

        function setActiveButton(activeBtn, inactiveBtn) {
            activeBtn.querySelector('span').classList.add('border', 'border-gray-400', 'bg-gray-100');
            inactiveBtn.querySelector('span').classList.remove('border', 'border-gray-400', 'bg-gray-100');
        }

        function animateButton(button) {
            button.classList.add('animate-pulse', 'cale-90');
            setTimeout(() => {
                button.classList.remove('animate-pulse', 'cale-90');
            }, 300);
        }

        signInBtn.addEventListener('click', () => {
            slider.style.left = '9px';
            setActiveButton(signInBtn, signUpBtn);
            animateButton(signInBtn);
        });

        signUpBtn.addEventListener('click', () => {
            slider.style.left = 'calc(50% + 5px)';
            setActiveButton(signUpBtn, signInBtn);
            animateButton(signUpBtn);
        });

        // Set initial active state
        setActiveButton(signUpBtn, signInBtn);
        slider.style.left = 'calc(50% + 5px)';
    </script>
</x-guest-layout>
