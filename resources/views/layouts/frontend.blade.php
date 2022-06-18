<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/boxicons.min.css')}}" >
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>@yield('title')</title>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

    @include('layouts.includes.frontend-navbar')

        <!--SLIDER-->
    @if(Request::is('/'))
        @include('frontend.slider.slider');
    @endif

    @yield('content')




<script src="{{asset('frontend/js/jquery.min.js')}}" ></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="{{asset('frontend/js/app.js')}}" ></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="{{asset('frontend/js/apps.js')}}" ></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  var typed = new Typed(".auto-type",{
    strings:["Coding","Lawyer","Managing Director"],
    typeSpeed: 150,
    backSpeed: 150,
    loop:true,
  })
</script>
@yield('script')
</body>
</html>
