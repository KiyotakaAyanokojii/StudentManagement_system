<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1925dcbb88.js" crossorigin="anonymous"></script>
    <title>Student</title>
</head>

<body>
    <div class="col-md9">
        <h4><i class="fa fa-address-card"></i>Students Details</h4>
        <hr>
        <div class="col-md-6">
            <form id="frm" action="" method="POST">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Student Name" >
                </div>
                <div class="form-group">
                    <label class="control-label">Parent's Name</label>
                    <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Parent's Name" >
                </div>
                <div class="form-group">
                    <label class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-control" >
                        <option value="" selected></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Dob</label>
                    <input type="date" name="dob" id="dob" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="control-label">School</label>
                    <input type="text" name="school" id="school" class="form-control" placeholder="Enter Student School Name" >
                </div>
                <div class="form-group">
                    <label class="control-label">Class</label>
                    <select name="class" id="class" class="form-control" >
                        <option value="VI" selected>VI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Section</label>
                    <select name="section" id="section" class="form-control" >
                        <option value="" selected></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="0">
                    <input type="submit" class="btn btn-success" id="save" class="form-control" value="submit">
                </div>
                <div class="form-group">
                    <label for="Import" class="control-label">Upload Data</label>
                    <input type="file" name="import" class="form-control">
                    <br>
                    <input type="button" class="btn btn-success" value="Upload">
                </div>
            </form>
        </div>
        <hr>
    </div>
    <div class="col-md-12" id="output">
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#output").load("view.php");
            $("#save").click(function() {
                var id = $("#id").val();
                if(id == 0) {
                    $.ajax({
                        url: "insert.php",
                        type: "post",
                        data: $("#frm").serialize(),
                        success: function(d) {
                            $("<tr></tr>".html(d).appendTo(".table"));
                            $("#frm")[0].reset();
                            $("#id").val("0");
                        }
                    });
                }
                else{
                    $.ajax({
                        url: "update.php",
                        type: "post",
                        data: $("#frm").serialize(),
                        success: function(d) {
                            $("#frm")[0].reset();
                            $("#id").val("0");
                        }
                    });   
                }

            });

            $(document).on("click", ".del", function() {
                var del = $(this);
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "delete.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function() {
                        del.closest("tr").hide();
                    }
                });
            });

            // Update

            $(document).on("click", ".edit", function() {
                var row = $(this);
                var id = $(this).attr("data-id");
                $("#id").val(id);
                var name = row.closest("tr").find("td:eq(0)").text;
                $("#name").val(name);
                var name = row.closest("tr").find("td:eq(2)").text;
                $("#pname").val(pname);
            });

        });
    </script>
</body>

</html>