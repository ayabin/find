<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="password" :value="__('パスワード')" />
            <x-text-input id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div>
            <x-input-label for="password_confirmation" :value="__('パスワードの確認')" />
            <x-text-input id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>
        <div class="mt-16">
            <x-primary-button>{{ __('会員登録') }}</x-primary-button>
            <a href="{{ route('login') }}">{{ __('会員登録が済んでいる方はこちら') }}</a>
        </div>
    </form>
</x-guest-layout>
