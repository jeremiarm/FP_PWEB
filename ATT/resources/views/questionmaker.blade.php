@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="post" action="{{url('/create')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label>Question Title:</label>
            <input type="text" class="form-control" name="soal"/>
        </div>
        <div class="form-group">
            <label>Question Explanation:</label>
            <input type="text" class="form-control" name="explanation" />
        </div>
        <div class="form-group">
            <label>Username Creator:</label>
            <input type="text" class="form-control" name="creator_username" />
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection