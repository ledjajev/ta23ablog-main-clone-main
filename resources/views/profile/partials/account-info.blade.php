<section class="card bg-base-100 shadow-xl p-6 space-y-4">
    <header>
        <h2 class="text-xl font-semibold text-base-content">Account Information</h2>
        <p class="text-sm text-base-content">Here is your account information and activity details.</p>
    </header>

    <div class="space-y-3">
        <!-- Name -->
        <div class="flex justify-between items-center">
            <span class="font-medium text-base-content">Name:</span>
            <span class="text-base-content">{{ Auth::user()->name }}</span>
        </div>

        <!-- Email -->
        <div class="flex justify-between items-center">
            <span class="font-medium text-base-content">Email:</span>
            <span class="text-base-content">{{ Auth::user()->email }}</span>
        </div>

        <!-- Email Verified -->
        <div class="flex justify-between items-center">
            <span class="font-medium text-base-content">Email Verified:</span>
            @if (Auth::user()->hasVerifiedEmail())
                <span class="text-success font-semibold">Verified</span>
            @else
                <span class="text-warning font-semibold">Not Verified</span>
            @endif
        </div>

        <!-- Joined Date -->
        <div class="flex justify-between items-center">
            <span class="font-medium text-base-content">Joined:</span>
            <span class="text-base-content">{{ Auth::user()->created_at->format('M d, Y') }}</span>
        </div>

        <!-- Last Updated -->
        <div class="flex justify-between items-center">
            <span class="font-medium text-base-content">Last Updated:</span>
            <span class="text-base-content">{{ Auth::user()->updated_at->diffForHumans() }}</span>
        </div>

        <!-- Optional: Role (if you have roles implemented) -->
        @if (method_exists(Auth::user(), 'getRoleNames'))
            <div class="flex justify-between items-center">
                <span class="font-medium text-base-content">Role:</span>
                <span class="text-base-content">{{ Auth::user()->getRoleNames()->join(', ') }}</span>
            </div>
        @endif
    </div>
</section>
