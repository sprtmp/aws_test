@include('header')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<main class="graph-wrap container-fluid p-0">





<div class="justify-content-center mt-5 graph">



    <p class="graph_heading">Diversity in States</p>



    <div id="chart_div_diversity" class="svg w-100" style="height: 900px; font-weight: 400;"></div>



</div>

</main>



<script type="text/javascript">



google.charts.load("current", {



    packages: ["corechart"]



});



google.charts.setOnLoadCallback(drawChart);







function drawChart() {

    var data = google.visualization.arrayToDataTable([

        ["State", "Species", {
            role: "style"
        }],

        <?php 

         $color = ['#2ecc71', '#e74c3c', '#9b59b6','#1abc9c','#34495e','#f39c12','#d35400','#8e44ad','#16a085','#2980b9'];

        foreach($stateList as $k => $state){?>

        ["<?=$state[0]->state;?>", <?=$state[0]->countcode;?>, "<?=$color[$k % count($color)];?>"],

       <?php } ?>



       /* ["Uttarakhand", 754, "#2ecc71"],



        ["Uttar Pradesh", 140, "#e74c3c"],



        ["Tamil Nadu", 890, "#9b59b6"],



        ["Rajasthan", 1731, "#1abc9c"],



        ["Meghalaya", 1963, "#34495e"],



        ["Kerala", 607, "#f39c12"],



        ["Karnataka", 402, "#d35400"],



        ["Haryana", 784, "#8e44ad"],



        ["Assam", 891, "#16a085"],



        ["Arunachal Pradesh", 717, "#2980b9"],



        ["Andaman & Nicobar", 363, "#c0392b"]*/



    ]);


    var options = {

        title: "DIVERSITY IN STATES",
        backgroundColor: '#000000',

        titleTextStyle: {
            fontSize: 14,
        },

        chartArea: {
            width: "87%"
        },

        hAxis: {

             slantedText: true,
             slantedTextAngle: 60,
            
            title: "States",

            minValue: 0,

            titleTextStyle: {
                color: '#b4b4b4',
                fontSize: 14,
                fontName: 'Times New Roman, Times, serif;'

            },

            textStyle: {
                fontSize: 14,
                color: '#b4b4b4',
                fontName: 'Times New Roman, Times, serif;'
            },
        },
        vAxis: {
            title: "Species",
            titleTextStyle: {
                fontSize: 14,
                color: '#b4b4b4'
            },
            textStyle: {
                fontSize: 14,
                color: '#b4b4b4',
                fontName: 'Times New Roman, Times, serif;' 
            }
        },
        animation: {
            duration: 1500,
            easing: "out"
        },

        bar: {
            groupWidth: "70%"
        },

        is3D: true,

        legend: {
           position: "none"

        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_diversity"));
    chart.draw(data, options);
}


window.addEventListener("resize", drawChart);



</script>



@include('footer')

