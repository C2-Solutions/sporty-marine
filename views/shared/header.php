<?php
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="public/css/mystylesheet.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../public/css/mystylesheet.css" rel="stylesheet">

    <title>Sporty-marine</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: powderblue">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Sporty-marine</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    if (!empty(IsAdmin())) :
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-modellen">Modellen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-contacts">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-dashboard">Ingelogd als: <?php echo $_SESSION['username']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="uitloggen">Uitloggen</a>
                    </li>
                        <?php
                    else :
                        ?>
                    <li class="nav-item">
                        <a class="nav-link aria-current=page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modellen">Modellen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="over-ons">Over ons</a>
                    </li>
                        <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
