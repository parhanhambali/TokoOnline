<div id="container-user-akses">
    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap"></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email"></span>
        </div>
        <div class="element-form">
            <label for="">Nomor Telepon / Handphone</label>
            <span><input type="text" name="phone"></span>
        </div>
        <div class="element-form">
            <label for="">Alamat</label>
            <span><textarea name="alamat"></textarea></span>
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