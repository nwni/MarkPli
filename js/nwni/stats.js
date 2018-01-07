function createStats(){
	var ctx = document.getElementById("chartLikes").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			//labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
			labels: likes_names_array,
			datasets: [{
				label: '# of Votes',
				//data: [12, 19, 3, 5, 2, 3],
				data: likes_Array,
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});	
}