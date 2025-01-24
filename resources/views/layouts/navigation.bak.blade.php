<nav x-data="{ open: false }">
    <div>
        <div>
            <div>
                <div>
                    <a href="{{ route('dashboard') }}"><x-application-logo /></a>
                </div>
                <div>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('ダッシュボード') }}
                    </x-nav-link>
                </div>
            </div>
            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button><div>{{ Auth::user()->name }}</div></button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">{{ __('プロフィル') }}</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('ログアウト') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div>
                <button @click="open = ! open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}">
        <div>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('ダッシュボード') }}
            </x-responsive-nav-link>
        </div>
        <!-- Responsive Settings Options -->
        <div>
            <div>
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>
            <div>
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('プロフィル') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
