 @extends('semantic-ui.master')
 @section('title')
 Index
 @stop
 @section('css')
 <style type="text/css">
 body{
  background: url("assets/image/bg1.png") no-repeat fixed;
  background-size: cover; 
  margin-left: 0px;
  margin-right: 0px;
}
.tulisan1{
  text-align: center;
  font-size: 80px;
  color: #ffcc00;
  font-family: "Helvetica";
  text-shadow: 1px 1px #cca300 ;
}
.tulisan2{
  text-align: center;
  font-size: 45px;
  color:  #ffcc00;
  font-family: "Helvetica";
  text-shadow: 1px 1px  #cca300;
}

</style>
@stop
@section('content')
<div class="tulisan1">
  <p>Approaching the Truth</p>
</div>
<div class="tulisan2">
  <p> Temukan Kebenaran di balik dalamnya Kebohongan!</p>
</div>
<div style="width: 50%; margin: 15% auto 0 auto;">
  <form action="{{route('register')}}">
    <input type="image" src="assets/image/button1.png" alt="Submit" width="100%" height="100%">
  </form>
</div>
@stop
@section('script')
@stop