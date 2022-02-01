<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-user"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            $currentUrl = $_SERVER['PHP_SELF']
            ?>

            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <?=
                    $activeIndex = (stripos($currentUrl, 'index') && empty($_GET['action'])) ? 'active' : '';
                    $class = $activeIndex ? 'active' : '';
                    ?>
                    <li  class="nav-item <?= $class; ?>">
                        <a class="nav-link" aria-current="page" href="index.php">
                            <i class="fas fa-users"></i>Users
                            <?php
                                if ($activeIndex) { ?>
                                    <span class="sr-only">(current)</span>
                            <?php
                                 }
                            ?>
                        </a>
                    </li>

                    <?php 
                    $activeIndex = (!empty($_GET['action']) && $_GET['action'] === 'insert');
                    $class = $activeIndex ? 'active' : ''; 
                    ?>
                    <li  class="nav-item <?=  $class ?>">
                        <a class="nav-link" href="index.php?action=insert">
                            <i class="fas fa-user-plus"></i>New User
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>