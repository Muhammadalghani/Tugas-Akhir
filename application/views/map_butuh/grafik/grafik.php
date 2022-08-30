INI HANYA TAMPILAN TEMPLATE SAJA, YANGSEBENARNYA PADA KONTEN MAP
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Grafik</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <div>
    <div id="data_luas"></div>
    <div id="data_pie"></div>
    <div id="pie"></div>
  </div>

<?php 
    /* Mengambil query report*/
    foreach($data as $result){
        $nama[] = (string) $result->nama_kecamatan; //ambil bulan
        $jumlah[] = (float) $result->luas_tanam; //ambil nilai
    }
    /* end mengambil query*/
?>



<script src="<?= base_url()?>assets/highcharts/highcharts.js"></script>
<script src="<?= base_url()?>assets/highcharts/exporting.js"></script>
<script src="<?= base_url()?>assets/highcharts/export-data.js"></script>
<script src="<?= base_url()?>assets/highcharts/jquery-3.1.1.min.js"></script>
Bar Chart
<div>
<script>
  Highcharts.chart('data_luas', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Jumlah Luas Tanam Kabupaten Purworejo'
    },
    subtitle: {
        text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Dinas Purworejo</a>'
    },
    xAxis: {
        categories: <?php echo json_encode($nama);?>,
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Luas Tanam (Ha)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' Ha'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            },
        colorByPoint: true
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Year 2016',
        data: <?php echo json_encode($jumlah);?>
    }]
});
</script>
</div>
Pie Chart
<div>
// Build the chart
<script>
Highcharts.chart('data_pie', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Presentase Luas Tanam Kabupaten Purworejo'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
      },
      showInLegend: true
    }
  },
  series: [{
    name: 'Persentase',
    colorByPoint: true,
    data:<?php echo json_encode($jumlah);?>,
         sliced: true,
         selected: true
  
  }]
});
</script>


<script type="text/javascript">
    $(document).read(function(){
        var option ={
            chart: {
                renderTo: 'pie',
                type: 'bar'
            },
            series: []
        };
        $.getJSON('data.php', function(data){
            options.series[0].data = data;
            var chart = new Highcharts.Chart(options);
        });
    });

</script>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var options = {
chart: {
renderTo: 'container',
plotBackgroundColor: null,
plotBorderWidth: null,
plotShadow: false
},
title: {
text: 'Web Sales & Marketing Efforts'
},
tooltip: {
formatter: function() {
return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
}
},
plotOptions: {
pie: {
allowPointSelect: true,
cursor: 'pointer',
dataLabels: {
enabled: true,
color: '#000000',
connectorColor: '#000000',
formatter: function() {
return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
}
}
}
},
series: [{
type: 'pie',
name: 'Browser share',
data: []
}]
}
 
$.getJSON("data.php", function(json) {
options.series[0].data = json;
chart = new Highcharts.Chart(options);
});
 
 
 
});
</script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
<title>MEMBUAT GRAFIK LINE DENGAN PLUGIN HIGHCHART</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
<style type="text/css">
.container { margin: auto; padding: 5px; width: 800px; border: 2px solid #DBDBDB; }
</style>
</head>
<body>
<div class="container">
<div class="grafik" style="width:100%; height:400px;"></div>
</div>
<?php
 // koneksi ke database
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'belajar_grafik';
 mysql_select_db($db, mysql_connect($host, $user, $pass));

 // array data
 $array_periode = array();
 $array_kategori = array('JUMLAH SISWA SD TRITUNGGAL');
 $array_series = array(array('name'=>'JUMLAH SISWA SD TRITUNGGAL', 'data'=>array()));
 $array_datas = array();

 // cari periode
 $sql = 'SELECT * FROM periode';
 $rs = mysql_query($sql);

 while($row = mysql_fetch_array($rs)){
  $periode_id = $row['id'];
  $periode = $row['periode'];

  // set periode
  array_push($array_periode, array('id'=>$periode_id, 'periode'=>$periode));
 }

 foreach($array_periode as $key=>$val){
  // set datas
  $array_datas[$val['periode']] = array();

  $sql = 'SELECT * FROM datas';
  $sql .= ' WHERE periode_id='.intval($val['id']);
  $rs = mysql_query($sql);

  while($row = mysql_fetch_array($rs)){
   $pria = $row['pria'];
   $wanita = $row['wanita'];

   // total siswa
   $total = $pria + $wanita;

   // value datas
   $array_datas[$val['periode']] = intval($total);
  }
 }

 // set value per data grafik
 foreach($array_datas as $key=>$val){
   array_push($array_series[0]['data'], array((string)$key, $val));
 }
?>
<script type="text/javascript">
$('.grafik').highcharts({
 chart: {
  type: 'pie',
  marginTop: 80
 },
 credits: {
  enabled: false
 }, 
 tooltip: {
  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
 },
 title: {
  text: 'JUMLAH SISWA SD TRITUNGGAL'
 },
 subtitle: {
  text: 'TAHUN 2013 - 2015'
 },
 xAxis: {
  categories: <?php echo json_encode($array_kategori); ?>,
  labels: {
   style: {
    fontSize: '10px',
    fontFamily: 'Verdana, sans-serif'
   }
  }
 },
 legend: {
  enabled: true
 },
 plotOptions: {
   pie: {
     allowPointSelect: true,
     cursor: 'pointer',
     dataLabels: {
       enabled: false
     },
     showInLegend: true
   }
 },
 series: <?php echo json_encode($array_series); ?>
});
</script>
</body>
</html>


<!-- 
   #FF0000
   #FFFF00
   #FFFF00
   #7FFF00
   #00FF00


   #FF0000
   #FF1100
   #FF2300
   #FF3400
   #FF4600
   #FF5700
   #FF6900
   #FF7B00
   #FF8C00
   #FF9E00
   #FFAF00
   #FFC100
   #FFD300
   #FFE400
   #FFF600
   #F7FF00
   #E5FF00
   #D4FF00
   #C2FF00
   #B0FF00
   #9FFF00
   #8DFF00
   #7CFF00
   #6AFF00
   #58FF00
   #47FF00
   #35FF00
   #24FF00
   #12FF00
   #00FF00 -->