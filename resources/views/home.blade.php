@extends('layouts.app')

@section('content')
<!-- タイトル　-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 alarm-box">
            <div class="card">
                <div class="card-header">アラーム作成</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    アラームを作って保存したり、公開したりすることができます
                </div>
            </div>
        </div>
        <!-- 機能説明と　-->
        <div class="col-md-4 alarm-box">
            <div class="card">
                <div class="card-header">アラーム機能</div>

                <div class="card-body">
                    音源やレイアウトの変更が可能
                </div>
                <a href="/register" class="btn btn-success">今すぐアラームを作成する</a>
            </div>
        </div>
    </div>
</div>
@endsection
