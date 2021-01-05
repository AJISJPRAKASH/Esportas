<?php
                                // database connection code
                                $con = mysqli_connect('localhost:8081', 'root', '','sports');



                                // get the post records
                                $name = $_POST['name'];
                                $etime = $_POST['etime']
                                if (empty($name)|| empty($etime)){
                                    ;
                                }
                                else{

                                // database insert SQL code
                                $sql="INSERT INTO `adminevent`(`name`, `etime`) VALUES ('$name','$etime')";



                                // insert in database 
                                $rs = mysqli_query($con, $sql);

                                if($rs)
                                {
                                    echo "Events Added";
                                }
                            }
                                ?>