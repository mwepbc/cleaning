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
        <div class="form">
            <h2>AUTHORIZATION</h2>
            <div>
                <label for="login">LOGIN</label>
                <input type="text" name="login" id="login">
            </div>
            <div>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password">
                <p class="error"></p>
            </div>

            <button type="" class="accentButton">SUBMIT</button>

            <script>
                let error_p = document.querySelector('.error');
                let button = document.querySelector('.form button');

                let login = document.querySelector('#login');
                let password = document.querySelector('#password');

                async function post(request) {
                    try {
                        const response = await fetch(request);
                        const result = await response.json();
                        console.log("Success:", result);

                        if (result.error)
                            error_p.innerHTML = result.error;
                        else {
                            try {
                                // кука будет удалена через час (3600 миллисекунд)
                                document.cookie = `user_id=${result.id}; max-age=3600`;

                            } catch (error) {
                                error_p.innerHTML = error;
                            }
                        }
                    } catch (error) {
                        console.error("Error:", error);
                    }
                }

                button.addEventListener('click', () => {
                    const request1 = new Request("test.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            login: login.value,
                            password: password.value
                        }),
                    });

                    post(request1);
                });
            </script>
        </div>

        <div id="bannerReg">
            <img src="assets/img/clean2.png" alt="cleanBanner">
            <img src="assets/img/clean3.png" alt="cleanBanner2" class="above">
        </div>
    </main>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>