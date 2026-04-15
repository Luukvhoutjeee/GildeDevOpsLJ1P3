<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Uren Invullen - Gilde DevOps</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <nav>
        <img src="/Foto's/logo_gilde-solutions.svg" class="logo" alt="Logo Gilde DevOps Solutions" width="200px">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="/Invullen/index.php">Uren Invullen</a></li>
            <li><a href="/Overzicht/index.php">Bekijk Overzicht</a></li>
        </ul>
        <div class="nav-spacer"></div>
    </nav>

    <main class="invullen-container">
        <h1>Uren Registreren</h1>
        
        <form method="POST" action="/Overzicht/index.php">
            <label>Datum:</label>
            <input type="date" name="datum" required>

            <label>Medewerker:</label>
            <select name="ov_nummer" required>
                <option value="">-- Kies een medewerker --</option>
                <option value="Luuk van Hout">Luuk (100001)</option>
                <option value="Kevin Broens">Kevin (100002)</option>
                <option value="Lucas Horsch">Lucas (100003)</option>
                <option value="Djaydon Wildervanck">Djaydon (100004)</option>
            </select>
            
            <label>Project Nummer:</label>
            <select name="project_nummer" required>
                <option value="">-- Kies een project --</option>
                <option value="Userstory 1">Userstory 1</option>
                <option value="Userstory 2">Userstory 2</option>
                <option value="Userstory 3">Userstory 3</option>
                <option value="Userstory 4">Userstory 4</option>
                <option value="Userstory 5">Userstory 5</option>
            </select>

            <label>Aantal uren:</label>
            <input type="number" step="0.5" name="aantal_uren" required>

            <label>Omschrijving:</label>
            <textarea name="omschrijving" required></textarea>

            <button type="submit" class="btn">Versturen</button>
        </form>
    </main>
</body>
</html>