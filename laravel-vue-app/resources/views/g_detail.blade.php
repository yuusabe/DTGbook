@extends('layouts.parent')
@section('body')
    <img src="{{ asset('image/arashi.jpg') }}" alt="グループ画像" title="嵐" class="g_detail_image">
    <div class="table">
        <table border="1" align="center">
            <tr>
                <td>グループ名</td>
                <td>嵐</td>
            </tr>
            <tr>
                <td>結成</td>
                <td>1999年</td>
            </tr>
            <tr>
                <td>メンバー</td>
                <td>
                    <p><a href="http://localhost:8000/t_detail/相葉雅紀/">相葉 雅紀</a></p>
                    <p><a href="http://localhost:8000/t_detail/松本潤/">松本 潤</a></p>
                    <p><a href="http://localhost:8000/t_detail/二宮和也/">二宮 和也</a></p>
                    <p><a href="http://localhost:8000/t_detail/大野智/">大野 智</a></p>
                    <p><a href="http://localhost:8000/t_detail/櫻井翔/">櫻井 翔</a></p>
                </td>
            </tr>
            <tr>
                <td>デビュー曲</td>
                <td>A・RA・SHI</td>
            </tr>
            <tr>
                <td>最新曲</td>
                <td>カイト</td>
            </tr>
        </table>
    </div>
@endsection