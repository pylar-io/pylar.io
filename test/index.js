    var dayData = {
    labels: [
        "bat"
    ],
    datasets: [
        {
            data: [20, 80],
            backgroundColor: [
                "#0AD69C",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#0AD69C",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};

var hmdData = {
    labels: [
        "hmd"
    ],
    datasets: [
        {
            data: [70, 30],
            backgroundColor: [
                "#0C85E9",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#0C85E9",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};
var tempData = {
    labels: [
        "temp"
    ],
    datasets: [
        {
            data: [76, 38],
            backgroundColor: [
                "#FF6542",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#FF6542",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};

var gaugeOpt = {
    cutoutPercentage: 85,
    animation: {
        animationRotate: true,
        duration: 2000
    },
    legend: {
        display: false
    },
    tooltips: {
        enabled: false
    }
};

var trendOpt = {
    legend: {
        display: false
    },
    scales: { 
        display: false,
        xAxes: [{
            ticks: {
                display: false
                
            },
            gridLines: {
                display: false
            }
        }],
        yAxes: [{
            
            ticks: {
                display: false
                
            },
            gridLines: {
                display: false
            }
        }]
    }
};


var hTrendData = {
    "labels":["January","February","March","April","May","June","July"],
    "datasets":[{
        "label":"Humidity Trend",
        "data":[65,59,80,81,56,55,40],
        "backgroundColor":"#0C85E9",
        "fill":false,
        "borderColor":"#0C85E9",
        "borderWidth": 2,
        "pointRadius": 0,
        "lineTension":0.1}]
};
var tTrendData = {
    "labels":["January","February","March","April","May","June","July"],
    "datasets":[{
        "label":"Temperature Trend",
        "data":[65,59,80,81,56,55,40],
        "backgroundColor":"#FF6542",
        "fill":false,
        "borderColor":"#FF6542",
        "borderWidth": 2,
        "pointRadius": 0,
        "lineTension":0.1}]
};

var chart = new Chart($('#dayGauge'), { // day gauge
    type: 'doughnut',
    data: dayData,
    options: gaugeOpt
});

var chart = new Chart($('#hmdGauge'), { // humidity gauge
    type: 'doughnut',
    data: hmdData,
    options: gaugeOpt
});

var chart = new Chart($('#tempGauge'), { // temperature gauge
    type: 'doughnut',
    data: tempData,
    options: gaugeOpt
});

var hTrendChart = new Chart("hmdTrend", {  // humidity trend graph
    type: 'line',
    data: hTrendData,
    options: trendOpt
});

var tTrendChart = new Chart("tempTrend", { // temperature trend graph
    type: 'line',
    data: tTrendData,
    options: trendOpt
});