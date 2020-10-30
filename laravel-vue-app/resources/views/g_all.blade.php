@extends('layouts.parent')

@section('body')
<div class="sort">
            <select name="sort">
                <option value="gozyuon">五十音順</option>
                <option value="debut">デビュー順</option>
            </select>
        </div>
        <div>
        <img src="{{ asset('image/shounentai_logo.jpg') }}" alt="ロゴ" title="少年隊" class = "logo">
        <h1 class="g_name"><a href="http://localhost:8000/g_detail/少年隊/">少年隊</a></h1>
        </div>

        <div>
        <img src="{{ asset('image/tokio_logo.png') }}" alt="ロゴ" title="TOKIO" class = "logo">
        <h1 class="g_name"><a href="http://localhost:8000/g_detail/TOKIO/">TOKIO</a></h1>
        </div>

        <div>
        <img src="{{ asset('image/kinkikids_logo.jpg') }}" alt="ロゴ" title="KinKi Kids" class = "logo">
        <h1 class="g_name"><a href="http://localhost:8000/g_detail/KinKiKids/">KinKi Kids</a></h1>
        </div>

        <div>
        <span class="logoimage"><img src="{{ asset('image/v6_logo.png') }}" alt="ロゴ" title="V6" class = "logo"></span>
        <h1 class="g_name"><a href="http://localhost:8000/g_detail/V6/">V6</a></h1>
        </div>


        <div>
        <img src="{{ asset('image/arashi_logo.jpg') }}" alt="ロゴ" title="少年隊" class = "logo">
        <h1 class="g_name"><a href="http://localhost:8000/g_detail/嵐/">嵐</a></h1>
        </div>
@endsection