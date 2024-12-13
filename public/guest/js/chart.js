document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('myChart').getContext('2d');

    const myChart = new Chart(ctx, {
        type: 'polarArea', 
        data: {
            labels: ['Jumlah kos keseluruhan', 'Jumlah derma diterima', 'Jumlah derma diperlukan' ], // Label sumbu X
            datasets: [{
                label: 'Total',
                data: [512000, 73000, 439000], // Data untuk chart
                backgroundColor: [
                    'rgba(0, 154, 255, 0.2)',
                    'rgba(26, 255, 0, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(0, 154, 255, 1)',
                    'rgba(26, 255, 0, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
