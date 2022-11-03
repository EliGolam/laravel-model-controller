<!DOCTYPE html>
<html lang="en">
<head>
    @include('shared.metadata')

    <!--Stylesheets and Scripts -->
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />

    <!-- My Scripts -->
    <script src="./scripts/script.js" type="text/javascript" defer></script>
    <!--#endregion Stylesheets and Scripts -->


    <title>Laravel Models&Controllers Practice</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    {{-- Current Series --}}
    @yield('content')

</html>
