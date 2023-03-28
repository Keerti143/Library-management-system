<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $query ="INSERT INTO `author`(`author_name`, `author_id`)  VALUES ('$_POST[author_name]','$_POST[author_id]')";
    $query_run=mysqli_query($connection,$query);
   
?>
<script type="text/javascript">
    alert("Author added successfully....")
    window.location.href="add_author.php"
</script>