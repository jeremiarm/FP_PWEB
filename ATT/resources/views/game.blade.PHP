@extends('semantic-ui.mastergame')
      @section('title')
      Login
      @stop
      @section('css')
      <style type="text/css">
	body{
		background: url("assets/image/bg3.png") no-repeat fixed;
		background-size: cover; 
		margin-left: 0px;
		margin-right: 0px;
	}
	.tulisan1{
		text-align: center;
		font-size: 35px;
		color: white;
		font-family: "Times New Roman";
		text-shadow: 2px 2px #b34700;
	}
	.tulisan2{
		text-align: center;
		font-size: 45px;
		color: white;
		font-family: "Times New Roman";
		text-shadow: 2px 2px #b34700;
	}
	#plus{
		margin-top: 5%;
		width: 25%;
		text-align: center;
	}
	#demo {
  		text-align: center;
  		font-size: 30px;
  		margin-top:0px;
  		color: white;
  		font-family: Helvetica;
	}  
.DivToScroll{   
    background-color: #F5F5F5;
    border: 1px solid #DDDDDD;
    border-radius: 4px 0 4px 0;
    color: #3B3C3E;
    font-size: 12px;
    font-weight: bold;
    left: -1px;
    padding: 10px 7px 5px;
}
.DivWithScroll{
    height:120px;
    overflow:scroll;
    overflow-x:hidden;

}
</style>
  @stop
  @section('content')
<div class="list-group" id="plus">
			<p class="list-group-item list-group-item" style="background: black;font-size: 25px;color: white;">Menu</p>
			<a href="map.php" class="list-group-item list-group-item-action">Game</a>
			<a href="index.php" class="list-group-item list-group-item-action">Logout</a>

		</div>
<div style="width: 40%; margin: -13% 2% 0 auto;">
	<div style="color: white;text-align: center;font-size: 30px;background: black;">Komentar</div>
	<div class="DivWithScroll" style="background-color: white;">
		 
	</div>
	<form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Komentar">
  
  <button type="submit" class="btn btn-warning mb-2">Submit</button>
</form>
</div>
  @stop
  @section('script')
  @stop