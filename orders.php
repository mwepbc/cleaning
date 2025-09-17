<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoyNeSam</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <?php include('assets/includes/header.php'); ?>
    <main class="ordersMain">
        <span class="title">
            <h2>ORDERS HISTORY</h2>
            <a href="createOrder.php">
                <button class="accentButton" type="none" form="">
                    CREATE ORDER
                </button>
            </a>
        </span>

        <div class="ordersList">
            <div class="order">
                <h4>Адрес, контактные данные</h4>
                <h5>Дата, время</h5>
                <p>Вид услуги и оплата</p>
                <h3>СТАТУС</h3>
            </div>
            <div class="order">
                <h4>Адрес, контактные данные</h4>
                <h5>Дата, время</h5>
                <p>Вид услуги и оплата</p>
                <h3>СТАТУС</h3>
            </div>
        </div>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>