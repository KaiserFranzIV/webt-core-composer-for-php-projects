<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR-Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center; /* Vertikal und horizontal zentriert */
            min-height: 100vh;
            background-color: #f9f9f9; /* Heller Hintergrund */
            margin: 0;
            font-family: Arial, sans-serif; /* Saubere Schrift */
            text-align: center;
        }

        h1 {
            font-weight: bold;
            color: #333; /* Dunkles Grau für besseren Kontrast */
            margin-bottom: 20px;
        }

        h2 {
            font-weight: bold;
            color: #555; /* Mittelgrau für Untertitel */
            margin-bottom: 15px;
        }

        #newForm {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center; /* Zentrierung */
            width: 100%;
            max-width: 400px; /* Begrenzte Breite für ein übersichtliches Formular */
            margin: 10px auto; /* Abstand um das Formular */
            padding: 20px;
            background: #fff; /* Weißer Hintergrund */
            border-radius: 8px; /* Abgerundete Ecken */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Schatten für Tiefe */
        }

        input {
            text-align: center;
            padding: 10px;
            margin: 10px 0; /* Vertikaler Abstand zwischen Eingabefeldern */
            width: 100%;
            max-width: 300px; /* Maximale Breite */
            border: 1px solid #ddd; /* Leichter Rand */
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #4CAF50; /* Grün bei Fokus */
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.4); /* Grüner Schein bei Fokus */
        }

        button {
            background-color: #4CAF50; /* Grün */
            color: white; /* Textfarbe */
            padding: 12px 20px; /* Innenabstand */
            font-size: 16px; /* Schriftgröße */
            font-weight: bold; /* Fettschrift */
            border: none; /* Kein Rahmen */
            border-radius: 5px; /* Abgerundete Ecken */
            cursor: pointer; /* Zeiger-Icon beim Hover */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Animationen */
            width: 100%;
            max-width: 300px; /* Gleiche Breite wie Eingabefeld */
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049; /* Etwas dunkleres Grün beim Hover */
            transform: scale(1.05); /* Leichtes Vergrößern */
        }

        button:active {
            background-color: #3e8e41; /* Noch dunkler beim Klicken */
            transform: scale(0.95); /* Leichtes Verkleinern */
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.2); /* Eindruck-Effekt */
        }

        button:focus {
            outline: 2px solid #80dfff; /* Fokus-Rahmen */
            outline-offset: 2px; /* Abstand des Fokus-Rahmens */
        }

        figure {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        img {
            max-width: 100%; /* Bild passt sich an die verfügbare Breite an */
            height: auto; /* Proportionen bleiben erhalten */
            border: 1px solid #ddd; /* Leichter Rand um das Bild */
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Schatten */
        }

        article {
            display: flex;
            flex-direction: column;
            align-items: center; /* Zentrierung */
            justify-content: center;
            min-height: 100vh; /* Füllt den ganzen Bildschirm */
            padding: 20px;
        }

    </style>
</head>
<body>
    <article>
        <?php
        if(isset($_POST['telNo'])){
            echo '<h1>Rufen Sie '.$_POST['telNo'].' an</h1>'; 
        }
        ?>
        <form method="POST">
            <div id="newForm">
                <?php
                    if(isset($_POST['telNo'])){
                        echo '<label for="telNo"><h2>oder generieren Sie einen neuen Qr-Code:</h2></label>';
                        echo '<input id="telNo" name="telNo" type="number" placeholder="'.$_POST['telNo'].'">'; 
                    }else{
                        echo '<label for="telNo"><h2>Generieren Sie einen neuen Qr-Code:</h2></label>';
                        echo '<input id="telNo" name="telNo" type="number" placeholder="+4312233444">';
                    }
                ?>
                
                <button type="submit">submit</button>
            </div>
        </form>
        <figure>
            <?php
            if(isset($_POST['telNo'])){
                echo '<img src="generate.php?telNo='.$_POST['telNo'].'" alt="'.$_POST['telNo'].'"/>';
            }
            ?>
        </figure>
    </article>
</body>
</html>