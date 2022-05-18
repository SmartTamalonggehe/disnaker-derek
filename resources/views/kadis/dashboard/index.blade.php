@extends('kadis.layouts.default')

@section('judul','Dashboard')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <section class="content">

        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title">Grafik Pencaker</h4>
                    <div>
                        <canvas id="bar-chart1" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

      </section>
    </div>
</div>

@endsection

@section('script')
    <script>
        new Chart(document.getElementById("bar-chart1"), {
		type: 'bar',
		data: {
		  labels: ["Jayapura Selatan", "Jayapura Utara", "Abepura", "Heram", "Muara Tami"],
		  datasets: [
			{
			  label: "Dataset",
			  backgroundColor: ["#689f38", "#38649f","#389f99","#ee1044","#ff8f00"],
			  data: [720,658,754,521,589]
			//   data: [8545,6589,5894,4985,1548]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'My dataset'
		  }
		}
	});

	if( $('#bar-chart2').length > 0 ){
		var ctx2 = document.getElementById("bar-chart2").getContext("2d");
		var data2 = {
			labels: ["Jayapura Selatan", "Jayapura Utara", "Abepura", "Heram", "Muara Tami"],
			datasets: [
				{
					label: "My First dataset",
					backgroundColor: "#689f38",
					borderColor: "#689f38",
					data: [15, 20, 70, 51, 36, 85, 50]
				},
				{
					label: "My Second dataset",
					backgroundColor: "#38649f",
					borderColor: "#38649f",
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: "My Third dataset",
					backgroundColor: "#389f99",
					borderColor: "#389f99",
					data: [8, 28, 50, 29, 76, 77, 40]
				}
			]
		};

		var hBar = new Chart(ctx2, {
			type:"bar",
			data:data2,

			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],

				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display: false,
				},

				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}

			}
		});
	};
    </script>
@endsection

