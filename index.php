<?php  require_once("./process.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <div class="card mt-5">
      <div class="card-body">
          <form action="index.php" method="GET">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="check-parking" id="check-parking" <?= $filter_parking ? 'checked' : '' ?>>
                  <label class="form-check-label" for="check-parking">
                      Con parcheggio
                  </label>
              </div>
              <div class="mb-3">
                  <label for="filter-vote" class="form-label">Voto</label>
                  <input type="number" name="filter-vote" class="form-control" id="filter-vote" min="1" max="5" <?= $filter_vote ? 'selected' : '' ?>>
              </div>
              <button class="btn btn-primary mx-2">submit</button>
          </form>
      </div>
  </div>
<table class="table table-dark table-hover mt-5">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $hotel): ?>
    <tr>
      <td><?= $hotel['name']?></td>
      <td><?= $hotel['description']?></td>
      <td><?= $hotel['parking']?'si':'no'?></td>
      <td><?= $hotel['vote']?></td>
      <td><?= $hotel['distance_to_center']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>