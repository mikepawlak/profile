<!DOCTYPE html>
<html>
<head>
  @include('layouts.headContent')
  <title>Mike Pawlak | @yield("title", "Home")</title>
</head>
<body>
  @include('layouts.header', compact($page))
  @yield("content")

  @yield("scripts")
</body>

</html>
