<?php
if (!isset($_SESSION['USERID'])) {
    redirect(web_root . "admin/index.php");
}
?>
 <div class="logo pull-left">
              <a href="<?php echo web_root;?>"><img src="images/Logo/ShopLogo.png" width="30%" alt="" /></a>
            </div>