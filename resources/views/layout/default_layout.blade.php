<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.head')
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


    @include('partial.header')
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

   
    <!-- Dynamic Content start here -->
    @yield('content')
    <!-- Dynamic Content End here -->

    @include('partial.footer')
    @include('partial.footer_script')

</body>

</html>
