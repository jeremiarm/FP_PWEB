<!DOCTYPE html>
<html>
<head>
	@include('semantic-ui.headgame')
	<title>@yield('title')</title>
	@yield('css')
</head>
<body>
	@include('semantic-ui.navgame')
	@yield('content')
	<!--@include('semantic-ui.footer') -->
</body>
<script type="text/javascript">
	@yield('script')
</script>
</html>