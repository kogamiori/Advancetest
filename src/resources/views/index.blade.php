<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" value="{{ old('name') }}" />
                        </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="circle">
                        <input type="radio" name="gender" value="男性" autofocus>男性
                        <input type="radio" name="gender" value="女性">女性
                        </div>
                    </div>
                    <div class="form__error">
                    <!---バリデーション機能を実装したら記述---->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                        <span class="form__label--mark">〒</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="post-code" value="{{ old('post-code') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('post-code')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="bill" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" value="{{ old('content') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>