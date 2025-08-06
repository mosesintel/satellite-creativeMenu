<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cosmic Menu</title>
<link rel="stylesheet" href="satellite.css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="banner">
<div class="orbit-container">
<div class="orbit-path"></div>
<div class="menu-planet">Home</div>
<div class="menu-planet">About</div>
<div class="menu-planet">Services</div>
<div class="menu-planet">Contact</div>
</div>
</div>
<div class="content">
<h1 class="text-4xl font-bold mb-4">Welcome to the Cosmic Hub</h1>
<p class="text-lg max-w-2xl mx-auto">
Explore the universe of possibilities with our cutting-edge solutions. 
Navigate through our galaxy of services and discover what lies beyond the stars.
</p>
</div>
<script>
const planets = document.querySelectorAll('.menu-planet');
planets.forEach((planet, index) => {
planet.addEventListener('click', () => {
alert(`Navigating to ${planet.textContent} page!`);
});
});
</script>
</body>
</html>