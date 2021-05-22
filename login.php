<div id="container-user-akses">
    <div>
        <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
        
            <?php 

                $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                if($notif == true){
                    echo "<div class='notif'>Email dan Password Tidak Sesuai</div>";
                }
            
            ?>

            <div class="element-form">
                <label for="">Email</label>
                <span><input type="text" name="email"></span>
            </div>

            <div class="element-form">
                <label for="">Password</label>
                <span><input type="password" name="password"></span>
            </div>

            <div>
                <span><input type="submit" value="login"></span>
            </div>
            
        </form>
    </div>
</div>