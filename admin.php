<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <?php include('assets/includes/header.php'); ?>
    <main class="ordersMain">
        <h2>ADMIN PANEL</h2>

        <!-- pupupupup -->
        <div class="ordersList">
            <div class="order">
                <h4>ФИО, Адрес, контактные данные</h4>
                <h5>Дата, время</h5>
                <p>Вид услуги и оплата</p>
                <form>
                    <select name="statusSelect">
                        <option value="inWork" selected>В РАБОТЕ</option>
                        <option value="done">ЗАВЕРШЕНО</option>
                        <option value="closed" selected>ОТМЕНЕНО</option>
                    </select>
                </form>
            </div>
        </div>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>