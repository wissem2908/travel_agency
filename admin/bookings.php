<?php
include ('includes/header.php');
?>
        <!-- Main Content -->
        <main class="main-content">
                <section class="page-section" id="bookingsPage">
                <div class="page-header">
                    <h1>Bookings Management</h1>
                    <p>View and manage all adventure bookings.</p>
                </div>

                <div class="content-card">
                    <div class="card-header">
                        <h2>All Bookings</h2>
                        <div style="display: flex; gap: 10px;">
                            <select style="padding: 10px; border: 2px solid #e8e4db; border-radius: 3px; font-family: 'Crimson Pro', serif;">
                                <option>All Status</option>
                                <option>Confirmed</option>
                                <option>Pending</option>
                                <option>Cancelled</option>
                            </select>
                            <button class="btn btn-primary">Export CSV</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Adventure</th>
                                    <th>Date</th>
                                    <th>Guests</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#BK-2847</td>
                                    <td>Sarah Mitchell</td>
                                    <td>sarah.m@email.com</td>
                                    <td>Alpine Heights Trek</td>
                                    <td>Feb 15, 2026</td>
                                    <td>2</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2846</td>
                                    <td>James Anderson</td>
                                    <td>j.anderson@email.com</td>
                                    <td>Glacier Expedition</td>
                                    <td>Feb 18, 2026</td>
                                    <td>4</td>
                                    <td>$1,850</td>
                                    <td><span class="badge badge-pending">Pending</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2845</td>
                                    <td>Emily Chen</td>
                                    <td>emily.chen@email.com</td>
                                    <td>Forest Sanctuary</td>
                                    <td>Feb 12, 2026</td>
                                    <td>3</td>
                                    <td>$650</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2844</td>
                                    <td>Michael Torres</td>
                                    <td>m.torres@email.com</td>
                                    <td>Summit Challenge</td>
                                    <td>Feb 20, 2026</td>
                                    <td>1</td>
                                    <td>$2,100</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2843</td>
                                    <td>Lisa Wong</td>
                                    <td>l.wong@email.com</td>
                                    <td>Riverside Escape</td>
                                    <td>Feb 10, 2026</td>
                                    <td>2</td>
                                    <td>$450</td>
                                    <td><span class="badge badge-cancelled">Cancelled</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2842</td>
                                    <td>David Kim</td>
                                    <td>d.kim@email.com</td>
                                    <td>Wilderness Explorer</td>
                                    <td>Feb 22, 2026</td>
                                    <td>5</td>
                                    <td>$850</td>
                                    <td><span class="badge badge-confirmed">Confirmed</span></td>
                                    <td><button class="icon-btn">View</button></td>
                                </tr>
                                <tr>
                                    <td>#BK-2841</td>
                                    <td>Rachel Green</td>
                                    <td>r.green@email.com</td>
                                    <td>Alpine Heights Trek</td>
                                    <td>Feb 25, 2026</td>
                                    <td>2</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-pending">Pending</span></td>
                                    <td><button class="icon-btn">View</button></td>
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