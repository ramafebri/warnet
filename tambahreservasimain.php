
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">
        body{ font: 14px sans-serif;
            font-family: Arial, Helvetica, sans-serif; 
            background-image: url("img/overlay.png"),url("img/background2.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-left: 660px;
            margin-top: 120px;



        }
        .wrapper{ width: 400px; padding: 20px;
            background-color: white; 
            border: 3px solid #f1f1f1;
            border-radius: 30px;

        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 30px;

        </style>
    </head>
    <body>

        <div class="wrapper">
            <h2 >Reservasi Main Pelanggan</h2>
            <p>Please fill this form to add new reservasi.</p>
            <form action=" action/aksitambahreservasi.php" method="post">
                <div class="form-group ">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Waktu</label>
                    <input type="text" name="waktu" class="form-control" value="">
                    <span class="help-block"></span>
                </div>  
                     
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>AN</p>
            </form>
        </div>    
    </body>
    </html>