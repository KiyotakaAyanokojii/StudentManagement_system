<?php
    include "config.php";
    $name=$_POST["name"];
    $pname=$_POST["pname"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $school=$_POST["school"];
    $class=$_POST["class"];
    $section=$_POST["section"];
    $sql="INSERT INTO users (SNAME,PNAME,GENDER,DOB,SCHOOL,CLASS,SECTION) VALUES ('{$name}','{$pname}','{$gender}','{$dob}','{$school}','{$class}','{$section}')";
    $con->query($sql);
    $id=$con->insert_id;
    echo "<td>{$name}</td>";
    echo "<td>{$pname}</td>";
    echo "<td>{$gender}</td>";
    echo "<td>{$dob}</td>";
    echo "<td>{$school}</td>";
    echo "<td>{$class}</td>";
    echo "<td>{$section}</td>";
    echo"<td> <button type='button' class='btn btn-sm btn-info edit' data-id='{$id}'><i class='fa fa-edit'></i></td>";
    echo"<td><button type='button' class='btn btn-sm btn-danger del' data-id='{$id}'><i class='fa fa-trash'></i></td>";
 ?>