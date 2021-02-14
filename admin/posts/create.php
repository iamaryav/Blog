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
    <title>Admin Section - Add Posts</title>
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

          <h2 class="page-title">Add Posts</h2>

          <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

          <form action="create.php" method="post" enctype="multipart/form-data">
            <div>
              <label> Title</label>
              <input type="text" name="title" value="<?php echo $title; ?>" class="text-input" />
            </div>
            <div>
              <label> Body</label>
              <textarea name="body" id="body"><?php echo $body; ?></textarea>
            </div>
            <div>
              <label>Image</label>
              <input type="file" name="image" class="text-input" />
            </div>
            <div>
              <label>Topic</label>
              <select name="topic_id" class="text-input">
                <option value=""></option>
              <?php foreach($topics as $key => $topic): ?>

              <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>

                <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
              
              <?php else: ?>
                
                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>

              <?php endif; ?>
                
              <?php endforeach; ?>
                
              </select>
            </div>
            <div>
                
              <?php if(empty($published)): ?>
                <label>
                  <input type="checkbox" name="published">
                  Publish
                </label>
              <?php else: ?>
                <label>
                  <input type="checkbox" name="published" checked>
                  Publish
                </label>
              <?php endif; ?>
            </div>
            <div>
              <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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
