<!DOCTYPE html>
<html>

<head>
    <title>Checkin Form | International Workshop</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css" type="text/css">
    <link href="static/css/sweetalert2.css" rel="stylesheet">
</head>
<!------ Include the above in your HEAD tag ---------->

<body style="background-image: url('./static/img/bg.png') !important;">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="static/img/logo.png" id="icon" alt="User Icon">
            </div>
            <!-- Login Form -->
            <form action="input-aksi.php" method="post" id="forms">
                <input type="number" name="nim" class="fadeIn second" id="nim" placeholder="NIM / NIDN" required="">
                <input type="text" name="nama" class="fadeIn second" id="nama" placeholder="Nama Lengkap (akan tertulis di sertifikat)" required="">
                <input type="email" name="email" class="fadeIn third" id="email" placeholder="Email" required="">
                <br>
                <label class="fadeIn fourth" for="submit">Nama akan tertera di Sertifikat dan dikirim melalui email</label>
                <input type="submit" class="fadeIn fourth" value="Submit" name="submit" id="btns">
            </form>
        </div>
    </div>

    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/main.js"></script>
    <script src="static/js/sweetalert2.all.min.js"></script>

    <!-- <script>
        $("#btns").on("click", function(e) {
            e.preventDefault();
            var nim = $("#nim").val();
            var nama = $("#nama").val();
            if (nim == "" || nim == null){
                return false;
            }

            // 
            Swal.fire({
                title: 'Are you sure?',
                text: 'nim: ' + nim,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'

            }).then(function(result) {
                if (result.value == true) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Halo, ' + result.value,
                    text: 'Selamat datang di International Workshop Data Science!',
                    timer: 4000
                }).then(function(result){
                    $('#forms').submit();
                });
                }
            })
        })
    </script> -->
    <script>
        $('#btns').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById("#forms").submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                    
                }
            })
        });
    </script>


</body>

</html>