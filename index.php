
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
$result = $conn->query("SELECT DISTINCT adresse, code_postal, ville, service.nom FROM point_de_vente
JOIN service_point_de_vente spdv on point_de_vente.id = spdv.point_de_vente_id
JOIN service on spdv.service_id = service.id
WHERE service.nom LIKE '%gaz%' LIMIT 10;");
$lines = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <table class='m-auto table table-striped'>
    <thead class=''>
    <tr class='bg-success'>
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
