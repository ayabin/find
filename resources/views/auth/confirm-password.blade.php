<x-guest-layout>
    <div class="form-attention">
        {{ __('続行する前にパスワードを確認してください') }}
    </div>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('パスワード')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div>
            <x-primary-button>{{ __('確認') }}</x-primary-button>
        </div>
    </form>
</x-guest-layout>
