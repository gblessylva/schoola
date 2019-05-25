<?php
include_once('admin-header.php');

?><?php
   
    $sql = 'SELECT * FROM `quiz`'; 
    $total = 0;
    $sqls = mysqli_query( $con, $sql);
    if ( $sqls ) {
        $total = mysqli_num_rows($sqls);
    };

    
    
?>
<div class="container">
    <div id="main-wrapper">
        <div class="card">
            <p>Total Registerd students</p>
            <?php
                $student = 'SELECT * FROM `user`'; 
           $totalStudents = 0;
           $students = mysqli_query( $con, $student);
           if ( $students) {
               $totalStudents = mysqli_num_rows($students);
           };
            echo $totalStudents;
            ?>    
        </div>

        <div class="card">
            <span><p>Total Subjects</p></span>
            
            <span><?php
            echo $total;
            ?></span>
        </div>
        <div class="card">
            <p>Top Student</p>
           <?php
            $query  =  'SELECT * FROM `rank` ORDER BY `rank`.`score`  DESC';
            $result=mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
             echo $row[0];
           ?>
        </div>
        <div class="card">
            <p>Highest Scores</p>
            <?php
            $query  =  'SELECT * FROM `rank` ORDER BY `rank`.`score`  DESC';
            $result=mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            echo $row[1];
           ?>
        </div>
        <div class="card">
            <p>Messages</p>
        </div>
        <div class="card">
        <a href="dash.php?q=0">View Questions</a>
        </div>
        <div class="card">
        <a href="dash.php?q=4">Add Question</a>
        </div>
        <div class="card">
        <a href="dash.php?q=1">Students</a>
        </div>

    </div>



</div>

</body>
</html>
