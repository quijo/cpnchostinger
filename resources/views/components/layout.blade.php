<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>CPNC</title>
    <link rel="stylesheet" href={{ asset('css/tailwind.css') }}>
    <link rel="stylesheet" href={{ asset('css/tailwind.css') }}>

</head>

<body>
    <x-menu> </x-menu>
    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66f4f070e5982d6c7bb49abd/1i8mcmej7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->
    {{-- tidio chat --}}
    {{-- <script src="//code.tidio.co/9tchimmf68dgq0kqv86grv509wmpkjpi.js" async></script> --}}
    {{-- end tidio chat --}}
    <div style="width: 200px;height:200px;">
        <script src="{{ asset('js/snowfall.js') }}"></script>
        <script>
            let snowfall = new Snowfall({
                // number of snowflakes
                count: 100,
                // min/max size
                minRadius: 10,
                maxRadius: 30,
                // min/max speed
                minSpeed: 1,
                maxSpeed: 4,
                // custom symbol or text for snowflakes
                text: "\u2744",
                // color of snowflakes
                color: "#ffffff",
                // z-index for the canvas
                zIndex: "1000"
            });
        </script>
    </div>


</body>

</html>
