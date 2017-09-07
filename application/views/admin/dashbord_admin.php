
 
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Selamat Datang</h1>
            <h2> <?php echo $this->session->userdata('username'); ?>
            </h2>
      
        


<div id="datarangking" ></div>
<?php
    /* Mengambil query report*/
    foreach($report as $row){
        $Alternatif[] =$row ->nama_alternatif; //ambil bulan
        
        $Vektor[] =(float) $row->vektor_v; //ambil nilai
    }
    /* end mengambil query*/
     
?>            
            </div>
        </div>
    </div>
<script src="<?php echo base_url();?>assets/admin/js/code/highcharts.js"></script> 
<script src="<?php echo base_url();?>assets/admin/js/code/modules/exporting.js"></script> 



<script type="text/javascript">

Highcharts.chart('datarangking', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Perangkingan Perekrutan Karyawan'
    },
    subtitle: {
        text: 'CV Rumahweb Indonesia'
    },
    xAxis: {
        categories: <?php echo json_encode($Alternatif);?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'vektor v'
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
        name: 'Vektor v',
        data: <?php echo json_encode($Vektor);?>,
        dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y,0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
    }]
});
        </script>

