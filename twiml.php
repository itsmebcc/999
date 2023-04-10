<?php
header('Content-Type: text/xml');

$caller_number = $_POST['caller_number'];
$transfer_number = $_POST['transfer_number'];
?>

<Response>
    <Dial callerId="<?php echo $caller_number; ?>">
        <Number><?php echo $transfer_number; ?></Number>
    </Dial>
</Response>
