<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Highcharts Exporting Server</title>
	<meta name="description" content="Highcharts Exporting Server" />
	<script type="text/javascript" src="<?php echo PUBLIC_PATH;?>js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_PATH;?>js/highcharts.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_PATH;?>js/exporting.js"></script>

</head>

<body>
	<div id="container" style="min-width:800px;height:400px"></div>
</body>
	<script>
/*$(function(){
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});*/
	</script>
    <script type="text/javascript">
    $(function(){
        $.ajax({
            url:"<?php echo U('Charts/ajaxSeries');?>",

            dataType:'json',
            type:'post',
            success:function(msg){
                //eval("var msg="+msg);
                //console.log(msg);
                //alert(msg);
               // var mess = eval("("+msg+")");
               // alert(mess.length);
               /* for(var i=0;i<msg.length;i++){
                    for(var key in msg[i]){
                        //alert(msg[i][key]);
                        alert(key);
                    }
                }*/
               // var mess = JSON.parse(msg);
              // console.log(msg);
               // alert(msg);
                for(key in msg){
                    console.log("name:"+"'"+msg[key].name+"'");
                    console.log("data:"+"["+msg[key].data+"]");
                }
            }
        });
    });
    </script>
</html>