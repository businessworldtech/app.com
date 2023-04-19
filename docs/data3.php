<!DOCTYPE html>
<html>
<head>
 <title>Cars Animation</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <header>
  <h1>Cars Animation</h1>
 </header>
 <main>
  <div class="car-container">
   <img src="car1.png" alt="Car 1" class="car">
   <img src="car2.png" alt="Car 2" class="car">
   <img src="car3.png" alt="Car 3" class="car">
   <img src="car4.png" alt="Car 4" class="car">
   <img src="car5.png" alt="Car 5" class="car">
  </div>
 </main>
 <footer>
  <p>&copy; 2021 Cars Animation</p>
 </footer>
</body>
</html>


<style>

header {
 background-color: gray;
 color: white;
 padding: 20px;
 text-align: center;
}

.car-container {
 display: flex;
 justify-content: space-between;
 margin: 50px;
}

.car {
 animation: move 5s infinite;
 height: 200px;
 width: 300px;
}

@keyframes move {
 0% {
  transform: translateX(0);
 }
 25% {
  transform: translateX(200px);
 }
 50% {
  transform: translateX(400px);
 }
 75% {
  transform: translateX(200px);
 }
 100% {
  transform: translateX(0);
 }
}

footer {
 background-color: gray;
 color: white;
 padding: 10px;
 text-align: center;
}

</style>