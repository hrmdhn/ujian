<?php
$str = 'JF9fRkRnQ25ONm53S3hWQmhLSTVJcDQ9JF9fU3BPRHd2WGxiMURtQjlpeHk0bGo7===';
//echo base64_decode('JF9fRkRnQ25ONm53S3hWQmhLSTVJcDQ9JF9fU3BPRHd2WGxiMURtQjlpeHk0bGo7');


?>


<?php /*
$compressed   = gzdeflate('$__FF5FZNjE0nvlY9zrCVQM');
$uncompressed = gzinflate('$__FF5FZNjE0nvlY9zrCVQM');
echo $compressed;
echo $uncompressed;*/
?>


<?php
$code = 'ZWNobyAnPGI+IEhhaSwgU2F5YSBhZGFsYWggc2NyaXB0IFBIUCwgc2lsYWthbiBlbmNvZGUgYXRhdSBkZWNvZGUgc2F5YTxicj48L2I+JzsNCmVjaG8gJzxiPiB1c2VyIGFnZW50IG11IGFkYWxhaCAnIC4kX1NFUlZFUlsnSFRUUF9VU0VSX0FHRU5UJ10uICc8Yj4nOw==';

// $code = 'hasil_encode_tadi';
//jangan lupa gunakan ; di akhirannya
eval(base64_decode($code));

?>