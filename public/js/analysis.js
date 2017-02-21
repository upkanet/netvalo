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
function progBarValo(p){
    $('#progBarValo').css('width', p+'%').attr('aria-valuenow',p);
}

function pBV1(){
    progBarValo(40);
}

function pBV2(){
    progBarValo(80);
}

function pBV3(){
    progBarValo(100);
}

function loadingValo(){
    $('.nav-pills a[href="#indic-valo"]').tab('show');
}

setTimeout(pBV1, 1000);
setTimeout(pBV2, 2000);
setTimeout(pBV3, 2800);
setTimeout(loadingValo, 3000);

//Chart valorisations
var valoCtx = $("#valoCanvas");
var valoCoptions = {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                stacked: true,
                display: false,
                ticks: {
                    min: 0
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false
                }
            }]
        },
        tooltips: {
            enabled: false
        }
    };

new Chart(valoCtx,{
    type: 'bar',
    data: valoData,
    options: valoCoptions
});

//Chart BFR
var evoBFRctx = $("#evoBFRCanvas");
var evoBFRoptions = {
        legend: {
            display: false
        },
        tooltips: {
            enabled: true,
            callbacks:{
                label: function(tooltipItems, data){
                    return tooltipItems.yLabel + ' mois';
                }
            }
        }
    };
new Chart(evoBFRctx,{
    type: 'bar',
    data: evoBFRData,
    options: evoBFRoptions
});