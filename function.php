<?php
session_start();
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 100;
}

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
$sum = $dice1 + $dice2;


if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if($action === 'reset'){
        $_SESSION['balance'] = 100;
        $_SESSION['message'] = "Game reset! Starting balance is 100.";
    }
    else{
    $_SESSION['balance'] -= 10;

    if ($action === 'above7') {
        if ($sum > 7) {
            $_SESSION['balance'] += 20;
            $_SESSION['message'] = "Congratulation! You won! Your Balance total:" .$_SESSION['balance']."(Above 7)";
        } else {
            $_SESSION['message'] = "You lost! Your Balance total:" . $_SESSION['balance'] ."(Not above 7)";
        }
    } elseif ($action === 'below7') {
        if ($sum < 7) {
            $_SESSION['balance'] += 20;
            $_SESSION['message'] = "Congratulation! You won! Your Balance total:". $_SESSION['balance'] ."(Below 7)";
        } else {
            $_SESSION['message'] = "You lost! Your Balance total:" . $_SESSION['balance'] ."(Not below 7)";
        }
    } elseif ($action === 'seven') {
        if ($sum == 7) {
            $_SESSION['balance'] += 30;
            $_SESSION['message'] = "Congratulation! You won! Your Balance total:" . $_SESSION['balance'] ."(Exactly 7)";
        } else {
            $_SESSION['message'] = "You lost! Your Balance total:". $_SESSION['balance']." (Not 7)";
        }
    }
} 
}
$balance = $_SESSION['balance'];
$message = $_SESSION['message'] ?? '';
?>


