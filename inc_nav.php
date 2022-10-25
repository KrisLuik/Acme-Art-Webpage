<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Acme Art Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Painting Collection</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="all-paintings.php">All Paintings</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paintings by Artist</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="august-renoir.php">August Renoir</a></li>
                                <li><a class="dropdown-item" href="michelangelo.php">Michelangelo</a></li>
                                <li><a class="dropdown-item" href="vincent-van-gogh.php">Vincent Van Gogh</a></li>
                                <li><a class="dropdown-item" href="leonardo-da-vinci.php">Leonardo da Vinci</a></li>
                                <li><a class="dropdown-item" href="claude-monet.php">Claude Monet</a></li>
                                <li><a class="dropdown-item" href="pablo-picasso.php">Pablo Picasso</a></li>
                                <li><a class="dropdown-item" href="salvador-dali.php">Salvador Dali</a></li>
                                <li><a class="dropdown-item" href="paul-cezanne.php">Paul Cezanne</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paintings by Style</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="impressionism.php">Impressionism</a></li>
                                <li><a class="dropdown-item" href="mannerism.php">Mannerism</a></li>
                                <li><a class="dropdown-item" href="still-life.php">Still-life</a></li>
                                <li><a class="dropdown-item" href="portrait.php">Portrait</a></li>
                                <li><a class="dropdown-item" href="realism.php">Realism</a></li>
                                <li><a class="dropdown-item" href="cubism.php">Cubism</a></li>
                                <li><a class="dropdown-item" href="surrealism.php">Surrealism</a></li>
                            </ul>
                        </li>
                    <!---
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paintings by Name</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li><a class="dropdown-item" href="#">At the Lapin Agile</a></li>
                                <li><a class="dropdown-item" href="#">Bal du moulin de la Galette</a></li>
                                <li><a class="dropdown-item" href="#">Cafe Terrace at Night</a></li>
                                <li><a class="dropdown-item" href="#">Doni Tondo (Doni Madonna)</a></li>
                                <li><a class="dropdown-item" href="#">Houses of Parliament</a></li>
                                <li><a class="dropdown-item" href="#">Jaz de Bouffan</a></li>
                                <li><a class="dropdown-item" href="#">Mona Lisa</a></li>
                                <li><a class="dropdown-item" href="#">Nature morte au compotier</a></li>
                                <li><a class="dropdown-item" href="#">Sunrise</a></li>
                                <li><a class="dropdown-item" href="#">The Hallucinogenic Toreador</a></li>
                                <li><a class="dropdown-item" href="#">The Persistence of Memory</a></li>
                                <li><a class="dropdown-item" href="#">The Kingfisher</a></li>
                                <li><a class="dropdown-item" href="#">The Potato Eaters</a></li>
                                <li><a class="dropdown-item" href="#">Vase with Twelve Sunflowers</a></li>
                                <li><a class="dropdown-item" href="#">Vitruvian Man</a></li>
                                <li><a class="dropdown-item" href="#">Weaver</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Search Painting by name below</a>
                                    <form class="d-flex mt-3" role="search" action="search.php" method="GET">
                                        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </form>
                                    
                            </ul>
                        </li>
                            -->
                        <li class="nav-item">
                            <a class="nav-link" href="crud.php">Update Painting Database</a>
                        </li>
                    </ul>
                </div>
                <!--
                <form class="d-flex mt-3" role="search" action="search.php" method="post">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                -->
            </div>
        </div>
    </div>
</nav>