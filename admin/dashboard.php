<?php include("../path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/posts.php");
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

    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- Custom Style -->

    <link rel="stylesheet" href="../assets/css/admin.css" />
    <title>Admin Section - Dashboard</title>
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

        <div class="content">

          <h2 class="page-title">Dashboard</h2>

          <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

          
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
    <script src="../assets/js/scripts.js"></script>
  </body>
</html>
