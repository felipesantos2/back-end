   
<?php
    if(@$_SESSION['msg']) :
?>
    
   <div class="alert alert-warning alert-dismissible fade show mb-2" role="alert">
        <p> <strong>Hey!</strong><?php echo $_SESSION['msg'] ?></p>
    </div>

<?php 
    unset($_SESSION['msg']);
    endif;
 ?>