@extends('layouts.parent')

@section('body')
    <div class="table">
        <table border="1" align="center">
            <tr>
                <td>タレント名</td>
                <td>木村拓哉</td>
            </tr>
            <tr>
                <td>デビュー</td>
                <td>1991</td>
            </tr>
            <tr>
                <td>プロフィール</td>
                <td><a href="http://localhost:8000/t_detail/木村拓哉/">詳細</a></td>
            </tr>
            <tr>
                <td>デビュー曲</td>
                <td>Can't Stop!! -LOVING-</td>
            </tr>
            <tr>
                <td>最新曲</td>
                <td>Otherside</td>
            </tr>
        </table>
    </div>
@endsection