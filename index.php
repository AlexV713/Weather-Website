<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>
    <script src="scripts.js"></script>
    <title>Weather Webpage</title>
</head>

<body>
        <header>

        </header>

        <main>

            <form action="weather.php" method="GET">
                <input type="text" name="city" placeholder="Portland, OR" required>
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

        </main>

        <footer>

        </footer>
    </div>
</body>

</html>