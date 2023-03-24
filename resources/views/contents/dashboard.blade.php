@extends('layouts.layout')

@section('content')
<div id="page-wrapper">
  <div class="form-three widget-shadow">
    <div class="widget_1 row elements">
      <div class="col-sm-4 widget_1_box widget-shadow">
        <div class="tile-progress bg-info">
          <div class="content">
            <h4><i class="fa fa-dashboard icon-sm"></i> Totale des Coneventions</h4>

            <span>{{ DB::table('conventions')->count() }}</span>
          </div>
        </div>
      </div>
      <div class="col-sm-4 widget_1_box widget-mdl-grid widget-shadow">
        <div class="tile-progress bg-success">
          <div class="content">
            <h4><i class="fa fa-dashboard icon-sm"></i> Totale des Communes</h4>

            <span>{{ DB::table('communes')->count() }}</span>
          </div>
        </div>
      </div>
      <div class="col-sm-4 widget_1_box widget-shadow">
        <div class="tile-progress bg-danger">
          <div class="content">
            <h4><i class="fa fa-dashboard icon-sm"></i> Totale des Partenaires</h4>

            <span>{{ DB::table('partenaires')->count() }}</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class=" row">
      
      <div class="col-md-6 charts chrt-page-grids chart">
   
           <canvas id="bar" height="100" width="100" style="height: 180px ;width: 120px"></canvas>
        
       
      </div>
      <div class="col-md-6 charts chrt-page-grids chrt-right chart">
  
      <canvas id="pie" height="50" width="50"  style="height: 180px; width: 50px"></canvas>
    </div>
          
      
      </div>
    </div>
  </div>
</div>
</div>
<style>


</style>
</div>
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\vendors\js\Chart.js') }}"></script>
<script>
  let Months = [];
let valuesInitial = [];
let valuesExecution = [];
let valuesRealise = [];

@foreach ($Months as $MonthKey=>$MonthValue )
  Months.push("{{ $MonthValue }}")
@endforeach

// console.log(Months)
      
@foreach ($Months as $MonthKey => $MonthValue)
    @php $matched = false; @endphp
    @foreach ($DataBarinitiale as $bn)
        @if ($bn->month_number ==  $MonthKey)
        valuesInitial.push({{ $bn->num_records }});
            @php $matched = true; @endphp
            @break
        @endif
    @endforeach
    @if (!$matched)
    valuesInitial.push(0);
    @endif
@endforeach

@foreach ($Months as $MonthKey=>$MonthValue)
    @php $matched = false; @endphp
    @foreach ($DataBarexecution as $bn)
        @if ($bn->month_number ==  $MonthKey)
        valuesExecution.push({{ $bn->num_records }});
            @php $matched = true; @endphp
            @break
        @endif
    @endforeach
    @if (!$matched)
    valuesExecution.push(0);
    @endif
@endforeach

@foreach ($Months as $MonthKey=>$MonthValue)
    @php $matched = false; @endphp
    @foreach ($DataBarrealise as $bn)
        @if ($bn->month_number ==  $MonthKey)
            valuesRealise.push({{ $bn->num_records }});
            @php $matched = true; @endphp
            @break
        @endif
    @endforeach
    @if (!$matched)
        valuesRealise.push(0);
    @endif
@endforeach
        console.log(valuesRealise)
        console.log(valuesInitial)
        console.log(valuesExecution)
        const dataBar = {
            labels: Months,
            datasets: [{
                    label: 'Projet a la phase :Initial',
                    data: valuesInitial,
                    backgroundColor: '#4F52BA',
                    borderColor: '#4F52BA',
                    borderWidth: 1
                },
                {
                    label: ' Projet a la phase :Execution',
                    data: valuesExecution,
                    backgroundColor: '#585858',
                    borderColor: '#585858',
                    borderWidth: 1
                },
                {
                    label: 'Projet a la phase : Clôture',
                    data: valuesRealise,
                    backgroundColor: '#e94e02',
                    borderColor: '#e94e02',
                    borderWidth: 1
                }
            ]
        };

        const configBar = {
            type: 'bar',
            data: dataBar,
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    }
                },
                animation: {
                    duration: 2000
                }
            }
        };

      

        const dataPie = {
            labels: ['Initiale', 'Execution', 'Realiser'],
            datasets: [{
                label: 'Totale des Projet',
                data: ["<?php echo DB::table('projects')->where('phase', 'initiale')->count(); ?>",
                    "<?php echo DB::table('projects')->where('phase', 'Execution')->count(); ?>",
                    "<?php echo DB::table('projects')->where('phase', 'realise')->count(); ?>"
                ],
                backgroundColor: [
                    '#4F52BA',
                    '#585858',
                    '#e94e02'
                ],
                hoverOffset: 4
            }]
        };

        const configPie = {
            type: 'pie',
            data: dataPie,
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            boxWidth: 25,
                            font: {
                                size: 14
                            }
                        }
                    }
                },
                animation: {
                    duration: 2000
                }
            }
        };

        const myChartPie = new Chart(
            document.getElementById('pie'),
            configPie
        ).getContext("3d");
        const myChartBar = new Chart(
            document.getElementById('bar'),
            configBar
        ).getContext("3d");

</script>
@endsection