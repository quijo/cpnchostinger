<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPNC</title>
    <link rel="icon" sizes="32x32" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <x-nav></x-nav>
    
    {{$slot}}





    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const startYear = 1964; // 🔥 CHANGE THIS to your founding year
        const currentYear = new Date().getFullYear();
        const years = currentYear - startYear;

        document.getElementById("yearsCount").innerText = years + "+";
    });
</script>
<x-footer />
</body>
</html>