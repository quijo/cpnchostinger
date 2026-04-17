<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPNC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <x-nav></x-nav>
    
    {{$slot}}




   <!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menuBtn");
    const menu = document.getElementById("mobileMenu");

    if (!btn || !menu) return;

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
});
    </script> -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>