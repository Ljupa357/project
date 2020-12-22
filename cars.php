<?php 

include_once 'header.php';
include_once 'includes/database.php'


?>
  <link rel="stylesheet" href="stil.css">

<body>

<section class="index-banner">
         <div class="vertical-centar">
         <h2>CAROPOLIS</h2>
      
        </div>
     </section>

<section class="cars-form">

<form action="includes/cars.inc.php" method="POST" >
<input type="text" name="ime" placeholder="CarName" >
<br>
<input type="text" name="model" placeholder="CarModel" >
<br>
<input type="text" name="godina" placeholder="CarYear" >
<br>
<input type="text" name="cena" placeholder="CarPrice" >
<br>
<button type="submit" name="submit">Insert into database</button>


</form>

</section>

     <table>

    <tr>
        <th>Name</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price</th>
    </tr>
    </table>
   


<table>
<?php
    
    $sql = "SELECT * FROM kola;";
    $resultat = mysqli_query($conn, $sql); 
    $resultatProverka = mysqli_num_rows($resultat);
    if ($resultatProverka > 0) {
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo "
            <tr>
            <td>".$row["kolaime"]."</td>
            <td>".$row["kolamodel"]."</td>
            <td>".$row["kolagodina"]."</td>
            <td>".$row["kolacena"]."</td>
            </tr>

            " ;
        }
    }
    ?>
</table>



</body>







