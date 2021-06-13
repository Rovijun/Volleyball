<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Players</title>
</head>

<body class="container">
    <h1 class="text-center">Liste des players</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Age</th>
                <th scope="col">Team</th>
                <th scope="col"></th>
                <th scope="col">Options</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player) : ?>
            <tr>
                <td><?= $player->id ?></td>
                <td><?= $player->name ?></td>
                <td><?= $player->age ?></td>
                <td><?= $player->team ?></td>
                <form method="get">
                    <td><a href="/players/<?=$player->id?>" type="button" class="btn btn-secondary">See</a></td>
                    <td><a href="/players/<?=$player->id?>/edit" type="button" class="btn btn-success">Modify</a></td>
                    <td><a href="/players/<?=$player->id?>/delete" type="button" class="btn btn-danger">Delete</a></td>
                </form>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

        <a href="players/create" type="button" class="btn btn-primary">Add Player</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
