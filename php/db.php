<?php
$server_name = "mysql:host=31.31.196.158;charset=utf8mb4";
$user_name = 'u1573258_user';
$password = 'tfv-s58-usN-5qX';

$pdo = new PDO($server_name, $user_name, $password);
// установка режима вывода ошибок
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function get_jobs()
{
	global $pdo;
	$sql = "SELECT * FROM u1573258_default.jobs";
	return $pdo->query($sql);
}

function get_employer() {
	global $pdo;
	$sql = "SELECT * FROM u1573258_default.employer";
	return $pdo->query($sql);
}
function get_employer_by_id($id)
{
	global $pdo;
	$sql = "SELECT * FROM u1573258_default.employer WHERE id=".$id;
	return $pdo->query($sql)->fetch();
}

function insert_job($sql){
	global $pdo;
	return $pdo->exec($sql);
}

function delete_job($sql){
	global $pdo;
	try {
		$pdo->exec($sql);
		return true;
	} catch (PDOException $e) {
		echo $e;
		return false;
	}
}

function get_monthly_salary($job)
{
	$pln = " PLN ";
	$usd = " USD ≈ ";
	$blr = " BLR ≈ ";
	$rub = " RUB ≈ ";
	$uah = " UAH ≈ ";
	$ratio =  [$pln => 1.0, $usd => 0.25, $blr => 0.65, $rub => 19.29,  $uah => 7.12];
	$min = $job['work_days_min'] * 4 * $job['hour_min'] * $job['hoverly_pay_min'];
	$max = $job['work_days_min'] * 4 * $job['hour_max'] * $job['hoverly_pay_max'];
	$res = [];

	foreach ($ratio as $key => $value) {
		if ($min === $max) {
			$res[$key] = $key . $min * $value;
			continue;
		}
		$res[$key] = $key . $min * $value . " - " . $max * $value;
	}
	return $res;
}

function get_salary()
{
	return ["qwer", "qwer"];
}

function get_hoverly_pay($job)
{
	if ($job['hoverly_pay_min'] === $job['hoverly_pay_max']) {
		return " " . $job['hoverly_pay_min'] . " PLN / час";
	}
	return " " . $job['hoverly_pay_min'] . " - " . $job['hoverly_pay_max'] . " PLN в час ";
}


function get_work_time($job)
{
	$min = $job['work_days_min'];
	$max = $job['work_days_max'];
	if ($min === $max) {
		return " " . $min . " Дней в неделю по " . $job['hour_min'] . "/" . $job['hour_max'] . " часов";
	}

	return " " . $min . "-" . $max . " Дней в неделю по " . $job['hour_min'] . "-" . $job['hour_max'] . " часов";
}

function get_price_home($job)
{
	if ($job['price_home']) {
		return "Жилье " . $job['price_home'] . "зл в месяц";
	}
	return "Жильё не предоставляется фирмой";
}

function get_str_hoverly_pay($job)
{
	return " " . $job['hoverly_pay_min'] . "/" . $job['hoverly_pay_max'];
}

function slider($job_image) {
	return explode(' ', $job_image);
}