@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <div class="card mb-3">

            <img src="{{url('uploads/'.$todo->file_name)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$todo->title}}</h5>
                <p class="card-text">{{$todo->content}}</p>
                <form action="{{ url('/todo/'.$todo->id) }}" method="post" id="form-delete">
                    @method('DELETE')
                    @csrf
{{--                    <a href="{{ url('dynamic_email_template') }}" class="btn btn-primary form-control">Edit</a>--}}
                    <button class="btn btn-danger form-control" onclick="confirm_delete()" type="button">Delete</button>

                </form>
            </div>
        </div>


        <script>
            function confirm_delete() {
                var text = '{!! $todo->title !!}';
                var confirm = window.confirm('ยืนยันการลบนี้'+text);
                if (confirm) {
                    document.getElementById('form-delete').submit();
                }
            }

            function score_view() {fengshuishow_data.blade.php
                let scoreView = document.getElementById('postScoreView').value;
                let scoreViews = parseInt(scoreView) + 1;

                document.getElementById('postScoreView').value = scoreViews;
            }
        </script>
    </div>
@endsection

