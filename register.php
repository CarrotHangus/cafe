<?php
	session_start();
	include("connect.php");
    $conn;
	mysqli_select_db($conn, "cafe");

    if (isset($_POST['register'])){
		
		$NAMA= $_POST['NAMA'];
		$PONSEL=$_POST['PONSEL'];
        $ALAMAT=$_POST['ALAMAT'];
        $USERNAME=$_POST['USERNAME'];
        $PASS=$_POST['PASS'];
   
		$sql = "INSERT INTO customer(NAMA, PONSEL, ALAMAT, USERNAME, PASS) VALUES('$NAMA', '$PONSEL', '$ALAMAT', '$USERNAME', '$PASS')";

		$query_run = mysqli_query($conn, $sql);

		if($query_run){
			echo "<script> alert('Successfully Registered! Thank You.Please Login');
            window.location= 'login.php'</script>";
		}
		else {
			echo "SQL ERROR";
		}
    }

	else{
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Registration Form</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        ml,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            border-radius: 10px;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center" background="bg.jpg">
    <main class="bg-light form-signin">
        
            <h1 class="h3 mb-3 fw-normal">Pendaftaran Member</h1>
            <form action="register.php" method="POST" name="register">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="nama" name="NAMA" placeholder="nama lengkap">
                <label for="nama">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-2">
                <input type="number" class="form-control" id="ponsel" name="PONSEL" placeholder="nomor ponsel">
                <label for="ponsel">Nomor Ponsel</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="username" name="USERNAME" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="password" name="PASS" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="alamat" name="ALAMAT" placeholder="alamat">
                <label for="alamat">Alamat</label>
            </div>
            <button id="submisi" class="w-100 btn btn-lg btn-primary" type="submit" name="register">Daftar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
            </form>
        
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CUSTOM JAVASCRIPT SECTION  -->
    <!--script>
        $('#submisi').click(event=>{
            // alert('tes')
            const nama = $('#nama').val();
            const ponsel = $('#ponsel').val();
            const alamat = $('#alamat').val();
            const username = $('#username').val();
            const password = $('#password').val();
            
            $.ajax({
                url:'api/register.php',
                type:'post',
                cache:false,
                data:{
                    'SEC' : 'DAFTAR',
                    'NAMA' : nama,
                    'PONSEL' : ponsel,
                    'ALAMAT' : alamat,
                    'USERNAME' : username,
                    'PASSWORD' : password
                },
                success:(result)=>{
                    console.log(result)

                    const hasil = JSON.parse(result);
                    alert(hasil.MESSAGE);
                    
                    if(hasil.STATUS == "SUCCESS"){
                        $('#nama').val("");
                        $('#ponsel').val("");
                        $('#alamat').val("");
                        $('#username').val("");
                        $('#password').val("");
                    }
                },
                error:err=>{
                    console.log(err)
                }
            })
        })
    </script-->
</body>

</html>