<x-guest-layout>
    <div>
        {{ __('ご登録いただきありがとうございます!始める前に、先ほどメールでお送りしたリンクをクリックして、メール アドレスを確認してください。届いていない場合は、別のメールをお送りいたします。') }}
    </div>
    @if (session('status') == 'verification-link-sent')
        <div>
            {{ __('新しい確認リンクが、登録時に指定した電子メール アドレスに送信されました。') }}
        </div>
    @endif
    <div>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-primary-button>{{ __('確認メールを再送信する') }}</x-primary-button>
            </div>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">{{ __('ログアウト') }}</button>
        </form>
    </div>
</x-guest-layout>
