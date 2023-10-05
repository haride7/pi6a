<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>TESTE</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 text-center" style="margin-top:150px">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data['user'] as $user) { ?>
                  <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </body>
</html>