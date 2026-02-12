<?php
include('includes/header.php');
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
                <table  id="bookingsTable" class="data-table display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Customer</th>
                            <th>phone number</th>
                            <th>Adventure</th>
                            <th>Date of birth</th>
                            <th>Guests</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
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

      
    function loadBooking() {
        $.ajax({
            url: 'assets/php/bookings/fetch_bookings.php',
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                var html = '';

                for (var i = 0; i < data.length; i++) {
                    var statusClass = 'badge-' + data[i].status.toLowerCase().replace(/\s+/g, '-');
                    html += `
                        <tr>
                            <td>#BK-${data[i].booking_id}</td>
                            <td>${data[i].full_name}</td>
                            <td>${data[i].phone}</td>
                            <td>${data[i].adventure_title}</td>
                            <td>${data[i].dob}</td>
                            <td>${data[i].num_people}</td>
                            <td>$${data[i].adventure_price}</td>
                            <td><span class="badge ${statusClass}">${data[i].status}</span></td>
                            <td>
                                <button class="icon-btn edit-booking" data-id="${data[i].booking_id}">✏️ Edit</button>
                                <button class="icon-btn delete-booking" data-id="${data[i].booking_id}">🗑️ Delete</button>
                            </td>
                        </tr>
                    `;
                }

                $('#bookingsTable tbody').html(html);

                // Initialize DataTables (or destroy if already initialized)
                if ($.fn.DataTable.isDataTable('#bookingsTable')) {
                    $('#bookingsTable').DataTable().destroy();
                }

                $('#bookingsTable').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [5, 10, 25, 50],
                    order: [[0, 'desc']], // Order by Booking ID descending
                });
            },
            error: function(err) {
                console.error(err);
            }
        });
    }

    loadBooking();

    })
</script>