
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('hotel\back\home\thuviencss')
    <title>Home page</title>
</head>
<body id="page-top">
    
    @include('hotel\back\home\header')

    {{-- Main --}}
    @yield('main')
    
    @include('hotel\back\home\footer')
    
    @include('hotel\back\home\thuvienjs')

    

</body>

</html>