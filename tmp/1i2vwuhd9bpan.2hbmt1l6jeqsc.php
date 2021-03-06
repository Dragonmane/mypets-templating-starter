<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>

    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User logged in as <?= $username ?> using <?= $password ?></p>
      
      <!--working with expressions-->
      <h3>Temperature</h3>
      <p>Fahrenheit: <?= $temp ?> degrees</p>
      <p>Celsios: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
      <p>Temp Total: <?= $temp + $temp2 ?> degrees</p>
      <p>The Color that I like is <?= $color ?></p>

        <!-- looping over arrays -->
        <h3>Bookmarks</h3>
        <p>My first bookmark is {{ @bookmarks[0] }</p>
        <ul>
            <?php foreach (($bookmars?:[]) as $bookmark): ?>
                <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', ' ', $bookmark); ?></a></li>
            <?php endforeach; ?>
        </ul>
        
        <!-- an associative array -->
        <h3>Adresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p>
        
        <h3>Dessert Options</h3>
        <form action="">
            <input type="checkbox" name="<?= $desserts ?>" value="<?= $chocolate ?>">Chocolate Mousse</br>
            <input type="checkbox" name="<?= $desserts ?>" value="<?= $vanilla ?>">Vanilla Custard</br>
            <input type="checkbox" name="<?= $desserts ?>" value="<?= $strawberry ?>">Strawberry Shortcake</br>
            
        </form>
        
        <?php foreach (($desserts?:[]) as $key=>$value): ?>
            <input type='checkbox' value='<?= $key ?>'/><?= $value ?></br>
        <?php endforeach; ?>
        
        <!-- conditional Content-->
        <h3>Message</h3>
        <?php if ($perferredCustomer): ?>
            <strong>Thank you for being a preferred customer!</strong>
        <?php endif; ?>
        
        <?php if ($lastLogin > strtotime('-1 month')): ?>
            Welcome back!
            <?php else: ?>Its been a while!
        <?php endif; ?>
        
        <!--printing objects-->
        <h3>My Pet</h3>
            <p><?= $myPet->getName() ?></p>
            <p><?= $myPet->getColor() ?></p>
      
 
        
    </body>
</html>