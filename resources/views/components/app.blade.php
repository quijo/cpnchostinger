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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 800,
            once: true
        });
    });
</script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const startYear = 1964; // 🔥 CHANGE THIS to your founding year
        const currentYear = new Date().getFullYear();
        const years = currentYear - startYear;

        document.getElementById("yearsCount").innerText = years + "+";
    });
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <x-nav></x-nav>
    
    {{$slot}}



<script>
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".promo-card");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.remove("opacity-0", "translate-y-10");
          entry.target.classList.add("opacity-100", "translate-y-0");
        }, index * 150); // stagger effect
      }
    });
  }, {
    threshold: 0.2
  });

  cards.forEach(card => observer.observe(card));
});
</script>
<script>
    const burger = document.getElementById('burgerBtn');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });
</script>
<x-footer />
</body>
</html>