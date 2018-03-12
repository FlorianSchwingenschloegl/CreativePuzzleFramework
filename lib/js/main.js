$(document).ready(function () {

    $('#tabs').click(function (e) {
        e.preventDefault();
        $('#tabs').tab('show');
    });

    $('a.slide').click(function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top}, 'slow');
    });

});

String.prototype.endsWith = function (pattern) {
    var d = this.length - pattern.length;
    return d >= 0 && this.lastIndexOf(pattern) === d;
};

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Max Hagn',     205.22],
        ['Jakob Dinhof',      147.22],
        ['Fabian Lenz',  129.33],
        ['Flo Schwingenschlögl', 120.34],
        ['Michi Kutis',    66.16]
    ]);

    var options = {
        backgroundColor: '#F2F2F2'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);

        $('.scrollspy').scrollSpy();

}

$(window).resize(function () {
    drawChart();
});

