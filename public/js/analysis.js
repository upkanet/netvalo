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