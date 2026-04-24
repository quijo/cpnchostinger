<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPNC</title>
    <link rel="icon" sizes="32x32" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<x-nav></x-nav>
    
    {{$slot}}

<x-footer />



{{-- JS --}}

{{-- Card Animation --}}
<script>
    const cards = document.querySelectorAll(".promo-card");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.remove("opacity-0", "translate-y-10");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }, index * 150);
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => observer.observe(card));
</script>


<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>


{{-- NAVBAR Burger button --}}
<script>
    const burger = document.getElementById('burgerBtn');
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });
</script>


 {{-- 62 years auto counter --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const el = document.getElementById("yearsCount");

            if (el) {
                const startYear = 1964;
                const currentYear = new Date().getFullYear();
                el.innerText = (currentYear - startYear) + "+";
            }
        });
    </script>
</body>
</html>