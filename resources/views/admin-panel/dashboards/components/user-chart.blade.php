<!-- Chart -->

<!--
    <div class="chart-container flex-grow-1 h-275px">
        <canvas id="reviewsChart"></canvas>
    </div>
-->

<div class="chart-container flex-grow-1 h-275px">
    <canvas id="myChart" width="810" height="275"></canvas>
</div>

<script>
    var daysOfWeek = @json($chart['daysOfWeek']);
    var counts = @json($chart['counts']);

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: daysOfWeek,
            datasets: [{
                label: 'Reviews',
                data: counts,
                backgroundColor: '#5083C1',
                borderRadius: 30,
            }]
        },
        options: {
            hoverBackgroundColor: '#FFFFFF',
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        callback: (value, index, values) => {
                            if (Number.isInteger(value)) {
                                return value;
                            }
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: context => {
                            return context.parsed.y;
                        },
                        labelColor: context => {
                            return {
                                backgroundColor: '#5083C1'
                            };
                        }
                    }
                }
            },
            indexAxis: 'x',
            barPercentage: 0.2,
        }
    });
</script>