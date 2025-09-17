<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoyNeSam</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assets/img/logo.png" alt="logo">
                <b>MOY NE SAM</b>
            </div>

            <div class="buttons">
                <a href="auth.php">
                    <button class="minorButton">
                        LOG IN
                    </button>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div id="banner">
            <h2>
                PROFESSIONAL RESIDENTIAL AND COMMERCIAL CLEANING SERVICES
            </h2>
        </div>

        <form action="" method="POST">
            <h2>REGISTRATION</h2>
            <div>
                <label for="login">LOGIN</label>
                <input type="text" name="login" required>
                <p class="error"></p>
            </div>
            <div>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="SNP">SNP</label>
                <input type="text" name="SNP" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="phone">PHONE</label>
                <input type="tel" name="phone" required>
                <p class="error"></p>
            </div>

            <div>
                <label for="email">EMAIL</label>
                <input type="email" name="email" required>
                <p class="error"></p>
            </div>

            <button type="submit" class="accentButton">ЗАРЕГИСТРОВАТЬСЯ</button>
        </form>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>
</html>