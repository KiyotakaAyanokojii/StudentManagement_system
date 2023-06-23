<?php
    include "config.php"
?>
<div class="tb">
            <table class="table table-bordered">
                <tr>
                   
                    <th>Name</th>
                    <th>Parent's Name</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>School</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>
                <?php
                    $sql="select * from users";
                    $res=$con->query($sql);
                    if($res->num_rows>0){
                    
                        while($row=$res->fetch_assoc()){
                            
                            echo"<tr>";
                            
                            
                            echo"<td>{$row["SNAME"]}</td>";
                            echo"<td>{$row["PNAME"]}</td>";
                            echo"<td>{$row["GENDER"]}</td>";
                            echo"<td>{$row["DOB"]}</td>";
                            echo"<td>{$row["SCHOOL"]}</td>";
                            echo"<td>{$row["CLASS"]}</td>";
                            echo"<td>{$row["SECTION"]}</td>";
                            echo"<td> <button type='button' class='btn btn-sm btn-info edit' data-id='{$row["ID"]}'><i class='fa fa-edit'></i></td>";
                            echo"<td><button type='button' class='btn btn-sm btn-danger del' data-id='{$row["ID"]}'><i class='fa fa-trash'></i></td>";
                            echo"</tr>";
                        }
                    }
                ?>
            </table>