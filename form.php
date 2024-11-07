
<?php session_start(); ?>


<html>
    <head>
    <title>Lucky 7 Game</title>
    </head>

<body>
    <h1>Welcome To Lucky 7 Game</h1>
    <p>Place Your bet (Rs 10): 
        <form method='post'>
            <button type="submit" name="action" value="below7"> Below 7 </button>
            <button type="submit" name="action" value="seven">  7 </button>
            <button type="submit" name="action" value="above7"> Above 7 </button>
            <button type="submit" name="action" value="play"> Continue Play </button>
            <button type="submit" name="action" value="reset"> Reset and Play Again </button>
        </form>
</body>

<?php 
if(isset($dice1) && isset($dice1)){ ?>
<h4>Game Results</h4>
<p>Dice 1: <?php echo $dice1; ?> <br>Dice2 2: <?php echo $dice2; ?> <br> Total <?php echo $sum; ?>  </p>
<p><?php echo $_SESSION['message']; ?><p>

<?php }?>

</html>
