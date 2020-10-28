@extends('layouts.parent')

@section('body')
        <div class="search">
            <p class="search_title">検索</p>
            名前：
            <form action = "" method = "post">
            <input type="text" name="name">
            <p></p>
            条件：
            <select name="which">
                <option value="group">グループ</option>
                <option value="talent">タレント</option>
            </select><br/>
            <a href="http://localhost:8000/search_result/" class="search_button">検索</a>
            </form>
        </div>
@endsection