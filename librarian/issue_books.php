<?php
session_start();
include './header.php';
include './connection.php';

?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                <table>
                                    <tr>
                                        
                                        <td>
                                            <select name="enrollment" class="form-control selectpicker">
                                               
                                                <?php
                                                
                                                $res = mysqli_query($conn, "select enrollment from student_registration");
                                                while ($row = mysqli_fetch_array($res)) {
                                                    
                                                    echo "<option>";
                                                    echo $row["enrollment"];
                                                    echo "</option>";
                                                    
                                                    
                                                    
                                                }
                                                echo mysqli_error($conn);
    

                                                
                                                ?>
                                                
                                               
                                                
                                            </select>
                                        </td>
                                        
                                        
                                        <td>
                                    <input type="submit" value="Search" name="submit1" class="form-control btn btn-default" style="margin-top: 5px;margin-left: 5px">    
                                        </td>
                                        
                                    </tr>
                                    
                                    
                                    
                                </table>
                                
                                
                                
                                <?php
                                
                                if(isset($_POST["submit1"])){
                                    
                                    if(isset($_POST["submit1"])){
                                            
                                            $res5 = mysqli_query($conn, "select * from student_registration where enrollment= '$_POST[enrollment]'");
                                            while($row5=mysqli_fetch_array($res5))
                                            {
                                                $firstname = $row5["firstname"];
                                                $lastname = $row5["lastname"];
                                                $username= $row5["username"];
                                                $email = $row5["email"];
                                                $contact = $row5["contact"];
                                                $sem = $row5["sem"];
                                                $enrollment = $row5["enrollment"];
                                                $_SESSION["enrollment"]=$enrollment;
                                                $_SESSION["username"] = $username;
                                                
                                             
                                            }
                                             
                                            
                                            
                                        }
                                    
                                    ?>
                                        
                                        <table class="table table-bordered">
                                    <tr>
                                        <td>
                                    <input type="text" class="form-control" name="enrollment"
                                           value="<?php echo $enrollment; ?>" placeholder="Enrollment No" disabled/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="studentname" 
                                           value="<?php echo $firstname." ".$lastname; ?>" placeholder="Student Name" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control"
                                          value="<?php echo $sem; ?>" name="studentsem" placeholder="Student Sem" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="studentcontact"
                                           value="<?php echo $contact; ?>"placeholder="Student Contact" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="studentemail"
                                           value="<?php echo $email; ?>" placeholder="Student E-mail" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <td>
                                            
                                            <select name="bookname" class="form-control selectpicker">
                                                <?php
                                                $res = mysqli_query($conn, "select books_name from add_books");
                                                        
                                                        while($row=mysqli_fetch_array($res))
                                                {
                                                   
                                                echo "<option>";
                                               
                                           
                                            echo $row["books_name"];
                                                    
                                                echo "</option>";    
                                                }
                                                
                                                ?>
                                             </select>
                                        </td>
                                        
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" 
                                           value="<?php echo date("d-M-Y"); ?>" name="booksissuedate" placeholder="Book's Issue Date" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control"
                                          value="<?php echo $username; ?>" name="studentsusername" placeholder="Student's User Name" disabled/>
                                        </td>
                                        </tr> 
                                        
                                        <tr>
                                        <td>
                                    <input type="submit" class="form-control btn btn-default" name="submit2" value="İssue Books" require="" style="background-color: #ADB2B5 ;color:brown; font-size: 15px;"/>
                                        </td>
                                        </tr>
                                        
                                        </table>
                                    
                                     
                                
                                        <?php
                                        
                                        
                                
                                        
                                        
                                        
                                        
                                                }
                                
                                
                                
                                
                              ?>
                                
                                   
                               </form> 
                                
                                <?php
                                
                                if(isset($_POST["submit2"])){
                                    
                                    if(mysqli_query($conn,"insert into `issue_books` (`id`,`student_enrollment`,`student_name`,`student_sem`,`student_contact`,`student_email`,`books_name`,`books_issue_date`,`books_return_date`,`student_username`) values('0','$_SESSION[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[bookname]','$_POST[booksissuedate]','0','$_SESSION[username]')"))
                                    {}
                                    else{
               echo mysqli_error($conn);
                                       
                                    }
                                    
                                    mysqli_query($conn,"update add_books set available_qty=available_qty-1 where books_name = '$_POST[bookname]' ");
                                    
                                    
                                    ?>
                                
                                <script type="text/javascript">
                                window.alert("issued successfully"); 
                                
                                </script>
                                
                                
                                
                                <?php
                                    
                                    
                                    
                                    
                                }
                                
                                
                                
                                
                                
                                ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php

include './footer.php';
?>

       