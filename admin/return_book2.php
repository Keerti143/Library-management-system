
<?php
    $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"keety");
        $query ="DELETE FROM issued_books WHERE s_no ='$_POST[s_no]'";
        $query_run=mysqli_query($connection,$query);
        

?>
<script type="text/javascript">
    alert("Book Returned successfully....")
    window.location.href="view_issued_book.php"
</script>