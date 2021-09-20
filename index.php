<?php require 'config.php'; ?>
<?php require_once "header.php";
?>

<body>
    <center>
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Olke</th>
            <th scope="col">Paytaxt</th>
            <th scope="col">Pul vahidi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $select = mysqli_query($connect, "SELECT * FROM `author`");

            while($row = mysqli_fetch_assoc($select)){
        ?>  
        

            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['country'] ?></td>
                <td><?= $row['capital'] ?></td>
                <td><?= $row['Money'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Update et |</a>
                    <a class="delete" href="delete.php?id=<?= $row['id'] ?>">Sil</a>
                </td>
            </tr>

        <?php } ?>

        </tbody>
    </table>
    </center>













<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>