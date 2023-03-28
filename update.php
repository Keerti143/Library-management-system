<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $query ="UPDATE `users` SET `name`='$_POST[name]',`id`='$_POST[id]',`email`='$_POST[email]',`mobile`='$_POST[mobile]',`address`='$_POST[address]' WHERE `id`='$_POST[id]' ";
    $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("updated successfully....");
    window.location.href="user_dashboard.php"
</script>