<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR-Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-content: center;
            text-align: center;
        }
        h1{
            font-weight: bold;
        }
        h2{
            font-weight: bold;
        }
        #newForm{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;  
            width: 100%;
            margin: 5px;

        }
        input{
            text-align:center;
        }
        figure{
            display: flex;
            justify-content: center;
        }
        button{
            border-radius: 8px;
            shadow: none;
            margin: 5px;
        }
        article{
            display: flex;
            flex-direction:column;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <article>
        <?php
        if(isset($_GET['telNo'])){
            echo '<h1>Rufen Sie +'.$_GET['telNo'].' an</h1>'; 
        }
        ?>
        <form method="GET">
            <div id="newForm">
                <label for="telNo"><h2>oder generieren Sie einen neuen Qr-Code:</h2></label>
                <?php
                    if(isset($_GET['telNo'])){
                        echo '<input id="telNo" name="telNo" type="tel" placeholder="'.$_GET['telNo'].'">'; 
                    }else{
                        echo '<input id="telNo" name="telNo" type="tel" placeholder="4312233444">';
                    }
                ?>
                
                <button type="submit">submit</button>
            </div>
        </form>
        <figure>
            <?php
            if(isset($_GET['telNo'])){
                echo '<img src="generate.php?telNo='.$_GET['telNo'].'" alt="+'.$_GET['telNo'].'"/>';
            }
            ?>
        </figure>
    </article>
</body>
</html>