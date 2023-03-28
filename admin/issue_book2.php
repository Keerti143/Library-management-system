<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $query ="INSERT INTO `issued_books`(`s_no`, `book_id`, `book_name`, `book_author`, `student_id`, `status`, `issued_date`,`due_date`) VALUES ('$_POST[s_no]','$_POST[book_id]','$_POST[book_name]','$_POST[book_author]','$_POST[student_id]','$_POST[status]','$_POST[issued_date]','$_POST[due_date]')";
    $query_run=mysqli_query($connection,$query);
   
?>
<script type="text/javascript">
    alert("Books Issued successfully....")
    window.location.href="view_issued_book.php"
</script>