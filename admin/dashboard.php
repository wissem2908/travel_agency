<?php
include('includes/header.php');
?>
<!-- Main Content -->
<main class="main-content">
    <section class="page-section active" id="dashboardPage">
        <div class="page-header">
            <h1>Dashboard</h1>
            <p>Welcome back! Here's what's happening with your adventures.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-label">Total Bookings</div>
                        <div class="stat-value">2,847</div>
                        <div class="stat-change positive">↑ 12% from last month</div>
                    </div>
                    <div class="stat-card orange">
                        <div class="stat-label">Revenue</div>
                        <div class="stat-value">$284K</div>
                        <div class="stat-change positive">↑ 8% from last month</div>
                    </div>
                    <div class="stat-card green">
                        <div class="stat-label">Active Adventures</div>
                        <div class="stat-value">24</div>
                        <div class="stat-change positive">↑ 3 new this month</div>
                    </div>
                    <div class="stat-card red">
                        <div class="stat-label">Pending Requests</div>
                        <div class="stat-value">47</div>
                        <div class="stat-change negative">Needs attention</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="content-card">
                    <div class="card-header">
                        <h2>Bookings Status</h2>
                        <!-- <button class="btn btn-primary">View All</button> -->
                    </div>
                    <div class="card-body">
                        <canvas id="bookingsStatusChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="content-card ">
                    <div class="card-header">
                        <h2>Bookings by Month (Stacked)</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="groupedBookingsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main>
</div>


<?php
include('includes/footer.php');
?>

<script>
    $(document).ready(function() {
        function loadStats() {
            $.ajax({
                url: 'assets/php/dashboard_stats.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.error) {
                        console.error(data.error);
                        return;
                    }

                    $('.stat-card').eq(0).find('.stat-value').text(data.totalBookings);
                    $('.stat-card').eq(0).find('.stat-change')
                        .text((data.bookingChange >= 0 ? '↑ ' : '↓ ') + Math.abs(data.bookingChange) + '% from last month')
                        .removeClass('positive negative')
                        .addClass(data.bookingChange >= 0 ? 'positive' : 'negative');

                    $('.stat-card').eq(1).find('.stat-value').text('$' + formatNumber(data.totalRevenue));
                    $('.stat-card').eq(1).find('.stat-change')
                        .text((data.revenueChange >= 0 ? '↑ ' : '↓ ') + Math.abs(data.revenueChange) + '% from last month')
                        .removeClass('positive negative')
                        .addClass(data.revenueChange >= 0 ? 'positive' : 'negative');

                    $('.stat-card').eq(2).find('.stat-value').text(data.activeAdventures);
                    $('.stat-card').eq(3).find('.stat-value').text(data.pendingRequests);
                },
                error: function(err) {
                    console.error(err);
                }
            });
        }

        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        loadStats();
    });





    $(document).ready(function() {
        $.ajax({
            url: 'assets/php/bookings_status.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data.error) {
                    console.error(data.error);
                    return;
                }

                let labels = [];
                let counts = [];
                let colors = [];

                data.forEach(item => {
                    labels.push(item.status);
                    counts.push(item.total);

                    // Assign color based on status
                    switch (item.status.toLowerCase()) {
                        case 'confirmed':
                            colors.push('rgba(82, 166, 117, 0.7)');
                            break;
                        case 'pending':
                            colors.push('rgba(217, 167, 56, 0.7) ');
                            break;
                        case 'cancelled':
                            colors.push('rgba(196, 82, 60, 0.7)');
                            break;
                        default:
                            colors.push('rgba(100, 100, 100, 0.7)');
                    }
                });

                const ctx = document.getElementById('bookingsStatusChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: counts,
                            backgroundColor: colors,
                            borderColor: '#fff',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.label || '';
                                        let value = context.raw || 0;
                                        return `${label}: ${value}`;
                                    }
                                }
                            }
                        }
                    }
                });
            },
            error: function(err) {
                console.error(err);
            }
        });
    });


$(document).ready(function () {

$.ajax({
    url: 'assets/php/bookings_stacked_stats.php',
    method: 'GET',
    dataType: 'json',
    success: function(res) {

        const ctx = document.getElementById('groupedBookingsChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: res.months,
                datasets: [
                    {
                        label: 'Pending',
                        data: res.pending,
                        backgroundColor: 'rgba(217, 167, 56, 0.7)',   // yellow
                        borderColor: 'rgba(217, 167, 56, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Confirmed',
                        data: res.confirmed,
                        backgroundColor: 'rgba(82, 166, 117, 0.7)',   // green
                        borderColor: 'rgba(82, 166, 117, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Cancelled',
                        data: res.cancelled,
                        backgroundColor: 'rgba(196, 82, 60, 0.7)',    // red
                        borderColor: 'rgba(196, 82, 60, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    x: {
                        stacked: false
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    }
});


});

</script>