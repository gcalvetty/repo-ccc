<!-- ChartJS 1.0.1 -->
<?php if($CantAlm["totalAlum"]>0): ?> 
<script src="/plugins/chartjs/Chart.min.js"></script>
<script>
    $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);
    var areaChartData = {
    labels: [ <?php $__currentLoopData = $CantAlmIns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          '<?php echo e("".$valor->dia.""); ?>',           
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            ],
            datasets: [                        
            {
            label: "Alumnos Inscritos",
                    fillColor: "rgba(60,141,188,0.6)",
                    strokeColor: "rgba(60,141,188,0.6)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [ 
                        <?php $__currentLoopData = $CantAlmIns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($valor->total); ?> ,           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
            }
            ]
    };
    var areaChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.09)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: true,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 5,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 3,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
    };
    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);
    
    
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var almTot = [
            <?php $__currentLoopData = $CantAlm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($clave!="totalAlum"): ?> 
                    <?php $__currentLoopData = $valor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clav2 => $valor2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($clav2 == 'Total'): ?>
                            <?php echo e(number_format((float)$valor2*100/$CantAlm["totalAlum"], 2, '.', '')); ?>,
                        <?php endif; ?>            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ]
            var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
    {
    value: almTot[0],
            color: "#CA195A",
            highlight: "#D95C8A",
            label: "Taller Inicial"
    },
    {
    value: almTot[1],
            color: "#008D4C",
            highlight: "#4AAE80",
            label: "Sección"
    },
    {
    value: almTot[2],
            color: "#005384",
            highlight: "#4A85A8",
            label: "Primaria"
    },
    {
    value: almTot[3],
            color: "#00A7D0",
            highlight: "#4AC1DE",
            label: "Secundaria"
    },
    ];
    var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 20, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 130,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    });
</script>
<?php endif; ?>