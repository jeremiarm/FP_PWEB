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
            <label>Choice Number 1:</label>
            <input type="text" class="form-control" name="choice1" />
        </div>
        <div class="form-group">
            <label>Choice Number 2:</label>
            <input type="text" class="form-control" name="choice2" />
        </div>
        <div class="form-group">
            <label>Choice Number 3:</label>
            <input type="text" class="form-control" name="choice3" />
        </div>
        <div class="form-group">
            <label>Choice Number 4:</label>
            <input type="text" class="form-control" name="choice4" />
        </div>
        <div class="form-group">
            <label>Correct Answer:</label>
            <input type="number" min="1" max="4" class="form-control" name="correct_answer" />
        </div>
        <div class="form-group">
            <label>Question Explanation:</label>
            <input type="text" class="form-control" name="explanation" />
        </div>

        
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection