<?php /** @var \Model\User $user */?>
<?php if(isset($error)):?>
    <?php echo $error?>

    <form method="post">
        Name: <input type="text" name="name"><br />
        Email: <input type="email" name="email"><br />
        <input type="submit" value="Save"><br />
    </form>
<?php else: ?>
    <h1><?php echo $user->getName()?></h1>
    <p>Email: <?php echo $user->getEmail()?></p>
<?php endif;?>