<!DOCTYPE html>
<html>
<head>
    <title>Résultats du Quiz PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        table {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        th {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        .correct {
            background-color: #4CAF50;
        }

        .incorrect {
            background-color: #FF5733;
        }
    </style>
</head>
<body>
    <h1>Résultats du Quiz PHP</h1>

    <?php
    // Tableau associatif avec les questions et les réponses correctes
    $questions = array(
        "q1" => array(
            "1. Quel acronyme signifie PHP ?",
            "Hypertext Preprocessor"
        ),
        "q2" => array(
            "2. Quel est le signe de concaténation en PHP ?",
            "."
        ),
        "q3" => array(
            "3. Quelle fonction PHP est utilisée pour afficher du texte à l'écran ?",
            "echo"
        ),
    )
    ?>
    <table border='1'>
        <thead>
            <tr>
                <th>Question</th>
                <th>Réponse</th>
            </tr>
        </thead>
        <tbody>
            <!-- Afficher les resulta -->
            <?php 
            foreach ($_POST as $key=>$value){
                $class = "incorrect";
                if($questions[$key][1] == $value)
                    $class = "correct";
                echo "<tr class='".$class."'>";
                echo "<td>".$questions[$key][0]."</td>";
                echo "<td>".$value."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="./index.php">Page d'accueil</a>
</body>
</html>
