<?php
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: powderblue">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Sporty-marine</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link aria-current=page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="boats">Modellen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">Over ons</a>
                    </li>
            <!-- Show when the user logs in... -->
            <?php if (isset($_SESSION['loggedin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-models">Add models</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="boattype">Add boottypes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-contact">View contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </nav>
</body>
