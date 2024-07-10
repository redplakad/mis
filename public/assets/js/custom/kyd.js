var element = document.getElementById('kt_charts_kyd');

var height = parseInt(KTUtil.css(element, 'height'));
var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
var baseColor = KTUtil.getCssVariableValue('--bs-primary');
var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');


var options = {
    series: [{
        name: 'Performing Loan',
        data: [76, 85, 101, 98, 87, 105, 88, 90]
    }, {
        name: 'Non Performing Loan',
        data: [44, 55, 57, 56, 61, 58, 55, 60]
    }],
    chart: {
        fontFamily: 'inherit',
        type: 'bar',
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
            columnWidth: ['30%'],
            endingShape: 'rounded'
        },
    },
    legend: {
        show: false
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
        categories: ['PJ Anuitas', 'KMG Anuitas', 'PJ Anuitas', 'TA Anuitas', 'PNS Sertif', 'PNS Gaji', 'PNS Tunda', 'Peg Swasta'],
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
    fill: {
        opacity: 1
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
                return 'Rp ' + val + ' juta'
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
    }
};

var chart = new ApexCharts(element, options);
chart.render();
