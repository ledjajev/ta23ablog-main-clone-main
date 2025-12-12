<section>
    <header>
        <h2 class="text-lg font-medium text-base-content">{{ __('Update Password') }}</h2>
        <p class="mt-1 text-sm text-base-content">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Current Password')</span>
            </label>
            <input type="password" name="current_password" class="input input-bordered w-full" autocomplete="current-password" required />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('New Password')</span>
            </label>
            <input type="password" name="password" class="input input-bordered w-full" autocomplete="new-password" required />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Confirm Password')</span>
            </label>
            <input type="password" name="password_confirmation" class="input input-bordered w-full" autocomplete="new-password" required />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-base-content">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
