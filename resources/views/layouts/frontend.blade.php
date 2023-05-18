<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<link rel="stylesheet" href="{{asset('/public/frontend/css/style.css')}}" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('/public/frontend/js/jquery-1.4.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/frontend/js/jquery-func.js')}}"></script>
	<title>@yield('title')</title>
   


</head>
<body>
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#">MovieHunter</a></h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a class="active" href="#">HOME</a></li>
        
      </ul>
    </div>
    <div id="sub-navigation">
      
      <div id="search">
        <form action="{{url('/')}}" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" placeholder="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
  <div id="main">
  @yield('content')
</div>


  <div id="footer">
    <p class="lf">Copyright &copy; 2023 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="#">Swiss marketing systems</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
</body>
</html>