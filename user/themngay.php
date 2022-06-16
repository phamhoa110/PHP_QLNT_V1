<?php 
    $days=5;
    $date = date('Y-m-j');
    $newdate = strtotime ( '+'.$days.' day' , strtotime ( $date ) ) ;
    $newdate = date ( 'Y-m-j' , $newdate );
    echo $newdate;
    echo '<br>';
    echo $days;
// // echo '<script>alert("Mượn sách thành công")</script>';
//         echo '<script>alert("Mượn sách thành công \nBạn có thể xem phiếu mượn")</script>';
?>