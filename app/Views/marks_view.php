<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Visualization</title>
    <!-- Include ApexCharts library -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <a href="<?= base_url('students')?>">back</a>
    <h1>Student Marks Visualization</h1>

    <!-- Container for ApexCharts -->
    <div id="chart"></div>

    <script>
        // Retrieve chart data passed from controller
        var chartData = <?= json_encode($chartData) ?>;

        // Create ApexCharts instance
        var options = {
            chart: {
                type: 'line',
                height: 350
            },
            series: [{
                name: 'Marks',
                data: chartData
            }],
            xaxis: {
                type: 'category', // Use category type for x-axis (months)
                labels: {
                    rotate: -45 // Rotate labels for better readability
                }
            },
            yaxis: {
                min: 0, // Min value for y-axis
                max: 100 // Max value for y-axis
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>
