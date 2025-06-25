<?php
// Datos (puedes incluirlos desde otro archivo si quieres)
$datos = [
  ["nombre" => "Abigail", "chiste" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!"],
  ["nombre" => "Sherley", "chiste" => "¿Por qué los pájaros no usan WhatsApp? Porque ya tienen Twitter."],
  ["nombre" => "Ulises", "chiste" => "¿Qué le dijo un pez a otro pez? ¡Nada!"],
  ["nombre" => "Aldair", "chiste" => "¿Por qué el libro de matemáticas está triste? Porque tiene muchos problemas."],
  ["nombre" => "Sebastián", "chiste" => "¿Qué hace una computadora cuando tiene frío? ¡Pone Windows!"],
  ["nombre" => "Evelin", "chiste" => "¿Por qué las plantas no usan Facebook? Porque ya tienen muchas raíces sociales."]
];
?>
<!DOCTYPE html>
<html lang="es" class="light dark">
<head>
  <meta charset="UTF-8">
  <title>Chistes (render servidor)</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/transicion_completa.css">
  <script src="ungap/custom-elements.js"></script>
  <script src="js/registraServiceWorker.js"></script>
  <script type="module" src="js/configura.js"></script>
</head>
<body>

  <md-top-app-bar headline="headline">
    <h1>Chistes</h1>
  </md-top-app-bar>

  <nav-tab-fixed id="tab"></nav-tab-fixed>

  <main>
    <ul class="md-list">
      <?php foreach ($datos as $item): ?>
        <li class="md-two-line">
          <span class="headline"><?= htmlspecialchars($item['nombre']) ?></span>
          <span class="supporting"><?= htmlspecialchars($item['chiste']) ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>

  <nav-drw></nav-drw>

</body>
</html>
