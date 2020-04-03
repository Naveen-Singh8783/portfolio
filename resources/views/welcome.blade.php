
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('sass/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/animate.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h1 class="text-center" style="margin:40px 40px 80px 40px"><div class="animated bounceInDown">Portfolio</div></h1>
    @foreach($posts as $post)
        <div class="gallery">
            <a href="/portfolio/{{ $post->id }}" class="gallery_img-1 animated bounceInLeft delay-200ms"><img class="make-it-slow" src="{{ asset('images/laptop-png-6759-1.png') }}" alt=""></a>
            {{--<a href="/portfolio/{{ $post->id }}" class="gallery_img-2 animated bounceInLeft delay-600ms"><img class="make-it-slow" src="{{ asset('images/laptop-png-6759-2.png') }}" alt=""></a>--}}
            {{--<a href="/portfolio/{{ $post->id }}" class="gallery_img-3 animated bounceInLeft delay-900ms"><img class="make-it-slow" src="{{ asset('images/laptop-png-6759-3.png') }}" alt=""></a>--}}
        </div>
    @endforeach
    <h3 class="text-center click_text"><div class="animated bounceInUp">Click any one of them to see their Portfolio</div></h3>
</div>
</body>
</html>
