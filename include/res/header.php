<div class="sec1 sec_box"><img src="./img/logo.png" alt=""></div>
<div class="sec2 sec_box">
    <div class="menu_block">
        <?php 
        $file = basename($_SERVER['PHP_SELF']);
        //echo basename($_SERVER['PHP_SELF']);  
        //echo explode(".",basename(__FILE__))[0];  // header
        ?>
        <div class="menu_li <?php if($file == 'home.php' && $_GET['p'] == 'first'){echo 'active';} ?>"><a href="home.php?p=first">HOME</a></div>
        <div class="menu_li <?php if($file == 'home.php' && $_GET['p'] == 'sec'){echo 'active';} ?>"><a href="home.php?p=sec">HOME2</a></div>
        <div class="menu_li <?=($file=='for_sales.php')?'active':'';?>"><a href="for_sales.php">FOR SALE</a></div>
        <div class="menu_li <?=($file=='repairs.php')?'active':'';?>"><a href="repairs.php">REPAIRS</a></div>
        <div class="menu_li <?php if($file == 'about.php'){echo 'active';} ?>"><a href="about.php">ABOUT</a></div>
        <div class="menu_li <?php if($file == 'contact.php'){echo 'active';} ?>"><a href="contact.php">CONTACT</a></div>
    </div>
</div>