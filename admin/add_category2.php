<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $query ="INSERT INTO `category`(`cat_id`, `cat_name`)  VALUES ('$_POST[cat_id]','$_POST[cat_name]')";
    $query_run=mysqli_query($connection,$query);
   
?>
<script type="text/javascript">
    alert("category added successfully....")
    window.location.href="manage_cat.php"
</script>