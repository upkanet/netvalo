//Chart evolution CA
var ctx = $("#CA3ChartCanvas");
var ca3options = {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    callback: function(value,index,values){
                        return parseInt(value / 1000000)+'M€';
                    }
                }
            }]
        },
        tooltips: {
            enabled: true,
            callbacks:{
                label: function(tooltipItems, data){
                    return parseInt(tooltipItems.yLabel / 1000000) + '.' + (parseInt(tooltipItems.yLabel / 100000) - parseInt(tooltipItems.yLabel / 1000000) * 10) + 'M€';
                }
            }
        }
    };

new Chart(ctx,{
	type: 'bar',
	data: CA3Data,
	options: ca3options
});

//Chargement de valo
function loadingValo(){
    $('.nav-pills a[href="#indic-valo"]').tab('show');
}

setTimeout(loadingValo, 0);

//Chart valorisations
var valoCtx = $("#valoCanvas");
var valoCoptions = {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero:true
                    }
            }]
        }
    };

new Chart(valoCtx,{
    type: 'bar',
    data: valoData,
    options: valoCoptions
});