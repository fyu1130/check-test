@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
        </div>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <input type="radio" name="gender" id="men" checked/>
          <label for="men">男性</label>
          <input type="radio" name="gender" id="women" />
          <label for="women">女性</label>
          <input type="radio" name="gender" id="other" />
          <label for="other">その他</label>
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    いったん電話は後回し
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tell" placeholder="09012345678" value="{{ old('tell') }}" />
        </div>
        <div class="form__error">
          @error('tell')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>


    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
          @error('building')
          {{ $message }}
          @enderror
        </div>
    </div>
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--pulldown">
          <select name="category_id" id="category_id">
            <option value="1">商品のお届けについて</option>
            <option value="2">商品の交換について</option>
            <option value="3">商品トラブル</option>
            <option value="4">ショップへのお問い合わせ</option>
            <option value="5">その他</option>
          </select>
        </div>
        <div class="form__error">
          @error('category_id')
          {{ $message }}
          @enderror
        </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection