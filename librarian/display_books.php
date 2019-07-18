<?php

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
                                <h2>Display & Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form name="form1" action="" method="post">

                                    <input type="text" name="t1" class="form-control" placeholder="Enter Book's Name">
                                     <input type="submit" name="submit1" value="Search Books" class="btn btn-default">



                                </form>





                                <?php

                                if(isset($_POST["submit1"]))
                                {


                                $res = mysqli_query($conn, "select * from add_books where books_name like('$_POST[t1]') ");
                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>"; echo "Book's Name"; "<th/>";

                                        echo "<th>"; echo "Book's Author Name"; "<th/>";
                                        echo "<th>"; echo "Book's Publication Name"; "<th/>";
                                        echo "<th>"; echo "Purchase Date"; "<th/>";
                                        echo "<th>"; echo "Book's Price"; "<th/>";
                                        echo "<th>"; echo "Book's Quantity"; "<th/>";
                                        echo "<th>"; echo "Available Quantity"; "<th/>";
                                        echo "<th>"; echo "Librarian Username"; "<th/>";
                                        echo "<th>"; echo "Book's Image"; "<th/>";
                                        echo "</tr>";


                                        while($row=  mysqli_fetch_array($res)){
                                    echo "<tr>";
                                        echo "<td>"; echo $row["books_name"]; "<td/>";
                                        echo "<td>"; echo $row["books_author_name"]; "<td/>";
                                        echo "<td>"; echo $row["books_publication_name"]; "<td/>";
                                        echo "<td>"; echo $row["books_purchase_date"]; "<td/>";
                                        echo "<td>"; echo $row["books_price"]; "<td/>";
                                        echo "<td>"; echo $row["books_qty"]; "<td/>";
                                        echo "<td>"; echo $row["available_qty"]; "<td/>";
                                        echo "<td>"; echo $row["librarian_username"]; "<td/>";
                                        echo "<td>"; ?> <img src="<?php $row["books_image"]; echo  "<td/>";
                                        echo "</tr>";


                                        }
                                        echo "<table/>";

                                }
                                else{



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
