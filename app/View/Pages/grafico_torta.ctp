<?php if (!empty($datos)) { ?>

<div id="container" style="height: 400px"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Participação na Receita'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: '',
        data: [
            <?php foreach ($datos_torta as $key => $value) { ?>
                [ <?php echo "'".$key."', ".$value;  ?> ],
           <?php } ?>
        ]
    }]
});

</script>

<?php } else {

echo '<center><h1>Não há dados</h1></center>';

} ?>