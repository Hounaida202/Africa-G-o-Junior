
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        height: 100vh;
        display: flex;
        background-color:#efdecd;
    }
    form{
        height: 400px;
        width: 300px;
        background-color: gray;
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        margin:auto;
        margin-left: 400px;
    }
    input{
        height: 30px;
        width: 200px;
        border-radius: 5px;
        background-color: white;
        outline: none;
        border: none;
    }
    a{
        text-decoration: none;
        list-style: none;
    }
</style>
<body>
<div style="display: flex; font-size:40px; ">
    <li><a  href="index.php">⬅️</a></li>
    <form action="controllers/addCountry.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="langue" placeholder="Langue" required>
    <input type="text" name="population" placeholder="Population" required>
    <input type='submit' name='Save' value="Save">
</form>
        </div>
</body>
</html>
