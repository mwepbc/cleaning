<header>
    <nav>
        <div class="logo">
            <img src="assets/img/logo.png" alt="logo">
            <b>MOY NE SAM</b>
        </div>

        <div class="buttons">
            <a href="auth.php">
                <button class="minorButton">
                    LOG OUT
                </button>
            </a>

            <a href="reg.php">
                <button class="minorButton">
                    REGISTRATION
                </button>
            </a>

            <a href="auth.php">
                <button class="minorButton">
                    LOG IN
                </button>
            </a>
        </div>
    </nav>
</header>

<script>
    // если на сайте есть кука с айди юзера, то кнопки регистрации и авторизации заменяются на кнопку выхода

    let buttons = document.querySelectorAll('.buttons a');

    if (hasCookie('user_id')) {
        console.log(document.cookie['user_id']);
    }

    function hasCookie(name) {
        return document.cookie.split(';').some(c => c.trim().startsWith(name + '='));
    }
</script>