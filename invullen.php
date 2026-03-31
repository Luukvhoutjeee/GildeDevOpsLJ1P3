<?php 
session_start();
include('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datum = $_POST['datum'];
    $ov = $_POST['ov_nummer'];
    $project = $_POST['project_nummer'];
    $uren = $_POST['aantal_uren'];
    $omschrijving = $_POST['omschrijving'];
    
    $sql = "INSERT INTO urenregistratie (datum, ov_nummer, project_nummer, aantal_uren, omschrijving) 
            VALUES ('$datum', '$ov', '$project', '$uren', '$omschrijving')";

    if (mysqli_query($conn, $sql)) {
        
        $_SESSION['feedback'] = "De uren zijn succesvol opgeslagen!";
        
        header("Location: overzicht.php");
        exit();
    } else {
        echo "Fout bij opslaan: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Uren Invullen - Gilde DevOps</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <img src="logo_gilde-solutions.svg" class="logo" alt="Logo Gilde DevOps Solutions" width="200px">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="invullen.php">Uren Invullen</a></li>
            <li><a href="overzicht.php">Bekijk Overzicht</a></li>
        </ul>
        <div class="nav-spacer"></div>
    </nav>

    <main class="invullen-container">
        <h1>Uren Registreren</h1>
        <form method="post">
            <label>Datum:</label>
            <input type="date" name="datum" required>

            <label>Medewerker:</label>
            <select name="ov_nummer" required>
            <option value="">-- Kies een medewerker --</option>
            <option value="100001">Luuk (100001)</option>
            <option value="100002">Kevin (100002)</option>
            <option value="100003">Lucas (100003)</option>
            <option value="100004">Djaydon (100004)</option>
            </select>
            
            <label>Project Nummer:</label>
            <select name="project_nummer" required>
            <option value="">-- Kies een project --</option>
            <option value="101">Userstory 1</option>
            <option value="102">Userstory 2</option>
            <option value="103">Userstory 3</option>
            <option value="104">Userstory 4</option>
            <option value="105">Userstory 5</option>
            </select>


            <label>Aantal uren:</label>
            <input type="number" step="0.01" name="aantal_uren" required>

            <label>Omschrijving:</label>
            <textarea name="omschrijving" required></textarea>

            <button type="submit" class="btn">Opslaan</button>
        </form>
    </main>
</body>
</html>