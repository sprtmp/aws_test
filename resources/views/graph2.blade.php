<style>
.svg svg{
    filter: grayscale(100%) !important;
}
</style>

@include('header')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<main class="graph-wrap container-fluid p-0">

<div class="page-title my-4">
    <h1 data-aos="fade-in">Statistics</h1>
</div>
   <div class="row d-flex align-items-center justify-content-center g-4 mx-3 mb-5">
        <div class="col-lg-8 mt-5" data-aos="fade-up" data-aos-easing="linear">
            <div class="justify-content-center mt-4 graph">
                <p class="graph_heading">TAXONOMIC SUMMARY</p>
                <div id="chart_div_TAXONOMIC" class="svg w-100" style="height: 450px;"></div>
            </div>
        </div>

        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-easing="linear">
            <div class="justify-content-center mt-4 graph">
                <p class="graph_heading">Decade Wise Species Descriptions</p>
                <div id="chart_div_species" class="svg w-100" style="height: 450px;"></div>
            </div>
        </div>

        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-easing="linear">
            <div class="justify-content-center mt-4 graph">
                <p class="graph_heading">Authors Contribution</p>
                <div id="chart_div_Authors_Contribution" class="svg w-100" style="height: 440px;"></div>
            </div>
        </div>

        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-easing="linear">
            <div class="justify-content-center mt-4 graph">
                <p class="graph_heading">Diversity in States</p>
                <div id="chart_div_diversity" class="svg w-100" style="height: 440px;"></div>
            </div>
        </div>

        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-easing="linear">
            <div class="justify-content-center mt-4 graph">
                <p class="graph_heading">Bio Geographic Zones/Zones</p>
                <div id="chart_div_Bio_Geographic" class="svg w-100" style="height: 440px;"></div>
            </div>
        </div>
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
            ['1751-1760', 13, '#FF6384'],
            ['1761-1770', 7, '#36A2EB'],
            ['1771-1780', 29, '#FFCE56'],
            ['1781-1790', 8, '#4BC0C0'],
            ['1791-1800', 19, '#9966FF'],
            ['1801-1810', 4, '#C9CBCF'],
            ['1811-1820', 6, '#FF9F40'],
            ['1821-1830', 7, '#8E5EA2'],
            ['1831-1840', 12, '#3CBA9F'],
            ['1841-1850', 35, '#E8C3B9'],
            ['1851-1860', 220, '#36A2EB'],
            ['1861-1870', 311, '#4BC0C0'],
            ['1871-1880', 247, '#FF6384'],
            ['1881-1890', 253, '#9966FF'],
            ['1891-1900', 592, '#8E5EA2']
        ]);

        var options = {
            title: 'Species Count by Time Period',
            backgroundColor: '#000000',
            chartArea: {
                width: '85%',
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
                slantedTextAngle: 50,
                titleTextStyle: {
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
                textStyle: {
                    fontSize: 10,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                }, // Smaller font to fit all text
                maxLines: 3 // Prevents text from being cut off
            },
            vAxis: {
                title: 'Species',
                titleTextStyle: {
                    color: '#b4b4b4'
                },
                textStyle: {
                    fontSize: 10,
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

    // Redraw chart on window resize
    window.addEventListener('resize', function() {
        drawChart();
    });
</script>

<!--Species chart script start-->






<!-- Diversity chart script start-->

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
            ["West Bengal", 1333, "#3498db"],
            ["Uttarakhand", 754, "#2ecc71"],
            ["Uttar Pradesh", 140, "#e74c3c"],
            ["Tamil Nadu", 890, "#9b59b6"],
            ["Rajasthan", 1731, "#1abc9c"],
            ["Meghalaya", 1963, "#34495e"],
            ["Kerala", 607, "#f39c12"],
            ["Karnataka", 402, "#d35400"],
            ["Haryana", 784, "#8e44ad"],
            ["Assam", 891, "#16a085"],
            ["Arunachal Pradesh", 717, "#2980b9"],
            ["Andaman & Nicobar", 363, "#c0392b"]
        ]);

        var options = {
            title: "DIVERSITY IN STATES",
            backgroundColor: '#000000',
            titleTextStyle: {
                fontSize: 18,
                bold: true
            },
            chartArea: {
                width: "80%"
            },
            hAxis: {
                title: "States",
                minValue: 0,
                titleTextStyle: {
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
                textStyle: {
                    fontSize: 10,
                    bold: true,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                }
            },
            vAxis: {
                title: "Species",
                titleTextStyle: {
                    color: '#b4b4b4'
                },
                
                textStyle: {
                    fontSize: 10,
                    bold: true,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;' 
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
            }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_diversity"));
        chart.draw(data, options);
    }

    window.addEventListener("resize", drawChart);
</script>

<!-- Diversity chart script end-->




<!-- TAXONOMIC SUMMARY  chart script start-->

<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Researcher", "Species Count", {
                role: "style"
            }],
             ["Superfamilies", 0, "#3498db"],
            ["Families", 0, "#1abc9c"],
            ["Genera", 1093, "#8e44ad"],
            ["Species", 3490, "#2ecc71"],
        ]);

        var options = {
            title: "Species Discovered by Researchers",
            backgroundColor: '#000000',
            chartArea: {
                width: "70%"
            },
            hAxis: {
                title: "Species",
                minValue: 0,
                titleTextStyle: {
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
                textStyle: {
                    fontSize: 10,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
            },
            vAxis: {
                title: "Researcher",
                titleTextStyle: {
                    color: '#b4b4b4'
                },
                textStyle: {
                    fontSize: 10,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
            },
            animation: {
                startup: true,
                duration: 1000,
                easing: "out"
            },
            bar: {
                groupWidth: "75%"
            },
            is3D: true,
            legend: {
                position: "none"
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById("chart_div_TAXONOMIC"));
        chart.draw(data, options);
    }

    window.addEventListener("resize", drawChart);
</script>

<!-- TAXONOMIC SUMMARY  chart script end-->




<!-- Bio Geographic Zones chart script start -->

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
            ["Central India", 22, "#34495e"],
            ["Coasts", 320, "#2ecc71"],
            ["Deccan Peninsula", 734, "#e74c3c"],
            ["Desert", 34, "#f1c40f"],
            ["Eastern India", 18, "#9b59b6"],
            ["Gangetic Plain", 535, "#1abc9c"],
            ["India", 292, "#3498db"],
            ["Indian Himalaya", 3079, "#e74c3c"],
            ["Islands", 356, "#16a085"],
            ["North East", 2843, "#8e44ad"],
            ["North East Himalaya", 189, "#d35400"],
            ["North India", 194, "#2980b9"],
            ["North West Himalaya", 188, "#c0392b"],
            ["North West India", 199, "#27ae60"],
            ["Semi Arid", 57, "#7f8c8d"],
            ["South India", 169, "#f39c12"],
            ["Throughout India", 203, "#d35400"],
            ["Trans Himalaya", 79, "#e67e22"],
            ["Western Ghats", 1237, "#95a5a6"]
        ]);

        var options = {
            title: "BIO GEOGRAPHIC ZONES/ZONES",
            backgroundColor: '#000000',
            titleTextStyle: {
                fontSize: 18,
                bold: true
            },
            chartArea: {
                width: "80%"
            },
            hAxis: {
                title: "Zones",
                color: '#FFF',
                minValue: 0,
                titleTextStyle: {
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
                textStyle: {
                    fontSize: 10,
                    bold: true,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                }
            },
            vAxis: {
                title: "Species",
                color: '#FFF',
                titleTextStyle: {
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;'
                },
                textStyle: {
                    fontSize: 10,
                    bold: true,
                    color: '#b4b4b4',
                    fontName: 'Times New Roman, Times, serif;' 
                    
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


<!-- Bio Geographic Zones chart script end -->



<!-- Authors Contribution Zones chart script start -->
<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Author", "Species", { role: "style" }],
                ["Ahmad", 1, "#34495e"],
                ["Arensburger", 1, "#2ecc71"],
                ["Arora", 11, "#e74c3c"],
                ["Bae", 2, "#f1c40f"],
                ["Banziger", 1, "#9b59b6"],
                ["Basu", 1, "#1abc9c"],
                ["Bayarsikhan", 1, "#3498db"],
                ["Becker", 1, "#e67e22"],
                ["Behere", 2, "#8e44ad"],
                ["Bennett", 1, "#d35400"],
                ["Baker", 1, "#2980b9"],
                ["Bhattacharyya", 1, "#c0392b"],
                ["Bishi", 1, "#27ae60"],
                ["Bleszynski", 20, "#2ecc71"],
                ["Boisduval", 6, "#95a5a6"]
            ]);

            var options = {
                title: "Authors Contribution",
                backgroundColor: '#000000',
                titleTextStyle: { fontSize: 18, bold: true },
                chartArea: {width: "80%"},
                hAxis: {
                    title: "Authors",
                    minValue: 0,
                    titleTextStyle: {
                      color: '#b4b4b4',
                      fontName: 'Times New Roman, Times, serif;'
                    },
                    textStyle: { 
                        fontSize: 10,
                        bold: true,
                        color: '#b4b4b4',
                        fontName: 'Times New Roman, Times, serif;' 
                    }
                },
                vAxis: {
                    title: "Species",
                    titleTextStyle: {
                      color: '#b4b4b4'
                    } , 
                    textStyle: { 
                        fontSize: 10,
                        bold: true,
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
                legend: { position: "none" } // Hide legend
            };

            var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_Authors_Contribution"));
            chart.draw(data, options);
        }

        window.addEventListener("resize", drawChart);
    </script>

<!-- Authors Contribution Zones chart script end -->

@include('footer')