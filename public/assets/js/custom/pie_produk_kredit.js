var element = document.getElementById('kt_charts_pie_produk');

// GOOGLE CHARTS INIT
google.load('visualization', '1', {
    packages: ['corechart', 'bar', 'line']
});

google.setOnLoadCallback(function () {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['KMB PJ ANUITAS', 890685],
        ['KMG ANUITAS', 1399085],
        ['KMG PJ ANUITAS', 227572],
        ['KMG TA ANUITAS', 27860],
        ['KMG PNS SERTIF', 8172064],
        ['KMG PNS GAJI', 2087065],
        ['KMG PNS TUNDA', 3466251],
        ['KMG PEG SWASTA', 40511912],
    ]);

    var options = {
        title: '',
        colors: ['#fe3995', '#f6aa33', '#6e4ff5', '#2abe81', '#c7d2e7', '#593ae1', '#fd4995'],
        fontSize: 7
    };

    var chart = new google.visualization.PieChart(document.getElementById('kt_charts_pie_produk'));
    chart.draw(data, options);
});
