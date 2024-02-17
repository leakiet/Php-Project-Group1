<?php
$shopName = "ABC Phone Shop";
$website = "https://www.abcphoneshop.com";
$fanpage = "https://www.facebook.com/abcphoneshop";
$hotline = "0912345678";

// History
$yearEstablished = 2015;
$founder = "John Doe";
$initialGoal = "To provide genuine and affordable phones to Vietnamese people";

// Team
$numberOfEmployees = 20;
$employeeDescription = "Enthusiastic, professional, knowledgeable about phones";


$mission = "To provide customers with the best shopping experience with high-quality products and professional customer service";
$vision = "To become the leading phone retailer in Vietnam";


$coreValues = array(
    "Prestige",
    "Quality",
    "Competitive price",
    "Dedicated customer service",
);


$currentPromotion = "10% off all Samsung products";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo $shopName; ?></title>
    <link rel="stylesheet" href="./about-us.css">
</head>


<body>
    <?php include('../Header/header.php'); ?>
    <header>
        <h1><?php echo $shopName; ?></h1>
    </header>

    <main>
        <section id="about">
            <h3>About Us</h3>
            <p>
                Welcome to <?php echo $shopName; ?>! We are a store specializing in providing genuine, prestigious mobile phones with competitive prices.
            </p>
            <p>
                Established in <?php echo $yearEstablished; ?> by <?php echo $founder; ?>, <?php echo $shopName; ?> initially aimed to <?php echo $initialGoal; ?>.
            </p>
            <p>
                After operating for over <?php echo date("Y") - $yearEstablished; ?> years, <?php echo $shopName; ?> has become one of the most prestigious phone stores in Vietnam with a team of <?php echo $numberOfEmployees; ?> <?php echo $employeeDescription; ?> employees.
            </p>
        </section>

        <section id="mission-vision">
            <h3>Mission and Vision</h3>
            <p>
                **Mission:** <?php echo $mission; ?>
            </p>
            <p>
                **Vision:** <?php echo $vision; ?>
            </p>
        </section>

        <section id="core-values">
            <h3>Core Values</h3>
            <ul>
                <?php foreach ($coreValues as $value) { ?>
                    <li><?php echo $value; ?></li>
                <?php } ?>
            </ul>
        </section>

        <section id="promotion">
            <h3>Current Promotion</h3>
            <p>
                <?php echo $currentPromotion; ?>
            </p>
        </section>

        <section id="contact">
            <h3>Contact Us</h3>
            <p>
                Website: <a href="<?php echo $website; ?>"><?php echo $website; ?></a>
            </p>
            <p>
                Fanpage: <a href="<?php echo $fanpage; ?>"><?php echo $fanpage; ?></a>
            </p>
            <p>
                Hotline: <?php echo $hotline; ?>
            </p>
        </section>
    </main>

</body>

</html>