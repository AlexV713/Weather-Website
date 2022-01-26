<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>
    <script src="scripts.js"></script>
    <title>Weather Webpage</title>
</head>

<body>

<header id="home-header">
    <h1>16-Day Weather Forecast</h1>
</header>

        <main>

            <form action="weather.php" method="GET">
                <input type="text" name="city" placeholder="Portland, OR" required>
                <input type="submit" value="Search">
            </form>

        </main>

        <footer>
            <p>Copyright &#38; <?php echo date("Y"); ?> Alejandro Valerio </p>
        </footer>
    </div>
</body>

</html>