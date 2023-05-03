(function ($) {

    // BTC Line Chart

    var options = {
        chart: {
            height: 100,
            type: 'line',
            zoom: {
                enabled: false
            },

            toolbar: {
                show: false,
            }
        },
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 80, 10, 41, 35, 51, 49, 62, 69, 91, 80]
        }],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
            colors: ["#7391FF"],
        },
        grid: {
            show: false,
        },
        tooltip: {
            enabled: false,
            x: {
                format: "dd MMM yyyy"
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            axisBorder: {
                show: false
            },

            labels: {
                show: false
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#btcChart"),
        options
    );
    chart.render();

    // BTC Line Chart

    var options = {
        chart: {
            height: 100,
            type: 'line',
            zoom: {
                enabled: false
            },

            toolbar: {
                show: false,
            }
        },
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 80, 10, 41, 35, 51, 49, 62, 69, 91, 80]
        }],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
            colors: ["#7391FF"],
        },
        grid: {
            show: false,
        },
        tooltip: {
            enabled: false,
            x: {
                format: "dd MMM yyyy"
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            axisBorder: {
                show: false
            },

            labels: {
                show: false
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#ltcChart"),
        options
    );
    chart.render();

    // BTC Line Chart

    var options = {
        chart: {
            height: 100,
            type: 'line',
            zoom: {
                enabled: false
            },

            toolbar: {
                show: false,
            }
        },
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 80, 10, 41, 35, 51, 49, 62, 69, 91, 80]
        }],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
            colors: ["#7391FF"],
        },
        grid: {
            show: false,
        },
        tooltip: {
            enabled: false,
            x: {
                format: "dd MMM yyyy"
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            axisBorder: {
                show: false
            },

            labels: {
                show: false
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#xrpChart"),
        options
    );
    chart.render();

    // BTC Line Chart

    var options = {
        chart: {
            height: 100,
            type: 'line',
            zoom: {
                enabled: false
            },

            toolbar: {
                show: false,
            }
        },
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 80, 10, 41, 35, 51, 49, 62, 69, 91, 80]
        }],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
            colors: ["#7391FF"],
        },
        grid: {
            show: false,
        },
        tooltip: {
            enabled: false,
            x: {
                format: "dd MMM yyyy"
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            axisBorder: {
                show: false
            },

            labels: {
                show: false
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#dashChart"),
        options
    );
    chart.render();



    // Highest Saving User Chart
    var options = {
        series: [76, 88, 61, 90],
        chart: {
            height: 250,
            type: 'radialBar',
        },
        tooltip: {
            enabled: true,
        },
        plotOptions: {
            radialBar: {
                offsetY: 0,
                startAngle: 0,
                endAngle: 360,
                hollow: {
                    margin: 5,
                    size: '20%',
                    background: 'transparent',
                    image: undefined,
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            }
        },
        colors: [
            '#C893A4',
            '#9299E2',
            '#449958',
            '#FFA477'
        ],
        labels: ['Standard Savings', 'Dollar Savings', 'Target Savings', 'Vault Savings'],
        legend: {
            show: false,
            floating: true,
            fontSize: '16px',
            position: 'left',
            offsetX: 160,
            offsetY: 15,
            labels: {
                useSeriesColors: true,
            },
            markers: {
                size: 0
            },
            formatter: function (seriesName, opts) {
                return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
            },
            itemMargin: {
                vertical: 3
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#highest-saving-user-chart"), options);
    chart.render();


    // Loans Chart

    var options = {
        series: [{
            name: 'No of Loans',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 92]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 200]
        }, {
            name: 'Pending Payments',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 20]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        colors: ['#ffba83', '#ac1de1', '#0bccee'],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'nov', 'dec', 'Feb', 'Mar'],
        },
        yaxis: {
            title: {
                text: 'Thousands'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return " " + val + " thousand"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#loans-chart"), options);
    chart.render();

    // Total Users Chart

    var options = {
        series: [{
            name: 'Male',
            data: [94, 120, 57, 256, 61, 158, 63, 260, 66]
        }, {
            name: 'Female',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Total',
            data: [150, 220, 166, 306, 145, 348, 252, 263, 641]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: 'Total Users'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + " thousands"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#total-users-chart"), options);
    chart.render();


})(jQuery);