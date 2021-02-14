<?php include("../../path.php"); ?>
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

    <link rel="stylesheet" href="../../assets/css/style.css" />

    <!-- Custom Style -->

    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <title>Admin Section - Manage Posts</title>
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
          <a href="create.php" class="btn btn-big">Add post</a>
          <a href="index.php" class="btn btn-big">Manage post</a>
        </div>

        <div class="content">
          <h2 class="page-title">Manage Posts</h2>

          <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

          <table>
            <thead>
              <th>sn</th>
              <th>Title</th>
              <th>Author</th>
              <th colspan="3">Action</th>
            </thead>
            <tbody>

              <?php foreach($posts as $key => $post): ?>
                <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $post['title']; ?></td>
                  <td>Aryav</td>
                  <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                  <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                  <?php if($post['published']): ?>
                  <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                  <?php else: ?>
                  <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                  <?php endif; ?>

                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
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
