<script>
    var numero = 123;
</script>
<?php 
    $numero = 123;
?>

<script>
    var nom = "Maroc";
    nom = "Fès";
</script>
<?php 
    $nom = "Maroc";
    $nom = "Fès";
?>

<script>
    var num1 = 5 ;
    var num2 = 10;
    var resulta = num1 + num2;
    resulta = num1 - num2;
    resulta = num1 * num2;
    resulta = num1 / num2;
</script>
<?php
    $num1 = 5 ;
    $num2 = 10;
    $resulta = $num1 + $num2;
    $resulta = $num1 - $num2;
    $resulta = $num1 * $num2;
    $resulta = $num1 / $num2;
?>

<script>
    var text1 = "Salut";
    var text2 = " Tout le monde";
    var resulta = text1 + text2;
</script>
<?php
    $text1 = "Salut";
    $text2 = " Tout le monde";
    $resulta = $text1 . $text2;
?>

<?php
    $va = 12;
    if($va == 12){
        echo "Valeur correct";
    }
?>

<script>
    var list = [1,2,"Text",false];
</script>
<?php
    $list = array(1,2,"Text",false);
?>

<script>
    var list2 = [[1,2],[3,4]];
</script>
<?php
    $list2 = array(array(1,2),array(3,4));
?>

<script>
    // Objet JSON
    var objJson ={
        "nom":"ABC",
        "ville" : "Fès",
        "Age" : 15
    }
</script>
<?php
    // Tableau assosiatif
    $objJson = array(
        "nom"=>"ABC",
        "ville" => "Fès",
        "Age" => 15
    );
?>

<script>
    var a = list[2];
</script>
<?php
    $a = $list[2];
?>

<script>
    var b = objJson["nom"];
</script>
<?php
    $b = $objJson["nom"];
?>

<script>
    // [nomList].pop() : dernier celulle;
    // [nomList].shift() : premier celule;
    // [nomList].splice() : Index ;
</script>
<?php
    unset($list2[0]);
?>

<script>
    // [nomList].push() :dernier celulle
    // [nomList].unshift() : premier cellue
</script>
<?php
    array_push($list,5);
    array_unshift($list,"ABC");
?>

<script>
    var nbrCellul =list.length;
</script>
<?php 
    $nbrCellul = count($list);
?>

<script>
    for( var i = 0 ; i < nbrCellul ; i++){
        console.log(i);
    }
</script>
<?php
    for($i = 0 ; $i < $nbrCellul ; $i++){
        echo $i;
    }
?>