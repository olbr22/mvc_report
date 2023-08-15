import Chart from 'chart.js/auto';

function textile() {
    const data = dataFromDatabaseTextile;
    console.log(data);

    new Chart(
        document.getElementById('textile'),
        {
        data: {
            labels: data.map(row => row.year),
            datasets: [{
                type: 'bar',
                label: 'Hemtextilier',
                data: data.map(row => row.household),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)'
                ]
            },{
                type: 'bar',
                label: 'Kläder unisex',
                data: data.map(row => row.unisex),
                backgroundColor: [
                    'rgba(255, 159, 255, 0.7)'
                ],
                borderColor: [
                    'rgb(255, 159, 255)'
                ]
            },
            {
                type: 'bar',
                label: 'Kläder kvinnor/flickor',
                data: data.map(row => row.female),
                backgroundColor: [
                    'rgba(255, 250, 64, 0.7)'
                ],
                borderColor: [
                    'rgb(255, 250, 64)'
                ]
            },
            {
                type: 'bar',
                label: 'Kläder män/pojkar',
                data: data.map(row => row.male),
                backgroundColor: [
                    'rgba(0, 250, 64, 0.7)'
                ],
                borderColor: [
                    'rgb(0, 250, 64)'
                ]
            },
            {
                type: 'line',
                label: 'Total netto-varuimport',
                data: data.map(row => row.total),
                fill: false,
                borderColor: 'rgb(54, 162, 235)'
            }
            ]
        },
        options: {
            responsive: true,
            // maintainAspectRatio: false,
            datasets: {
                bar: {
                borderWidth: 2
                }
            },
            scales: {
                x: {
                    stacked: true,
                    ticks: {
                        // For a category axis, the val is the index so the lookup via getLabelForValue is needed
                        callback: function(val, index) {
                          // Hide every 2nd tick label
                            return index % 2 === 0 ? this.getLabelForValue(val) : '';
                        }
                    }
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    title: {
                        text: 'Kilogram',
                        display: true
                    },
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, ticks) {
                            return value + ' kg';
                        }
                    }
                    
                }
            },
            plugins: {
                tooltip: {
                    enabled: true,
                    yAlign: 'bottom',
                    usePointStyle: true
                },
                title: {
                    display: true,
                    text: 'Nettoinflöde (import minus export) av nya textilier per person 2000 - 2022',
                    position: 'bottom'
                }
            }
        }
});
    };

export {textile};