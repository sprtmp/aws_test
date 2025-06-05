@include('header')



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<main class="graph-wrap container-fluid p-0">

    <div class="justify-content-center mt-5 graph">



        <p class="graph_heading">Decade Wise Species Descriptions</p>



        <div id="chart_div_species" class="svg w-100" style="height: 450px; font-weight: 400;"></div>



    </div>

</main>







<!-- Species chart script start-->

<script type="text/javascript">

    google.charts.load('current', {



        packages: ['corechart', 'bar']



    });

    google.charts.setOnLoadCallback(drawChart);



    function drawChart() {

        var data = google.visualization.arrayToDataTable([

            ['Time Period', 'Species', {

                role: 'style'

            }],

            <?php



            $color = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#C9CBCF', '#FF9F40', '#8E5EA2', '#3CBA9F', '#E8C3B'];

            // $colorCount = count($color); 

            foreach ($data as $k => $dt) {

            ?>

                ['<?= $dt->decade; ?>', <?= $dt->countdata; ?>, '<?= $color[$k % count($color)]; ?>'],

            <?php } ?>



        ]);



        var options = {

            title: 'Species Count by Time Period',
            fontSize: 14,
            backgroundColor: '#000000',

            chartArea: {

                width: '90%',

                height: '70%'

            }, // Adjust chart area

            width: '100%', // Make it responsive

            height: 450, // Maintain compact size

            is3D: true,

            animation: {

                startup: true,

                duration: 1000, // Duration for animation

                easing: 'out',

            },

            bar: {

                groupWidth: "70%"

            }, // Adjust bar width

            hAxis: {

                title: 'Time Period',

                slantedText: true, // Enable rotation

                slantedTextAngle: 27,
                

                titleTextStyle: {

                    color: '#b4b4b4',
                    fontWeight: '300',
                    fontSize: 14,
                    fontName: 'Times New Roman, Times, serif;'

                },

                textStyle: {

                    fontSize: 14,
                    fontWeight: '300',
                    color: '#b4b4b4',

                    fontName: 'Times New Roman, Times, serif;'

                }, // Smaller font to fit all text

                maxLines: 3 // Prevents text from being cut off

            },

            vAxis: {

                title: 'Species',

                titleTextStyle: {
                    fontSize: 14,
                    color: '#b4b4b4',
                    fontWeight: '300' 

                },

                textStyle: {

                    fontSize: 14,
                    fontWeight: '300',
                    color: '#b4b4b4',

                    fontName: 'Times New Roman, Times, serif;'

                },

            },

            legend: {

                position: "none"

            }

        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_species'));

        chart.draw(data, options);

    }

</script>



@include('footer')