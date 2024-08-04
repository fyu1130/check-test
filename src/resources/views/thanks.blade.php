@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    Thank you
  <div class="thanks__heading">
    <h2>お問い合わせありがとうございます</h2>
  </div>
  <div class="thanks__bottom">
    <a href="/">HOME</a>
  </div>
</div>
@endsection