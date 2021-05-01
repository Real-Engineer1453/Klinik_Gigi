<!--
=========================================================
* Soft UI Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/soft-ui-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('user_officer.includes.style')

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>
        @yield('title')
    </title>
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('user_officer.includes.aside')

<main class="main-content mt-1 border-radius-lg">

    @include('user_officer.includes.navbar')

    @yield('content')

    @stack('footer')

</main>

    @include('user_officer.includes.script')

    {{-- Add-On Script --}}
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
            display: false,
            },
            tooltips: {
            enabled: true,
            mode: "index",
            intersect: false,
            },
            scales: {
            yAxes: [{
                gridLines: {
                display: false,
                },
                ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 0,
                fontSize: 14,
                lineHeight: 3,
                fontColor: "#fff",
                fontStyle: 'normal',
                fontFamily: "Open Sans",
                },
            }, ],
            xAxes: [{
                gridLines: {
                display: false,
                },
                ticks: {
                display: false,
                padding: 20,
                },
            }, ],
            },
        },
        });

        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors


        new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c9f",
                borderWidth: 3,
                backgroundColor: gradientStroke1,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            },
            {
                label: "Websites",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#3A416F",
                borderWidth: 3,
                backgroundColor: gradientStroke2,
                data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                maxBarThickness: 6

            },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
            display: false,
            },
            tooltips: {
            enabled: true,
            mode: "index",
            intersect: false,
            },
            scales: {
            yAxes: [{
                gridLines: {
                borderDash: [2],
                borderDashOffset: [2],
                color: '#dee2e6',
                zeroLineColor: '#dee2e6',
                zeroLineWidth: 1,
                zeroLineBorderDash: [2],
                drawBorder: false,
                },
                ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                fontSize: 11,
                fontColor: '#adb5bd',
                lineHeight: 3,
                fontStyle: 'normal',
                fontFamily: "Open Sans",
                },
            }, ],
            xAxes: [{
                gridLines: {
                zeroLineColor: 'rgba(0,0,0,0)',
                display: false,
                },
                ticks: {
                padding: 10,
                fontSize: 11,
                fontColor: '#adb5bd',
                lineHeight: 3,
                fontStyle: 'normal',
                fontFamily: "Open Sans",
                },
            }, ],
            },
        },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
