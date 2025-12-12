<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-base-content">{{ __('Delete Account') }}</h2>
        <p class="mt-1 text-sm text-base-content">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
    </header>

    <button class="btn btn-error" onclick="my_modal_1.showModal()">{{ __('Delete Account') }}</button>

    <dialog id="my_modal_1" class="modal">
        <form method="post" action="{{ route('profile.destroy') }}" class="modal-box space-y-4 p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-base-content">{{ __('Are you sure you want to delete your account?') }}</h2>
            <p class="text-sm text-base-content">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">@lang('Password')</span>
                </label>
                <input type="password" name="password" class="input input-bordered w-full" placeholder="@lang('Password')" required autocomplete="current-password" />
                @error('password') <span class="label-text-alt text-error">{{ $message }}</span> @enderror
            </div>

            <div class="modal-action">
                <button type="button" class="btn btn-secondary" onclick="my_modal_1.close()">{{ __('Cancel') }}</button>
                <button type="submit" class="btn btn-error">{{ __('Delete Account') }}</button>
            </div>
        </form>
    </dialog>
</section>
