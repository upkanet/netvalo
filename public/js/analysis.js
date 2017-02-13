var ctx = $("#CA3ChartCanvas");
console.log(ctx);
new Chart(ctx,{
	type: 'bar',
	data: CA3Data,
	options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    callback: function(value,index,values){
                    	return parseInt(value / 1000000)+'M€';
                    }
                }
            }]
        }
    }
});