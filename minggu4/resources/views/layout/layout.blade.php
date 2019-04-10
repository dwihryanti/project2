<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/new/style.css') }}">
</head>
<body>
	<div class="utama">
	<header>
		<div class="header">
		@include('layout.header')
		</div>
	</header>
		<div class="menu">
		<ul>
		@section('sidebar')
		<li>HTML
		<li>CSS</li>
		<li>JS</li>
		@show
		</ul>
		</div>
	<div class="badan">
		<div class="sidebar">
		@yield('content')
		</div>
	</div>
	<div class="footer">
		DWI HARYANTI -- 17753022 -- Politeknik Negeri Lampung 
	</div>
	</div>
</body>
</html>