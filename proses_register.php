<?php 

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $level = "customer";
    $status = "on";
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];
    $password = ($_POST['password']);
    $re_password = $_POST['re_password'];

    // digunakan untuk menghilangkan tampilan password di tampilan url
    unset($_POST['password']);
    unset($_POST['re_password']);

    // digunakan agar data pada form tidak hilang pada saat user tidak lengkap mengisi data registrasi
    $dataForm = http_build_query($_POST);

    // digunakan untuk mengecek data email pada database
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

    // digunakan untuk mengecek field yang terdapat pada form registrasi
    if(empty($nama_lengkap) || empty($email) || empty($phone) || empty($alamat) || empty($password)){
        header("location:".BASE_URL."index.php?page=register&notif=require&$dataForm");
    
        // Validasi password apakah password sama atau tidak 
    }elseif($password != $re_password){
        
        // header digunakan untuk mengarahkan file ke lokasi yang dituju
        header("location:".BASE_URL."index.php?page=register&notif=password&$dataForm");
        
        // digunakan untuk mengecek data email pada database, apabila datanya sudah ada, maka akan mengembalikan 1 dan dikembalikan ke halaman register
    }elseif(mysqli_num_rows($query) == 1){
        header("location:".BASE_URL."index.php?page=register&notif=email&$dataForm");
    }else{
        // untuk enkripsi password
        $password = md5($password);

    //Koneksi ke tabel user, untuk menyimpan data yang telah diinputkan
        mysqli_query($koneksi, "INSERT INTO user(level, nama, email, alamat, phone, password, status)
                VALUES('$level', '$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')");
        
        // digunakan untuk kembali ke halaman login setelah selesai registreasi
        header("location:".BASE_URL."index.php?page=login");

    }
?>