<!DOCTYPE html>
<html>
<head>
    <title>CPNC Digital Brochure 2026</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {
    margin:0;
    background:#000;
    overflow:hidden;
}


.viewer {
    width:100vw;
    height:100vh;
}


.slides {
    display:flex;
    width:100vw;
    height:100vh;
    overflow-x:auto;
    scroll-snap-type:x mandatory;
}


.slide {
    min-width:100vw;
    height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    scroll-snap-align:start;
    overflow:hidden;
}


.page {

    width:100vh;
    height:auto;

    /* transform:rotate(-90deg); */

}


.page img {

    width:100%;
    height:auto;
    display:block;

}
</style>
</head>


<body>

<div class="viewer">

    <div class="slides">

        <div class="slide">
            <div class="page">
                <img src="{{ asset('files/college/b1.jpg') }}">
            </div>
        </div>

        <div class="slide">
            <div class="page">
                <img src="{{ asset('files/college/b2.jpg') }}">
            </div>
        </div>

    </div>

</div>
</body>
</html>