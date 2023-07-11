<!-- Chart -->
<!--
<div class="chart-container flex-grow-1 h-275px">
    <canvas id="salesChart"></canvas>
</div>
-->

<div class="chart-container flex-grow-1 h-275px">
    <canvas id="myChart" width="1000" height="275"></canvas>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',

        // The data for our dataset
        data: {
            labels: @json($chart['namesOfMounthes']),
            datasets: [{
                    label: 'PAID',
                    data: @json($chart['countsPaid']),
                    backgroundColor: '#20BBC7',
                    borderRadius: 30
                },
                {
                    label: 'FREE',
                    data: @json($chart['countsFree']),
                    backgroundColor: '#EDEEF0'
                }
            ]
        },

        // Configuration options
        options: {
            scales: {
                x: {
                    stacked: true,
                    grid: {
                        display: false
                    }
                },
                y: {
                    stacked: true,
                    grid: {
                        display: false
                    },
                    ticks: {
                        callback: (value, index, values) => {
                            console.log(value);
                            //return value > 0 ? (value < 1000 ? value / 100 : ((value < 1000000) ? Math.floor(value / 1000) + 'k' : Math.floor(value / 1000000) + 'M')) : value;
                            if (value === 1000) {
                                return '1k';
                            } else if (value > 1000 && value < 1000000) {
                                return (Math.floor(value / 1000)) + 'k';
                            } else if (value >= 1000000) {
                                return (Math.floor(value / 1000000)) + 'M';
                            } else {
                                return value ;
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
                    mode: 'index',
                    callbacks: {
                        label: context => {
                            return new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD'
                            }).format(context.parsed.y);
                        },
                        labelColor: context => {
                            return {
                                backgroundColor: context.dataset.backgroundColor
                            };
                        }
                    }
                },
            },
            indexAxis: 'x',
            categoryPercentage: 0.2
        }
    });
</script>