
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WebStudio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />
  <link rel="stylesheet" href="/css/styles.css" />
</head>

<!----------------------------------header-------------------------------------->
<?php
require "blocks/header.php";
?>
<?php
 require "connection.php";

/*--------------------------------------------------- 1 --------------------------------------------------------------*/

$result = $conn->query("SELECT DISTINCT adresse, code_postal, ville, service.nom FROM point_de_vente
JOIN service_point_de_vente spdv on point_de_vente.id = spdv.point_de_vente_id
JOIN service on spdv.service_id = service.id
WHERE service.nom LIKE '%gaz%' LIMIT 5;");
$lines = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <table class='m-auto table table-striped'>
    <p class='mb-2'>#1 Service vente de gaz</p>
    <thead class=''>
    <tr class='bg-warning'>
      <td class='px-5'>CP</td>
      <td class='px-5'>Ville</td>
      <td class='px-5'>Adresse</td>
      <td class='px-5'>Service</td>
    </tr>
    </thead>
    <tbody class=''>
    <?php foreach ($lines as $line): ?>
    <tr class=''>
      <td class='px-5'><?php echo $line['code_postal']; ?></td>
      <td class='px-5'><?php echo $line['ville']; ?></td>
      <td class='px-5'><?php echo $line['adresse']; ?></td>
      <td class='px-5'><?php echo $line['nom']; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!------------------------------------------------------- 2 ----------------------------------------------------------->
<?php
$result = $conn->query("SELECT * FROM point_de_vente WHERE automate_24_24 = true AND ville = 'ANNECY';");
$lines = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <p class='mt-5 mb-2'>#2 Service automate 24/24</p>
  <table class='m-auto table table-striped'>
    <thead class=''>
    <tr class='bg-success'>
      <td class='px-5'>CP</td>
      <td class='px-5'>Ville</td>
      <td class='px-5'>Adresse</td>
    </tr>
    </thead>
    <tbody class=''>
    <?php foreach ($lines as $line): ?>
<tr class=''>
  <td class='px-5'><?php echo $line['code_postal']; ?></td>
  <td class='px-5'><?php echo $line['ville']; ?></td>
  <td class='px-5'><?php echo $line['adresse']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<!------------------------------------------------------- 3 ----------------------------------------------------------->

<?php
$query = "SELECT count(*) as nombre FROM point_de_vente WHERE (code_postal  LIKE '29%' OR code_postal LIKE '23%' OR code_postal LIKE '69%');";
$result = request($conn, $query);
?>

<div class='container mt-5 row'>
  <p class='mb-2'>#3 Le nombre de stations dans le département 29, 23 et 69</p>
  <table class="table table-dark table-striped col-12">
    <tbody>
    <tr>
       <td class='px-5'><?php echo ($result[0]['nombre']);?></td>
    </tr>
    </tbody>
  </table>
</div>

<!------------------------------------------------------ 4 ------------------------------------------------------------>
<?php
$query = "SELECT CAST(avg(valeur) AS numeric(10,3)) FROM  prix
JOIN carburant c on c.id = prix.carburant_id
WHERE  date > '2006-12-31 0:00:00' AND date <= '2007-12-31 23:59:59' AND c.nom = 'Gazole';";
$result1 = request($conn, $query);

$query = "SELECT CAST(avg(valeur) AS numeric(10,3)) FROM  prix
JOIN carburant c on c.id = prix.carburant_id
WHERE  date > '2013-12-31 0:00:00' AND date <= '2014-12-31 23:59:59' AND c.nom = 'Gazole';";
$result2 = request($conn, $query);

$query = "SELECT CAST(avg(valeur) AS numeric(10,3)) FROM  prix
JOIN carburant c on c.id = prix.carburant_id
WHERE  date > '2022-12-31 0:00:00' AND date <= '2023-12-31 23:59:59' AND c.nom = 'Gazole';";
$result3 = request($conn, $query);
?>
<div class='container mt-5'>
  <p class='mb-2'>#4 Prix moyenne du Gazole en France:</p>
<table class="table">
  <thead>
  <tr>
    <th scope="col">Année</th>
    <th scope="col">2007</th>
    <th scope="col">2014</th>
    <th scope="col">2023</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row">Prix</th>
    <td><?php echo ($result1[0]["avg"]);?></td>
    <td><?php echo ($result2[0]["avg"]);?></td>
    <td><?php echo ($result3[0]["avg"]);?></td>
  </tr>
  </tbody>
</table>
</div>
<!------------------------------------------------------ 5 ------------------------------------------------------------>
<?php
$query = "SELECT LEFT(code_postal, 2) AS departement, CAST(avg(valeur) AS numeric(10,3)) AS prix_moyenne FROM point_de_vente
JOIN prix ON point_de_vente.id = prix.point_de_vente_id
JOIN carburant ON prix.carburant_id = carburant.id
WHERE carburant.nom = 'Gazole'
GROUP BY departement
ORDER BY departement;";
$results = request($conn, $query);
?>
<div class='container'>
  <p class='mt-5 mb-2'>#5 Prix moyenne du Gazole par département:</p>
<table class="table table-info">
  <thead>
  <tr>
    <th scope="col">Departement</th>
    <th scope="col">Prix moyenne</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($results as $result): ?>
  <tr>
    <td><?php echo $result['departement'] ; ?></td>
    <td><?php echo $result['prix_moyenne'] ." €"; ?></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>

<!------------------------------------------------------ 6 ------------------------------------------------------------>


<!--------------------------------------------------------------------------------------------------------------------->

<?php
if(isset($_GET['url']) && $_GET['url'] == "portfolio" ){
    include "./blocks/portfolio.php";
} else {
    include "./blocks/studio.php";
}
?>


<!----------------------------------footer-------------------------------------->
<?php
require "blocks/footer.php"
?>
<!----------------------------------modal window-------------------------->
<?php
require "blocks/modal_window.php"
?>
<script src="./js/modal.js"></script>
<script src="./js/mobile-menu.js"></script>
</body>
</html>
