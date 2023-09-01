<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="post.php">
          <i class="fas fa-edit"></i>
          <span>Create Post</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">
          <i class="fas fa-user-plus"></i>
          <span>Add an Admin</span>
        </a>
      </li>
      <li class="nav-item">
        <form action="../functions/routes.php" method="get">
          <button class="nav-link btn btn-danger" type="submit" name="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span>
          </button>
        </form>
      </li>
</ul>