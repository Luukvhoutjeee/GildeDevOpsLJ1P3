<?php session_start(); ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Overzicht</title>
    <link rel="stylesheet" href="/style.css"> </head>

<body>
    <nav>
        <img src="../Foto's/logo_gilde-solutions.svg" class="logo" alt="Logo Gilde DevOps Solutions" width="200px">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Invullen/index.php">Uren Invullen</a></li>
            <li><a href="../Overzicht/index.php">Bekijk Overzicht</a></li>
        </ul>
        <div class="nav-spacer"></div>
    </nav>

    <main class="overzicht-container">
    
    <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $datum = $_POST['datum'];
            $ov = $_POST['ov_nummer'];
            $project = $_POST['project_nummer'];
            $uren = $_POST['aantal_uren'];
            $omschrijving = $_POST['omschrijving'];
        ?> 
        
        <h1>Ingevulde waarden</h1>
        
        <table>
            <thead>
                <tr>
                <th>Datum</th>
                <th>Naam</th>
                <th>Userstory</th>
                <th>Aantal uren</th>
                <th>Omschrijving</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="roze-tekst"><?php echo ($datum); ?></td>
                    <td class="roze-tekst"><?php echo ($ov); ?></td>
                    <td class="roze-tekst"><?php echo ($project); ?></td>
                    <td class="roze-tekst"><?php echo ($uren); ?></td>
                    <td class="roze-tekst"><?php echo ($omschrijving); ?></td>
                </tr>
            </tbody>
        </table>

        <?php
        } else { ?>
            <h1 class="blauwe-tekst">Er zijn geen ingevulde waarden.</h1>
            <div class="form-action">
                <a href="../Invullen/index.php" class="knop-wissen">Ga naar invullen</a>
            </div>

        <?php } ?>
    </main>
    
</body>
</html>
