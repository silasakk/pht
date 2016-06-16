<?php
include "wp-load.php";

$headers[] = 'From: phukethappinesstrip <phukethappinesstrip@gmail.com>';
$headers[] = 'Cc: <jeerakanphukethappiness@gmail.com>';
$headers[] = 'Cc: <silasak.lf@gmail.com>'; // note you can just use a simple email address

if($_POST['payment_status'] == 'Completed'){
        update_post_meta($_POST['item_number'],'payment_status','Complete');

        $html = '
        <h3>Thank You For Purchase Phukethappinesstrip</h3>
        This is your order id <h1>"'.$_POST['item_number'].'"</h1>
        ';

        wp_mail( get_field('email' , $_POST['item_number']), 'Phukethappinesstrip Order Complete', $html , $headers);
}else{
    update_post_meta($_POST['item_number'],'payment_status','Failed');
        $html = '
        <h3>Thank You For Purchase Phukethappinesstrip</h3>
        your order failed please try again
        ';

        wp_mail( get_field('email' , $_POST['item_number']), 'Phukethappinesstrip Order Failed', $html  ,$headers);

}

?>