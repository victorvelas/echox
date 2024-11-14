<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base rendering</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation-float.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="base-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Name</th>
                    <th>Favorite food</th>
                    <th>Age</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->viewData['list'] as $key => $item) { ?>
                    <tr>
                        <td><?= ($key + 1); ?></td>
                        <td><?= ($item->name ?? ''); ?></td>
                        <td><?= ($item->favoriteFood ?? ''); ?></td>
                        <td><?= ($item->age ?? ''); ?></td>
                        <td><?= ($item->country ?? ''); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>