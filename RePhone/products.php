<?php
include'connect.php';
if(@$_POST['iphone6']){
   $stmt = $dbh->prepare('INSERT INTO cart (users_id_int, item) VALUES (1,iphone6)');
    $Cart = $stmt->execute();


}
?>





<!DOCTYPE html>
<html>
<head><title>RePhone</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="thing1"> <!-- this div is turned off in css, it makes a box over the header-->
    <div id="container">
        <ul class="menu">
            <li class="round2"><a href="index.html" class="links">HOME</a> </li>
            <li><a href="products.php" class="links">PRODUCTS</a></li>
            <li><a href="about.html" class="links">ABOUT</a></li>
            <li><a href="contact.html" class="links">CONTACT</a></li>
            <li><a href="faq.html" class="links">FAQ</a></li>
            <li class="round1"><a href="cart.html" class="links">CART</a></li>


        </ul>

    </div>
</div>
<div id="container2">
    <h1>Products</h1>
    <table id="tabledude">
        <tr>
            <td><img src="http://iosetc.com/wp-content/uploads/2015/07/IMG_3034_iphone6_spacegrey_portrait.png" height="250" width="250" id="1">
                  <form method="post" name="iphone6" >
                      <h4>$350 <br><button name="add1" type="submit">Add to Cart</button></h4></td>
            </form>


            <td><img src="http://www.hometechmtl.com/wp-content/uploads/2015/03/galaxy-s6-white.png" height="250" width="250" id="6">
                    <h4>$375<br><button name="add2">Add to Cart</button></h4></td>
            <td><img src="http://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/droid-turbo-2-topic.png?itok=7WJcUHS2" height="250" width="250" id="2">
                    <h4>$275<br><button name="add3">Add to Cart</button></h4></td>
        </tr>
        <tr>
            <td><img src="https://fs01.androidpit.info/devices/x41/741-320x320.png" height="250" width="250" id="3">
                    <h4>$275<br><button name="add4">Add to Cart</button></h4></td>
            <td><img src="http://cdn2.knowyourmobile.com/sites/knowyourmobilecom/files/styles/gallery_wide/public/Array/oneplus2.png?itok=VV5ZDqWk" height="250" width="250" id="4">
                    <h4>$200<br><button name="add5">Add to Cart</button></h4></td>
            <td><img src="http://www.htc.com/managed-assets/shared/desktop/smartphones/htc-one-mini/features/htc-one-mini-silver-en-f01-01.png" height="250" width="250" id="5">
                 <h4>$300<br><button name="add6">Add to Cart</button></h4></td>
        </tr>
        <tr>
            <td><img src="http://www.gatortec.com/wp-content/uploads/2013/10/ipad-mini-retina.png" height="200" width="200" id="7">
                  <h4>$350<br><button>Add to Cart</button></h4></td>
            <td><img src="https://www.businessspectator.com.au/sites/default/files/styles/full_width/public/Tab%20S.png?itok=nO_xSw-I" width="200" height="200" id="8">
                    <h4>$375<br><button>Add to Cart</button></h4></td>
            <td><img src="http://3.bp.blogspot.com/-89lwy2M12nY/VJ62YoS16gI/AAAAAAAAzZo/M4xnDLHmFvE/s1600/n9.png" height="200" width="200" id="9">
                    <h4>$350<br><button>Add to Cart</button></h4></td>
        </tr>
    </table>

</div>

</body>
</html>