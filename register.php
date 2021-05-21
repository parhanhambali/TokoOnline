<div id="container-user-akses">
    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
    
    
    <?php 

        // digunakan untuk menampilkan data pada form registrasi
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
        $email = isset($_GET['email']) ? $_GET['email'] : false;
        $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
        $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
        
        // digunakan untuk menampilkan pernyataan bahwa pada form register telah diisi atau belum
        if($notif == "require"){
            echo "<div class='notif'>Lengkapi Data Registrasi Terlebih Dahulu</div>";
        }elseif($notif == "password"){
            echo "<div class='notif'>Password yang Di Masukan Salah</div>";
        }
    ?>


        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email; ?>"></span>
        </div>
        <div class="element-form">
            <label for="">Nomor Telepon / Handphone</label>
            <span><input type="text" name="phone" value="<?php echo $phone; ?>"></span>
        </div>
        <div class="element-form">
            <label for="">Alamat</label>
            <span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
        </div>
        <div class="element-form">
            <label for="">Password</label>
            <span><input type="password" name="password"></span>
        </div>
        <div class="element-form">
            <label for="">Re-type Password</label>
            <span><input type="password" name="re_password"></span>
        </div>
        <div class="element-form">
            <span><input type="submit" value="register"></span>
        </div>
    </form>
</div>