<footer class="block w-screen absolute bottom-0 left-0 bg-white px-4 py-2">
    <div class="flex justify-between">
        <p>© Nicolas Vanhecke</p>
        @if( Auth::user()->isAdmin )
            @if( str_contains( Illuminate\Support\Facades\Route::currentRouteName(), 'admin' ) )
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Go to frontend') }}
                    </x-nav-link>
                </div>
            @else
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Go to admin') }}
                    </x-nav-link>
                </div>
            @endif
        @endif
    </div>
</footer>
