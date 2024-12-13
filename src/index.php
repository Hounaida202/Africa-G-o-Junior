<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-color: #f7f7f7;
  color: #333;
}

.navbar {
  background-color: #8B4513;
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

h1 {
  color: #8B4513;
  font-size: 2rem;
  text-align: center;
  margin: 20px 0;
}

.cards-container {
  background-color: #f7f7f7;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 20px;
}

.card {
  height: 400px;
  width: 350px;
  background: white;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.delate {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  background: none;
  border: none;
  color: #ff6b6b;
  cursor: pointer;
}

.delate:hover {
  color: #ff3b3b;
}

h3 {
  color: #8B4513;
  font-size: 1.5rem;
  margin-bottom: 10px;
}

p {
  color: #555;
  margin-bottom: 10px;
}

.villes-div {
  background-color: #fafafa;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  margin-top: 10px;
}

.summary {
  list-style: none;
  cursor: pointer;
  font-size: 1.1rem;
  font-weight: bold;
  color: #8B4513;
  text-align: center;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 10px;
}

.summary:hover {
  background-color: #8B4513;
  color: white;
}

form {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

form input[type="text"],
form input[type="number"] {
  width: 90%;
  height: 15px;
  padding: 10px;
  margin: 0;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 1rem;
}

form input[type="submit"] {
  background-color: #8B4513;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
  margin-top: 10px;
}

form input[type="submit"]:hover {
  background-color: #6f3812;
}
h1{
    padding-left: 30px;
}
</style>


<body>
<?php
include("./database.php");
$sql="SELECT pays.*, ville.nom as ville FROM pays, ville WHERE pays.pays_id = ville.ville_id";
$resultat = mysqli_query($conn, $sql);
echo'<nav class="navbar">
    <ul>
      <li><a href="login.php">Home</a></li>
      <li><a href="index.php">Map</a></li>
    </ul>
  </nav>';
  echo'<div style="display:flex; justify-content:space-between;">
  <h1>Les pays d Afrique</h1>;
  <ul>
  <li><a style="font-size:30px; list-style:none; cursor:pointer; text-decoration:none;" href="ajout.php">➕</a></li>
  </ul>
  </div>';
  //---------------------------
if (mysqli_num_rows($resultat) > 0) {
echo "<div class='cards-container'>"; 
while ($row = mysqli_fetch_assoc($resultat)) {
    $payId = intval($row['pays_id']);
    $sql="SELECT * FROM ville WHERE ville.pays_id = $payId";
    $villesResultat = mysqli_query($conn, $sql);
    echo "<div class='card'>"; 
    echo "<form action='./controllers/deleteCountry.php' method='POST'>";
    echo "<button type='submit' name='delete' class='delate'style='border:none;background:none;'>🗑️</button>";
    echo "<input type='hidden' name='pays_id' value='{$row['pays_id']}'>";
    echo "</form>";
    echo "<h3>{$row['nom']}</h3>"; 
    echo "<p><strong style='color:gray;'>Langue:</strong> {$row['langue']}</p>";
    echo "<p><strong style='color:gray;'>Population:</strong> {$row['population']}</p>"; 
    // ------------------------------
    echo "<details>";
    echo "<summary class='summary'>Liste des villes</summary>"; 
    echo "<div class='villes-div'>"; 
    while ($city = mysqli_fetch_assoc($villesResultat)) {
        echo "<p> 📍{$city['nom']}</p>";}
    echo "</div>";
    echo "</details>";
// ----------------------------------
    echo "<details>";
    echo "<summary class='summary' >✏️</summary>"; 
    echo "<form action='./controllers/updateCountry.php' method='POST'  id='form-update'>";
       echo"<div style='display:flex;' >"; 
     echo"<div>";
    echo "<input type='text' name='nom' value='{$row['nom']}' required>";
    echo "<input style='display:none;'type='text' name='pays_id' value='{$row['pays_id']}' required>";
    echo "<input type='text' name='langue' value='{$row['langue']}' required>";
    echo "<input type='number' name='population' value='{$row['population']}' required>";
     echo"</div>";
     echo"<div>";
    echo "<input type='submit' name='update' value='Save' >";
     echo"</div>";
       echo"</div>";
    echo "</form>";
    echo "</details>";
    echo "</div>";
}
echo "</div>";
} else {
echo "<p>Aucun pays trouvé.</p>";
}
//---------------------------
?>
</body>
</html>





