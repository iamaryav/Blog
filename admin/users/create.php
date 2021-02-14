<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font awesome -->
    <script
      src="https://kit.fontawesome.com/466dbfad4c.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google fonts -->

    <link
      href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Style -->

    <link rel="stylesheet" href="../../assets/css/style.css" />

    <!-- Custom Style -->

    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <title>Admin Section - Add User</title>
  </head>
  <body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- Admin Page Wrapper -->

    <div class="admin-wrapper">
      <!-- Left sidebar -->

      <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
      <!-- // Left sidebar -->

      <!-- Admin Content -->

      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add Users</a>
          <a href="index.php" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
          <h2 class="page-title">Add User</h2>

          <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <form action="create.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" />
              </div>
              <div>
                <label>email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input" />
              </div>
              <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" />
              </div>
              <div>
                <label>Password Conformation</label>
                <input type="password" name="passwordconf" value="<?php echo $passwordconf; ?>" class="text-input" />
              </div>
              <div>
                <?php if(isset($admin) && $admin == 1): ?>
                <label>
                  <input type="checkbox" name="admin" checked>
                  Admin
                </label>
                <?php else: ?>
                <label>
                  <input type="checkbox" name="admin">
                  Admin
                </label>
                <?php endif; ?>
              </div>

            <div>
              <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
            </div>

          </form>
        </div>
      </div>

      <!-- //Admin Content -->
    </div>

    <!-- //Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- CK editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
  </body>
</html>
