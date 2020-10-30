@extends('layouts.parent')

@section('body')
        <div>
            <img src="{{ asset('image/top.jpg') }}" alt="トップ画像" title="メインビジュアル" class="top_image">
        </div>
            <a href="http://localhost:8000/g_all/" class="top_button">グループ一覧</a>
            <a href="http://localhost:8000/search/" class="top_button">検索</a>
        <p></p>ID<br>
        <input type="text" name="ID"><br>
        パスワード<br>
        <input type="text" name="password"><br>
        <p><input type="button" value="ログイン" id="top_button"></p>
@endsection