<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="password" :value="__('パスワード')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div>
            <label for="remember_me" class="flex-row">
                <input id="remember_me" type="checkbox" name="remember">
                <span style="display: block">{{ __('ログイン状態を保持') }}</span>
            </label>
        </div>
        <div>
            <x-primary-button>{{ __('ログイン') }}</x-primary-button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">{{ __('パスワードをお忘れ、再設定の方はこちら') }}</a>
            @endif
        </div>
    </form>
</x-guest-layout>
