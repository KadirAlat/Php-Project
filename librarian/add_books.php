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
                                <h2>Add Books Info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                                
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                    <input type="text" class="form-control" name="bname" placeholder="Book's Name" required=""/>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p style="margin-bottom: 1px; margin: 5px; padding-top: 1px;"> Please Upload Image of the Book </p>
                                            <hr>
                                    <input type="file" name="images"  required=""/>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="bauthorname" placeholder="Book's Author Name" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="pname" placeholder="Publication Name" required=""/>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td>
                                    <input type="text" class="form-control" name="bpurchasedt" placeholder="Book's Purchase Date" required=""/>
                                        </td>
                                        </tr>    
                                        
                                        
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="bprice" placeholder="Book's Price" required=""/>
                                        </td>
                                        </tr>
                                        
                                         <tr>
                                        <td>
                                    <input type="text" class="form-control" name="bqty" placeholder="Book's Quantity" required=""/>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                    <input type="text" class="form-control" name="aqty" placeholder="Available Quantity" required=""/>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                    <input style="background-color: #ADB2B5 ;color:brown; font-size: 15px;" type="submit" class="btn btn-default submit" name="submit1" value="Instert Book's Details"/>
                                        </td>
                                        </tr>
                                        
                                    
                                    
                                    
                                </table>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        
        
        if(isset($_POST["submit1"]))
        {
            //$tm=  md5(time());
            //$fnm=$_FILES["f1"]['name'];
            //$dst="./books_image/".$tm.$fnm;
            //$dst1="books_image/".$tm.$fnm;
           
            
            if(empty($_FILES['images'])){
    echo zdsadadasdads;
}
else{
    echo "";
}
$image = $_FILES['images']['tmp_name']; 
            
            //move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
            if(mysqli_query($conn, "INSERT INTO `add_books`(id,books_name,`books_author_name`,`books_publication_name`,`books_purchase_date`,`books_price`,`books_qty`,`available_qty`,`librarian_username`,`books_image`) values('0','$_POST[bname]','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedt]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]','$_SESSION[librarian]','$image')")){
                echo "djksalşjdsaşdksaldsadsadadsadsadsada";
                
            }
            else{
               echo mysqli_error($conn);
               echo error_reporting(E_ALL);

            }
            
            
            ?>
        
        
        <script type="text/javascript">
        alert("Books inserted succesfully");
        
        </script>
        
        
        <?php
        
        }
        
        
        ?>
<?php

include './footer.php';
?>

       