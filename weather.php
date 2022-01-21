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
    <div id="app">
        <header>

        </header>

        <main>

            <div id="current-day-forecast">
                <h2 id="area">{{ info.data.city_name }}, {{ info.data.state_code }}</h2>
                <h3 id="date"><?php echo date("Y/m/d") ?></h3>
                <div id="weather">
                    <div id="icon">
                        <img v-bind:src="'https://www.weatherbit.io/static/img/icons/' + info.data.data[0].weather.icon + '.png'"
                            class="icon" alt="An image depicting the current local weather.">
                        <p>{{ info.data.data[0].weather.description }}</p>
                    </div>
                    <div id="temp">
                        <h1>{{ info.data.data[0].max_temp }}&#8457;</h1>
                        <h3>{{ info.data.data[0].min_temp }}</h3>
                    </div>
                </div>
            </div>

            <div id="upcoming-forecast">
                <h3><?php echo date("Y-m-d", strtotime("+1 day")); ?></h3>

            </div>


        </main>

        <footer>

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