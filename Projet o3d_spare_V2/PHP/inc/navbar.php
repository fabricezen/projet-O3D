<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">O3D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'accueil' ? 'active' : '' ?>"  href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'eleves' ? 'active' : '' ?>" href="eleves.php">Eleves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'classes' ? 'active' : '' ?>" href="classes.php">Classes</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
  <!-- <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul> -->
        <input class="form-control me-2 text-center" type="search" placeholder="choix"
     
         aria-label="Search">
        <button class="btn btn-outline-success dropdown" 
    
        type="button">Search</button>
      
      </form>
    </div>
  </div>
</nav>