var element = document.getElementById('kt_chartExpense');

var height = parseInt(KTUtil.css(element, 'height'));
var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');

var baseColor = KTUtil.getCssVariableValue('--bs-danger');
var baseLightColor = KTUtil.getCssVariableValue('--bs-danger-light');
var secondaryColor = KTUtil.getCssVariableValue('--bs-info');
var secondaryLightColor = KTUtil.getCssVariableValue('--bs-info-light');

var options = {
    series: [{
        name: 'Non Operasional',
        data: [205, 426, 654, 841, 650, 356]
    }, {
        name: 'Operasional',
        data: [235, 356, 156, 202, 302, 692]
    }],
    chart: {
        fontFamily: 'inherit',
        type: 'area',
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {},
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'solid',
        opacity: 1
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: '12px'
            }
        },
        crosshairs: {
            position: 'front',
            stroke: {
                color: labelColor,
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
                fontSize: '12px'
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: '12px'
            }
        }
    },
    states: {
        normal: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        hover: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: 'none',
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: '12px'
        },
        y: {
            formatter: function (val) {
                return 'Rp' + val + ' Juta'
            }
        }
    },
    colors: [baseColor, secondaryColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    },
    markers: {
        colors: [baseLightColor, secondaryLightColor],
        strokeColor: [baseLightColor, secondaryLightColor],
        strokeWidth: 3
    }
};

var chart = new ApexCharts(element, options);
chart.render();
