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
    <main>  
        <form action="" method="POST">
            <span class="title">
                <h2>PLACE AN ORDER</h2>
                <a href="orders.php">
                    <button class="accentButton" type="none" form="">
                        BACK
                    </button>
                </a>
            </span>
            
            <div>
                <label for="address">ADDRESS</label>
                <input type="text" name="address" required>
                <p class="error"></p>
            </div>
            <div>
                <label for="contact">CONTACT</label>
                <input type="text" name="contact" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="date">DATE</label>
                <input type="date" name="date" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="time">TIME</label>
                <input type="time" name="time" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="service">SERVICE</label>
                <select name="service">
                    <option value="main" selected>Общая</option>
                    <option value="general" >Генеральная</option>
                    <option value="afterConstr">Послестроительная</option>
                    <option value="chymical">Химчистка ковров и мебели</option>
                </select>
                <p class="error"></p>
            </div>

            <div>
                <label for="payment">PAYMENT</label>
                <select name="payment">
                    <option value="card" selected>Банковская карта</option>
                    <option value="cash">Наличные</option>
                </select>
                <p class="error"></p>
            </div>

            <button type="submit" class="accentButton">SUBMIT THE ORDER</button>
        </form>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>