<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $query ="INSERT INTO `books`(`book_id`, `book_name`, `author_id`, `cat_id`, `book_no`, `book_price`)  VALUES ('$_POST[book_id]','$_POST[book_name]','$_POST[author_id]','$_POST[cat_id]','$_POST[book_no]','$_POST[book_price]')";
    $query_run=mysqli_query($connection,$query);
   
?>
<script type="text/javascript">
    alert("Book added successfully....")
    window.location.href="manage_book.php"
</script>
