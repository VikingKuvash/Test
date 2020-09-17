<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Test</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="one_query.php">1 запрос</a></li>
                    <li><a href="two_query.php">2 запрос</a></li>
                    <li><a href="theree_query.php">3 запрос</a></li>
                  </ul>
                </div>
              </div>
          </nav>
        </header>

        <div class="container-fluid">
            <?php include 'conn.php'; ?>
            <?php include 'api.php'; ?>
            <?php
                    $names = getCity ($db);
             ?>
             <table class="table table-bordered">
                 <tr>
                     <th>Город</th>
                     <th>Передача денег большее кол-во раз</th>
                 </tr>
                 <?php foreach ($names as $name) { ?>
                    <tr>
                        <td><?php echo $name['name']; ?></td>
                        <td><?php echo $name['fullname'];?>
                    </tr>
                <?php } ?>
                 
             </table>
        </div>

        <footer>

        </footer>
    </body>
</html>



