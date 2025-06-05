@include('header')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<main class="graph-wrap container-fluid p-0">

<div class="justify-content-center mt-5 graph">



                <p class="graph_heading">Bio Geographic Zones/Zones</p>



                <div id="chart_div_Bio_Geographic" class="svg w-100" style="height: 500px; font-weight: 400;"></div>



            </div>

</main>





<script type="text/javascript">

    google.charts.load("current", {

        packages: ["corechart"]

    });

    google.charts.setOnLoadCallback(drawChart);



    function drawChart() {

        var data = google.visualization.arrayToDataTable([

            ["Zone", "Species", {

                role: "style"

            }],

            <?php 

            $color = ['#2ecc71', '#e74c3c', '#9b59b6','#1abc9c','#34495e','#f39c12','#d35400','#8e44ad','#16a085','#2980b9'];

            foreach($zones as $k=> $zone){?>

            ["<?=$zone[0]->zone;?>", <?=$zone[0]->countcode;?>, "<?=$color[$k % count($color)];?>"],

            <?php

            }

            ?>

           // ["Coasts", 320, "#2ecc71"],

            

            // ["Deccan Peninsula", 734, "#e74c3c"],

            // ["Desert", 34, "#f1c40f"],

            // ["Eastern India", 18, "#9b59b6"],

            // ["Gangetic Plain", 535, "#1abc9c"],

            // ["India", 292, "#3498db"],

            // ["Indian Himalaya", 3079, "#e74c3c"],

            // ["Islands", 356, "#16a085"],

            // ["North East", 2843, "#8e44ad"],

            // ["North East Himalaya", 189, "#d35400"],

            // ["North India", 194, "#2980b9"],

            // ["North West Himalaya", 188, "#c0392b"],

            // ["North West India", 199, "#27ae60"],

            // ["Semi Arid", 57, "#7f8c8d"],

            // ["South India", 169, "#f39c12"],

            // ["Throughout India", 203, "#d35400"],

            // ["Trans Himalaya", 79, "#e67e22"],

            // ["Western Ghats", 1237, "#95a5a6"]

        ]);



        var options = {

            title: "BIO GEOGRAPHIC ZONES/ZONES",

            backgroundColor: '#000000',

            titleTextStyle: {

                fontSize: 14,
                
                bold: false,
                fontWeight: 'normal',

            },

            chartArea: {
                width: "90%"

            },

            hAxis: {
                slantedText: true,
                slantedTextAngle: 27,
                title: "Zones",
                fontSize: 14,
                bold: false,
                 fontWeight: 'normal',

                color: '#FFF',

                minValue: 0,

                titleTextStyle: {

                    color: '#b4b4b4',
                    fontSize: 14,
                    bold: false,
                    fontWeight: 'normal',
                    fontName: 'Montserrat", serif;' 

                },

                textStyle: {

                    fontSize: 14,

                    bold: false,
                     fontWeight: 'normal',
                    color: '#b4b4b4',

                    fontName: 'Montserrat", serif;' 

                }

            },

            vAxis: {

                title: "Species",
                
                color: '#FFF',

                titleTextStyle: {

                    color: '#b4b4b4',
                    fontSize: 14,
                    bold: false,
                     fontWeight: 'normal',
                    fontName: 'Montserrat", serif;' 

                },

                textStyle: {

                    fontSize: 14,

                    bold: false,
                     fontWeight: 'normal',

                    color: '#b4b4b4',

                    fontName: 'Montserrat", serif;' 

                    

                }

            },

            animation: {

                startup: true,

                duration: 1500,

                easing: "out"

            },

            bar: {

                groupWidth: "70%"

            },

            is3D: true,

            legend: {

                position: "none"

            } // Hide legend

        };



        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_Bio_Geographic"));

        chart.draw(data, options);

    }



    window.addEventListener("resize", drawChart);

</script>

@include('footer')

