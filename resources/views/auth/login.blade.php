{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout title="Login">
  <x-padding.section-padding class="py-10">
    <div class="flex min-h-screen">
      <!-- Left Illustration -->
      <div class="relative items-start justify-center hidden w-1/2 pt-20 lg:flex">
        <div class="px-8 text-center">
          <div class="w-[300px] h-[300px] mx-auto">
            <img src="{{ asset('assets/ilustrations/medicine-ilus.svg') }}" alt="Doctor Illustration"
              class="w-full h-full mx-auto">
          </div>
          <h2 class="mt-6 text-3xl font-bold text-accent">Selamat Datang di Luminova</h2>
          <p class="mt-2 text-gray-600">Buat janji medis dengan mudah, cepat, dan terpercaya 🩺</p>
        </div>
      </div>

      <!-- Right Login Form -->
      <div class="flex items-center justify-center w-full px-6 py-12 lg:w-1/2">
        <div class="w-full max-w-md p-8 bg-white shadow-lg rounded-2xl">
          <!-- Logo -->
          <div class="flex justify-center mb-6">
            <div class="flex items-end gap-3">
              <div class="w-[35px] h-[35px]">
                <img src="{{ asset('assets/logos/Luminova.png') }}" alt="" class="w-full h-full">
              </div>
              <div class="-mb-1 text-2xl font-bold text-accent">Luminova</div>
            </div>
          </div>

          <!-- Header -->
          <h2 class="mb-2 text-2xl font-bold text-gray-800">Welcome Back 🩺</h2>
          <p class="mb-6 text-gray-500">Masuk untuk melanjutkan konsultasi medis Anda</p>

          <!-- Form -->
          <form action="#" method="POST" class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" placeholder="you@example.com"
                class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700">Password</label>
              <input type="password" placeholder="********"
                class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s">
            </div>

            <div class="flex items-center justify-between text-sm">
              <a href="#" class="text-accent hover:underline">Lupa Password?</a>
            </div>

            <button type="submit"
              class="w-full py-2 text-white rounded-lg bg-accent hover:bg-accent-hover transition-3s">
              Masuk
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center my-6">
            <hr class="flex-1 border-gray-300">
            <span class="px-4 text-sm text-gray-400">atau</span>
            <hr class="flex-1 border-gray-300">
          </div>

          <!-- Social Login -->
          <div class="flex justify-center space-x-4">
            <button class="w-[55px] h-[55px] flex items-center justify-center border rounded-full hover:bg-gray-100">
              <i class="text-red-500 fab fa-google"></i>
            </button>
            <button class="w-[55px] h-[55px] flex items-center justify-center border rounded-full hover:bg-gray-100">
              <i class="text-accent fab fa-facebook"></i>
            </button>
          </div>

          <!-- Footer -->
          <p class="mt-6 text-sm text-center text-gray-600">
            Baru di Luminova?
            <a href="#" class="text-accent hover:underline">Buat akun</a>
          </p>
        </div>
      </div>
    </div>
  </x-padding.section-padding>
</x-guest-layout>
