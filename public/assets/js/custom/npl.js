var element = document.getElementById('kt_charts_npl');

var height = parseInt(KTUtil.css(element, 'height'));
var lightColor = KTUtil.getCssVariableValue('--bs-dark');

var options = {
    series: [{
        name: "NPL",
        data: data_npl
    }],
    chart: {
        fontFamily: "inherit",
        type: "area",
        height: height,
        toolbar: {
            show: !1
        }
    },
    legend: {
        show: !1
    },
    dataLabels: {
        enabled: !1
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: .8,
            opacityTo: 0,
            stops: [0, 60, 100]
        }
    },
    stroke: {
        curve: "smooth",
        show: !0,
        width: 2,
        colors: [lightColor]
    },
    xaxis: {
        axisBorder: {
            show: !1
        },
        axisTicks: {
            show: !1
        },
        labels: {
            show: !1
        },
        crosshairs: {
            position: "front",
            stroke: {
                color: lightColor,
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: !1
        }
    },
    yaxis: {
        labels: {
            show: !1
        }
    },
    states: {
        normal: {
            filter: {
                type: "none",
                value: 0
            }
        },
        hover: {
            filter: {
                type: "none",
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: !1,
            filter: {
                type: "none",
                value: 0
            }
        }
    },
    tooltip: {
        enabled: !1
    },
    colors: [KTUtil.getCssVariableValue("--bs-white")],
    grid: {
        yaxis: {
            lines: {
                show: !1
            }
        }
    },
    markers: {
        strokeColor: lightColor,
        strokeWidth: 2
    }
};

var chart = new ApexCharts(element, options);
chart.render();
