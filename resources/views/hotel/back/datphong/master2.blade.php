
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('hotel\back\datphong\thuviencss2')
    <title>Home page</title>
</head>
<body id="page-top">
    
    @include('hotel\back\datphong\header')

    {{-- Main --}}
    @yield('main')
    
    @include('hotel\back\datphong\footer')
    
    @include('hotel\back\datphong\thuvienjs2')

    

</body>

</html>