<section>
    <header>
        <h2 class="text-lg font-medium text-base-content">{{ __('Profile Information') }}</h2>
        <p class="mt-1 text-sm text-base-content">{{ __("Update your account's profile information and email address.") }}</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Name -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Name')</span>
            </label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="@lang('Name')" class="input input-bordered w-full" required autofocus autocomplete="name" />
            @error('name') <span class="label-text-alt text-error">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Email')</span>
            </label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="@lang('Email')" class="input input-bordered w-full" required autocomplete="username" />
            @error('email') <span class="label-text-alt text-error">{{ $message }}</span> @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <p class="text-sm mt-2 text-base-content">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="btn btn-link btn-sm">{{ __('Click here to re-send the verification email.') }}</button>
                </p>
                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-success">{{ __('A new verification link has been sent to your email address.') }}</p>
                @endif
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-base-content">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
