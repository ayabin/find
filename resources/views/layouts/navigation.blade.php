<div id="header">
    <div>
        <div>
            <a href="{{ route('dashboard') }}"><x-application-logo /></a>
        </div>
    </div>
    <nav x-data="{ open: false }">
        <div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <a href="#">{{ Auth::user()->name }}</a>
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
    </nav>
</div>
