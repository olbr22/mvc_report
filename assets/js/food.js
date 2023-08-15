import Chart from 'chart.js/auto';

function food() {
    const data = dataFromDatabaseFood;
    console.log(data);

    new Chart(
        document.getElementById('food'),
        {
        data: {
            labels: [
                'Hushåll',
                'Hushåll inkl. mat och dryck i avlopp',
                'Offentlig måltid',
                'Restauranger',
                'Livsmedelsbutiker',
                'Grossister',
                'Livsmedelsindustri',
                'Primärproduktion'
            ],
            datasets: [
                {
                    type: 'bar',
                    label: '2012',
                    data: data.filter((row) => row.year == 2012).map(row => row.value),
                    backgroundColor: [
                        'rgba(100, 50, 100, 0.7)'
                    ],
                    borderColor: [
                        'rgb(100, 50, 100)'
                    ]
                },
                {
                    type: 'bar',
                    label: '2014',
                    data: data.filter((row) => row.year == 2014).map(row => row.value),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)'
                    ]
                },
                {
                    type: 'bar',
                    label: '2016',
                    data: data.filter((row) => row.year == 2016).map(row => row.value),
                    backgroundColor: [
                        'rgba(255, 159, 15, 0.7)'
                    ],
                    borderColor: [
                        'rgb(255, 159, 15)'
                    ]
                },
                {
                    type: 'bar',
                    label: '2018',
                    data: data.filter((row) => row.year == 2018).map(row => row.value),
                    backgroundColor: [
                        'rgba(255, 5, 64, 0.7)'
                    ],
                    borderColor: [
                        'rgb(255, 5, 64)'
                    ]
                },
                {
                    type: 'bar',
                    label: '2020',
                    data: data.filter((row) => row.year == 2020).map(row => row.value),
                    backgroundColor: [
                        'rgba(80, 200, 80, 0.7)'
                    ],
                    borderColor: [
                        'rgb(80, 200, 80)'
                    ]
                },
                {
                    type: 'bar',
                    label: '2021',
                    data: data.filter((row) => row.year == 2021).map(row => row.value),
                    backgroundColor: [
                        'rgba(80, 200, 200, 0.7)'
                    ],
                    borderColor: [
                        'rgb(80, 200, 200)'
                    ]
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
                    // stacked: true,
                    ticks: {
                    }
                },
                y: {
                    // stacked: true,
                    beginAtZero: true,
                    title: {
                        text: 'Ton',
                        display: true
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
                    text: 'Livsmedelsavfallsmängder i Sverige fördelat på led i livsmedelskedjan',
                    position: 'bottom'
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        pointStyle: 'circle'
                    }
                }
            }
        }
});
    };

export {food};