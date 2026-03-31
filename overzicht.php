<?php
include('db.php');

$query = "SELECT * FROM overzicht_urenregistratie WHERE 1=1";

if (!empty($_GET['medewerker'])) {
    $medewerker = mysqli_real_escape_string($conn, $_GET['medewerker']);
    $query .= " AND Medewerker LIKE '%$medewerker%'";
}

if (!empty($_GET['project'])) {
    $project = mysqli_real_escape_string($conn, $_GET['project']);
    $query .= " AND Project = '$project'";
}

$query .= " ORDER BY Datum DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Uren - Gilde DevOps</title>
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

    <section class="filters container">
        <form method="GET" action="overzicht.php" class="filter-form">
            <select name="medewerker">
                <option value="">-- Alle Medewerkers --</option>
                <option value="Luuk">Luuk van Hout</option>
                <option value="Kevin">Kevin Broens</option>
                <option value="Lucas">Lucas Horsch</option>
                <option value="Djaydon">Djaydon Wildervanck</option>
            </select>

            <select name="project">
                <option value="">-- Alle Projecten --</option>
                <option value="Userstory 1">Userstory 1</option>
                <option value="Userstory 2">Userstory 2</option>
                <option value="Userstory 3">Userstory 3</option>
                <option value="Userstory 4">Userstory 4</option>
                <option value="Userstory 5">Userstory 5</option>
            </select>

            <button type="submit" class="btn-filter">Filteren</button>
            <a href="overzicht.php" class="btn-reset">Reset</a>
        </form>
        <?php
    session_start();

    if (isset($_SESSION['feedback'])) {
        echo "<p style='color: white; background: green; padding: 10px; border-radius: 5px;'>";
        echo $_SESSION['feedback'];
        echo "</p>";

        unset($_SESSION['feedback']);
    }
    ?>
    </section>

    <main class="overzicht-container">
        <div class="table-wrapper">
            <h1>Projectoverzicht Gilde DevOps</h1>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Medewerker</th>
                        <th>Project</th>
                        <th>Uren</th>
                        <th>Werkzaamheden</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totaal_uren = 0;
                    while ($row = mysqli_fetch_assoc($result)):
                        $totaal_uren += $row['Uren'];
                    ?>
                        <tr>
                            <td><?php echo date('d-m-Y', strtotime($row['Datum'])); ?></td>
                            <td><strong><?php echo $row['Medewerker']; ?></strong><br><small><?php echo $row['E-mailadres']; ?></small></td>
                            <td><span class="badge"><?php echo $row['Project']; ?></span></td>
                            <td class="uren-cel"><?php echo number_format($row['Uren'], 2); ?></td>
                            <td><?php echo $row['Werkzaamheden']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr class="totaal-rij">
                        <td colspan="2"></td>
                        <td class="totaal-label">Totaal:</td>
                        <td class="uren-cel"><?php echo number_format($totaal_uren, 2); ?></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
</body>

</html>