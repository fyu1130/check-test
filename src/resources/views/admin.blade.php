@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>


    <div class="admin-table">
    <table class="admin-table__inner">
      <tr class="admin-table__row">
        <th class="admin-table__header">
            <span class="admin-table__header-span">お名前</span>
            <span class="admin-table__header-span">性別</span> 
            <span class="admin-table__header-span">メールアドレス</span>
            <span class="admin-table__header-span">お問い合わせの種類</span> 
        </th>
      </tr>
      @foreach ($admins as $admin)
      <tr class="admin-table__row">
        <td class="admin-table__item">
          <form class="detail-form" action="" method="">
            @csrf
            <div class="detail-form__item">
              <input class="detail-form__item-input" type="text" name="name" value="{{ $admin['name'] }}"/>
              <input class="detail-form__item-input" type="text" name="gender" value="{{ $admin['gender'] }}"/>
              <input class="detail-form__item-input" type="text" name="email" value="{{ $admin['email'] }}"/>
              <input class="detail-form__item-input" type="text" name="category_id" value="{{ $admin['category_id'] }}"/>
              <input type="hidden" name="id" value="{{ $admin['id'] }}" />
            </div>
            <div class="detail-form__item">
                <p class="detail-form__itme-p">{{ $admin['category']['name'] }}</p>
            </div>
            <div class="detail-form__button">
              <button class="detail-form__button-submit" type="submit">
                詳細
              </button>
            </div>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection