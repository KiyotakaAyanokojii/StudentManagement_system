<?php
    include "config.php";
    $sql="update users set name='{$_POST["name"]}',pname='{$_POST["pname"]}',gender='{$_POST["gender"]}',dob='{$_POST["dob"]}',school='{$_POST["school"]}',class='{$_POST["class"]}',section='{$_POST["section"]}' where id=".$_POST["id"];
    $con->query($sql);
?>