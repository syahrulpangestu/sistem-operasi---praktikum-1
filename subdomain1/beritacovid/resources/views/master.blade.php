<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="assets/images/earth.png" />    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleForm.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> 

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/script-calculator.js')}}"></script>
    <script src="{{asset('assets/js/table.js')}}"></script>
    <title>Document</title>
</head>
<style>
.swiper {
  width: 100%;
  height: 100%;
}
</style>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
<script>
    $('.modal-toggle').on('click', function(e) {
        e.preventDefault();
        $('.modal').toggleClass('is-visible');
    });
</script>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 0.8,
        speed: 3000,
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>
</html>