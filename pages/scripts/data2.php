<?php

header('Content-Type: application/json');
require_once './connect.php';
$sql = "SELECT co.Name as countryname, count(*) as num FROM user as u INNER JOIN userd_details as ud ON ud.id = u.id_user_details INNER JOIN city as c ON c.id = ud.idcity INNER JOIN countries as co ON co.id = c.idcountry GROUP BY c.Nazwa
ORDER BY u.userid";
//$sql = "SELECT co.Name as countryname, count(*) as 'num' FROM `user` as u INNER JOIN `city` as c ON u.idCity=c.id INNER JOIN countries as co ON c.idcountry= co.id GROUP BY `idcountry` ORDER BY c.id";
//$sql = "SELECT c.Nazwa as test, count(*) as 'num' FROM `city` as c INNER JOIN `user` as u ON c.id=u.idCity INNER JOIN countries as co ON c.idcountry = co.id GROUP BY `test` ORDER BY c.id";
$result = mysqli_query($conn,$sql);

$data = array();
foreach ($result as $row) {
	//$data[$row['countryname']] = $row['num'];
		$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
