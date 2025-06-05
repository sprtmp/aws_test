@include('header')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<main class="graph-wrap container-fluid p-0">

<div class="justify-content-center mt-5 graph">



<p class="graph_heading">Authors Contribution</p>



<div id="chart_div_Authors_Contribution" class="svg w-100" style="height: 1000px; font-weight: 400;"></div>



</div>

</main>



<script>



    

google.charts.load("current", {packages:["corechart"]});



google.charts.setOnLoadCallback(drawChart);







function drawChart() {



    var data = google.visualization.arrayToDataTable([



        ["Author", "Species", { role: "style" }],



        <?php 



         $color = ['#2ecc71', '#e74c3c', '#f1c40f','#9b59b6','#1abc9c','#3498db','#e67e22','#8e44ad','#d35400','#2980b9'];



        foreach($author as $k=> $au){?>



        ["<?=$au->aname;?>", <?=$au->countdata;?>, "<?=$color[$k % count($color)];?>"],



        <?php } ?>



    ]);



    var options = {



        title: "Authors Contribution",



        backgroundColor: '#000000',



        titleTextStyle: { fontSize: 18, bold: false },



        chartArea: {width: "80%"},



        hAxis: {



            title: "Species",

            fontSize: 14,

            minValue: 0,



            titleTextStyle: {



              color: '#b4b4b4',

              fontSize: 14,

              fontName: 'Times New Roman, Times, serif;'



            },



            textStyle: { 



                fontSize: 14,



                bold: false,



                color: '#b4b4b4',



                fontName: 'Times New Roman, Times, serif;' 



            }



        },



        vAxis: {



            title: "Authors",



            titleTextStyle: {



              color: '#b4b4b4'



            } , 



            textStyle: { 



                fontSize: 14,



                bold: false,



                color: '#b4b4b4',



                fontName: 'Times New Roman, Times, serif;' 



            }



        },



        animation: {



            startup: true,



            duration: 1500,



            easing: "out"



        },



        bar: {groupWidth: "70%"},



        is3D: true,



        legend: { position: "none" } 



    };







    //var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_Authors_Contribution"));

    var chart = new google.visualization.BarChart(document.getElementById("chart_div_Authors_Contribution"));



    chart.draw(data, options);



}







window.addEventListener("resize", drawChart);



</script>



@include('footer')

