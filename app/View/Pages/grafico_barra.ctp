<?php if (!empty($data)) { ?>

<div id="cont" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
	Highcharts.chart('cont', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Performance Comercial'
    },
    subtitle: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $string_meses; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} $',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       layout: 'horizontal',
        align: 'left',
        x: 50,
        verticalAlign: 'top',
        y: 50,
        floating: false,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },

    series: [
    	<?php foreach ($data as $key => $value) { ?>
        {
            name: <?php echo "'".$key."'"; ?>,
            type: 'column',
            yAxis: 1,
            data: [<?php echo $value; ?>],
            tooltip: {
                valueSuffix: ' $'
            }

        },
        	<?php } ?>
        {
            name: 'Custo Fixo Médio',
            type: 'line',
            yAxis: 1,
            data: [<?php echo $string_brut_salario; ?>],
            tooltip: {
                valueSuffix: ' $'
            }

        }
    ]
});
</script>

<?php } else {

	echo '<center><h1>Não há dados</h1></center>';

} ?>