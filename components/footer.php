</main>
</div>
        </div>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/JsBarcode.all.min.js"></script>
        <script src="assets/js/dom-to-image.js"></script>
        <script src="assets/js/FileSaver.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" 
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        
        <script>
        /* globals Chart:false, feather:false */

        (function () {
            'use strict'

            feather.replace()

            // Graphs
            var ctx = document.getElementById('myChart')
            // eslint-disable-next-line no-unused-vars
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        'Sunday',
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday',
                        'Saturday'
                    ],
                    datasets: [{
                        data: [
                            15339,
                            21345,
                            18483,
                            24003,
                            23489,
                            24092,
                            12034
                        ],
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    },
                    legend: {
                        display: false
                    }
                }
            })
        })()
    </script>

    <script>

        $(".nav-link").hover(
        function() {
            $(this).addClass("active animate__animated animate__pulse");
        }, function() {
            $( this ).removeClass("active animate__animated animate__pulse");
        }
        );

    </script>

    </body>
</html>