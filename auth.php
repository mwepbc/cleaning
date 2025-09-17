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
                <a href="reg.php">
                    <button class="minorButton">
                        REGISTRATION
                    </button>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <form action="" method="POST">
            <h2>AUTHORIZATION</h2>
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

            <button type="submit" class="accentButton">SUBMIT</button>
        </form>

        <div id="bannerReg">
            <img src="assets/img/clean2.png" alt="cleanBanner">
            <img src="assets/img/clean3.png" alt="cleanBanner2" class="above">
        </div>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>
</html>