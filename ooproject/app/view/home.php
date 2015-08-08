<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($students as $student) {  ?>
                           <tr>
                               <td><?php echo $student['id']; ?></td>
                               <td><?php echo $student['name']; ?></td>
                               <td><?php echo $student['address']; ?></td>
                           </tr>

                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>