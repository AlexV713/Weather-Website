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

<body id="weather-page">
    <div id="app">
        <header>
            <h2 id="area">{{ info.data.city_name }}, {{ info.data.state_code }}</h2>
            <h3 id="date"><?php echo date("m/d/Y") ?></h3>
            <p>{{ info.data.data[0].weather.description }}</p>
        </header>

        <main>

            <div id="current-day-forecast">

                <div id="weather">
                    <div id="icon">
                        <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[0].weather.icon + '.png'"
                            alt="current look of the weather">
                    </div>
                    <div id="temp">
                        <h1>{{ info.data.data[0].max_temp }}&#8457;</h1>
                        <h3>{{ info.data.data[0].min_temp }}&#8457;</h3>
                    </div>
                </div>
            </div>

            <div id="upcoming-forecast">
                <div id="dates">
                    <p><?php echo date("m-d-Y", strtotime("+1 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+2 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+3 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+4 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+5 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+6 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+7 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+8 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+9 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+10 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+11 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+12 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+13 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+14 day")); ?></p>
                    <p><?php echo date("m-d-Y", strtotime("+15 day")); ?></p>
                </div>

                <div id="icons-section">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[1].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[2].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[3].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[4].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[5].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[6].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[7].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[8].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[9].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[10].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[11].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[12].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[13].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[14].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                    <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[15].weather.icon + '.png'"
                        alt="current look of the weather" class="icons">
                </div>

                <div id="temps-section">
                    <p>{{ info.data.data[1].max_temp }}&#8457; / {{ info.data.data[1].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[2].max_temp }}&#8457; / {{ info.data.data[2].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[3].max_temp }}&#8457; / {{ info.data.data[3].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[4].max_temp }}&#8457; / {{ info.data.data[4].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[5].max_temp }}&#8457; / {{ info.data.data[5].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[6].max_temp }}&#8457; / {{ info.data.data[6].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[7].max_temp }}&#8457; / {{ info.data.data[7].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[8].max_temp }}&#8457; / {{ info.data.data[8].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[9].max_temp }}&#8457; / {{ info.data.data[9].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[11].max_temp }}&#8457; / {{ info.data.data[10].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[11].max_temp }}&#8457; / {{ info.data.data[11].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[12].max_temp }}&#8457; / {{ info.data.data[12].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[13].max_temp }}&#8457; / {{ info.data.data[13].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[14].max_temp }}&#8457; / {{ info.data.data[14].min_temp }}&#8457;</p>
                    <p>{{ info.data.data[15].max_temp }}&#8457; / {{ info.data.data[15].min_temp }}&#8457;</p>
                </div>

            </div>

        </main>

        <footer>
            <p>Copyright &#38; <?php echo date("Y"); ?> Alejandro Valerio </p>
        </footer>
        
        <h2 class="data">Raw data from the API call (remove when you are done developing this page)</h2>
        <pre class="data">{{ info }}</pre>
    </div>
    <script>
        var router = new VueRouter({
            mode: 'history',
            routes: []
        });
        new Vue({
            el: '#app',
            router,
            data() {
                return {
                    info: null,
                    loading: true,
                    errored: false
                }
            },
            mounted() {
                axios
                    .get(
                        "https://api.weatherbit.io/v2.0/forecast/daily?key=8f4b01bfac974b5dabc1ceecd2f8adb6&units=I&country=US&city=" +
                        this.$route.query.city)

                    .then(response => {
                        this.info = response
                        console.log(response)
                    })
                    .catch(error => {
                        console.log(error)
                        this.errored = true
                    })
                    .finally(() => this.loading = false)
            }
        })
    </script>
</body>

</html>