<x-guest-layout>
    <div class="w-full max-w-md mx-auto mt-10">
            <h2 class="text-2xl font-bold text-center mb-4">{{ __('Forgot your password?') }}</h2>
            <p class="mb-6 text-sm text-gray-600 dark:text-gray-400 text-center">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <!-- Session Status -->
            @if(session('status'))
                <div class="mb-4 text-green-600 dark:text-green-400 text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 mb-2">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="input input-bordered w-full" />
                    @error('email')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Email Password Reset Link') }}
                </button>
            </form>
    </div>
</x-guest-layout>
