@extends('layouts.app')

@section('content')
<div class="h-100 bg-white">
    <div class="row h-100 m-0 p-0">
        <div class="col-3 h-100 m-0 p-0 border-left border-right border-gray">
            <div class="left-memo-menu d-flex justify-content-between pt-2">
                <div class="pl-3 pt-2">
                    xxxさん、こんにちは。
                </div>
                <div class="pr-1">
                    <a href="" class="btn btn-success"><i class="fas fa-plus"></i></a>
                    <a href="{{ route('login.index') }}" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="left-memo-title h3 pl-3 pt-3">
                メモリスト
            </div>
            <div class="left-memo-list list-group-flush p-0">
                <a href="" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">タイトル</h5>
                        <small>2020/08/01 12:00</small>
                    </div>
                    <p class="mb-1">
                        詳細内容XXXXXXXXXXX
                    </p>
                </a>
            </div>
        </div>
        <div class="col-9 h-100">
            <form class="w-100 h-100" method="post">
                <input type="hidden" name="edit_id" value="" />
                <div id="memo-menu">
                    <button type="button" class="btn btn-danger" formaction=""><i class="fas fa-trash-alt"></i></button>
                    <button type="button" class="btn btn-success" formaction=""><i class="fas fa-save"></i></button>
                </div>
                <input type="text" id="memo-title" name="edit_title" placeholder="タイトルを入力する..." value="" />
                <textarea id="memo-content" name="edit_content" placeholder="内容を入力する..."></textarea>
            </form>
        </div>
    </div>
</div>
@endsection
