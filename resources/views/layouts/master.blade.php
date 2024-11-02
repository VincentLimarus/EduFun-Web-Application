<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. EduFun</title>
    @include('custom.bootstrap5')
</head>
<body>
    @include('components.navbar')
    @yield('content')
    
    @include('components.footer')

    @include('custom.javascript')
</body>

</html>