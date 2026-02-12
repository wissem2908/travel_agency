<?php
include ('includes/header.php');
?>
        <!-- Main Content -->
        <main class="main-content">
              <section class="page-section active" id="dashboardPage">
                <div class="page-header">
                    <h1>Dashboard</h1>
                    <p>Welcome back! Here's what's happening with your adventures.</p>
                </div>

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

                <div class="content-card">
                    <div class="card-header">
                        <h2>Recent Bookings</h2>
                        <button class="btn btn-primary">View All</button>
                    </div>
                    <div class="card-body">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Adventure</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#BK-2847</td>
                                    <td>Sarah Mitchell</td>
                                    <td>Alpine Heights Trek</td>
                                    <td>Feb 15, 2026</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td>#BK-2846</td>
                                    <td>James Anderson</td>
                                    <td>Glacier Expedition</td>
                                    <td>Feb 18, 2026</td>
                                    <td>$1,850</td>
                                    <td><span class="badge badge-pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#BK-2845</td>
                                    <td>Emily Chen</td>
                                    <td>Forest Sanctuary</td>
                                    <td>Feb 12, 2026</td>
                                    <td>$650</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td>#BK-2844</td>
                                    <td>Michael Torres</td>
                                    <td>Summit Challenge</td>
                                    <td>Feb 20, 2026</td>
                                    <td>$2,100</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td>#BK-2843</td>
                                    <td>Lisa Wong</td>
                                    <td>Riverside Escape</td>
                                    <td>Feb 10, 2026</td>
                                    <td>$450</td>
                                    <td><span class="badge badge-cancelled">Cancelled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
      
        </main>
    </div>

   
<?php
include ('includes/footer.php');
?>