@extends('layouts.parent')

@section('body')
    <img src="{{ asset('image/aibamasaki.jpg') }}" alt="タレント画像" title="相葉雅紀" class="detail_image">
    <div class="table">
        <table border="1" align="center">
            <tr>
                <td>タレント名</td>
                <td>相葉雅紀</td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td>1982年12月24日</td>
            </tr>
            <tr>
                <td>出身</td>
                <td>千葉県</td>
            </tr>
            <tr>
                <td>ニックネーム</td>
                <td>相葉ちゃん</td>
            </tr>
            <tr>
                <td>所属グループ</td>
                <td><a href="http://localhost:8000/g_detail/嵐">嵐</a></td>
            </tr>
            <tr>
                <td>メンバーカラー</td>
                <td>緑</td>
            </tr>
        </table>
    </div>
@endsection