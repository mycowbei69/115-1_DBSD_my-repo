# SID:C113181144 <BR>
# Name:郭晉銘 <BR>
# EX02
<HR>
<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    print "|" . $i;
    $total += $i;
}
echo "<HR>";
echo "總和: " . $total;