
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		function tinhtuoi($namSinh){
                $nam_nay = date('Y');
                $tuoi=$nam_nay -$namSinh;
                return $tuoi;
                }

        echo 'Tuổi của bạn là: ' . tinhtuoi(1997);
		?>
	</body>
</html>


