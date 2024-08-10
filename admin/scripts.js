// Placeholder data for the dashboard
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('sales-metrics').textContent = 'Total Sales: $5000';
    document.getElementById('stock-levels').textContent = 'Stock Levels: 150';
    document.getElementById('recent-activity').textContent = 'Recent Activity: Stock updated for Model X';
    document.getElementById('task-list').textContent = 'Tasks: Review new inventory';
    
    // Simulate navigation
    document.querySelectorAll('aside nav ul li a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('main').innerHTML = `<h1>${this.textContent}</h1>`;
        });
    });
});
