<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="index.php" class="nav-link px-2 link-dark">Shop</a></li>
        <li><a href="order/cart.php" class="nav-link px-2 link-dark">Cart</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
     
        <?php
    if(isset($_SESSION["login_name"])) {
      echo "<strong> $_SESSION[login_name] </strong>";
          if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 0) {
            echo "<a type='button' class='btn btn-outline-primary me-2' href='admin.php'>admin</a>";
          }
      
      echo "<a type='button' class='btn btn-outline-primary me-2' href='logout.php'>Logout</a>";
        
    }
    else{
        
        echo "<a type='button' class='btn btn-outline-primary me-2' href='login/login.php'>Login</a>";
        echo "<a type='button' class='btn btn-primary' href='adduser/add.php'>Sign-up</a>";
        
    }
    ?>
    </header>