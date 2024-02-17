<!DOCTYPE html>
<html>
<head>
    <title>Quiz PHP</title>
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

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 18px;
            color: #333;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <h1>Quiz PHP</h1>
    <!-- 
        Method : Get / Post

        http://192.168.68.107/proejtPHP/
     -->
    <form method="get" action="./quiz_resultsv2.php">
        <p>1. Quel acronyme signifie PHP ?</p>
        <input type="radio" name="q1" value="Personal Home Page"> a) Personal Home Page<br>
        <input type="radio" name="q1" value="Private Hypertext Processor"> b) Private Hypertext Processor<br>
        <input type="radio" name="q1" value="Hypertext Preprocessor"> c) PHP: Hypertext Preprocessor<br>

        <p>2. Quel est le signe de concaténation en PHP ?</p>
        <input type="radio" name="q2" value="&"> a) &<br>
        <input type="radio" name="q2" value="+"> b) +<br>
        <input type="radio" name="q2" value="."> c) .<br>

        <p>3. Quelle fonction PHP est utilisée pour afficher du texte à l'écran ?</p>
        <input type="radio" name="q3" value="echo"> a) echo <br>
        <input type="radio" name="q3" value="print()"> b) print()<br>
        <input type="radio" name="q3" value="display()"> c) display()<br>

        <br>
        <input type="submit" value="Soumettre">
        <button type="submit">
            Envoyer
        </button>
    </form>
    <a href="./IdentificationPHP/index.php">Code IdentificationPHP</a>
    <a href="./Produit/index.html">Code Produit</a>
</body>
</html>
