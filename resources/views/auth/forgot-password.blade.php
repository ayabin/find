<x-guest-layout>
    <div class="form-attention">
        {{ __('パスワードを再設定するメールアドレス(会員ID)を入力して「送信」してください。') }}
    </div>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div>
            <x-primary-button>
                {{ __('送信') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
