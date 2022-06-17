<?php
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: powderblue">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Sporty Marine</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-modellen">Modellen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="boattype">Boottypes</a>
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
                </ul>
            </div>
        </div>
    </nav>
</body>
