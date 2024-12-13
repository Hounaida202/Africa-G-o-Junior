<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Map Project</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

/* Navigation Bar */
.navbar {
  background-color: #8B4513; /* Brown color */
  padding: 1rem;
}

.navbar ul {
  list-style: none;
  display: flex;
  justify-content: flex-start;
  
}

.navbar li {
  margin-right: 20px;
}

.navbar a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 18px;
}

/* Hero Section */
.hero img {
  width: 100%;
  height: auto;
  display: block;
}

.description {
  padding: 2rem;
  background-color: #f4f4f4;
  text-align: center;
}

.description h1 {
  color: #333;
  margin-bottom: 1rem;
}

.description p {
  font-size: 1.2rem;
  color: #555;
  
}

</style>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="index.php">Map</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
   <section style="display: flex; width:100%;">
  <section class="hero " style="width: 40%; padding-top:40px;">
    <img src="https://static.vecteezy.com/ti/vecteur-libre/p3/4786376-carte-ethnique-afrique-du-continent-et-du-continent-africain-mandala-texture-vector-map-of-africa-dessin-a-la-main-ethno-print-pattern-tribal-background-vectoriel.jpg" alt="Hero Image">
  </section>

  <!-- Description Section -->


  <section class="description" style="width:60%">
    <h1>About the Map</h1>
    <p>
      This map project showcases countries and their details interactively.
      By clicking on a country, you can view, modify, or delete its information.
      Explore the map to learn more about each country and its unique characteristics!
    </p>
    <div style="display: flex; gap:10px; justify-content:center; margin-top:50px">
      <div style="height: 100px; width:150px; background-color:green; border-radius:10px ;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);">
        <img style="width:100%; height:100%; border-radius:10px;" src="https://lh4.googleusercontent.com/XW1zLcmmUtKd0x9jKVayrK_MWTG-Yjv9lZ5rZyIwTGj4cRUdzavSrC9HX9C3ahu-05m3lAzzaNallWbsyGNa2tKpPdFMkdIRms-Pcks6vfZCmKxzPCOoNVCS1XRL0KiZanN35u8t" alt="">
      <div>North Africa</div>
      </div>
      <div style="height: 100px; width:150px; background-color:green; border-radius:10px ;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);">
        <img style="width:100%; height:100%; border-radius:10px;"  src="https://th.bing.com/th/id/R.4aa33c2c79d61bd647ddaa6fe87a5876?rik=EnM4gxArMmaphA&pid=ImgRaw&r=0" alt="">
        <div>South Africa</div>
      </div>
      <div style="height: 100px; width:150px; background-color:green; border-radius:10px ;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);">
        <img style="width:100%; height:100%; border-radius:10px;" src="https://www.coupons.com.gh/blog/assets/images/east-africa.jpg" alt="">
        <div>East Africa</div>
      </div>
      <div style="height: 100px; width:150px; background-color:green; border-radius:10px ;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);">
        <img style="width:100%; height:100%; border-radius:10px;" src="https://s359.kapook.com/rq/580/435/50/pagebuilder/df1f084e-930c-4b57-a182-9908caecafc7.jpg" alt="">
        <div>Western Africa</div>
      </div>
    </div>
  </section>


  </section>
</body>
</html>
