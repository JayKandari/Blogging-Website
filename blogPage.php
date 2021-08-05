<?php 
    include "dbLogic.php";
?> 
<?php require_once('partials\header.php') ?>


    <title>BlogIt | Blog</title>
</head>
<body>

    <!-- Navbar -->
    <?php include('partials\navbar.php')?>

    <div class = "blog-container">
        <?php foreach($query as $q) { ?>
            <div class="">
                <h1 id = "heading"><?php echo $q['title']; ?></h1>
            </div>

            <p class='blog-content'><?php echo $q['content']; ?></p>

            <div class='action-btns'>
                <a href="editBlog.php?id=<?php echo $q['id']?>" >Edit</a>
                <form method = "POST">
                    <input type='text' hidden name = "id" value = "<?php echo $q['id']; ?>">
                    <button name = "delete" id='delete-post-btn'>Delete</button>
                </form>
            </div>

        <?php } ?>
    </div>

</body>
</html>