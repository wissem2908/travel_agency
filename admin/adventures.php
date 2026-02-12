<?php
include('includes/header.php');
?>
<!-- Main Content -->
<main class="main-content">
    <section class="page-section" id="adventuresPage">
        <div class="page-header">
            <h1>Featured Adventures</h1>
            <p>Manage your adventure offerings and packages.</p>
        </div>

        <div style="margin-bottom: 30px;">
            <button class="btn btn-primary" onclick="openAdventureModal()">+ Add New Adventure</button>
        </div>

        <div class="adventures-grid" id="adventuresGrid">
            <div class="adventure-card">
                <div class="adventure-image">ALPINE HEIGHTS</div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Alpine Heights Trek</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$1,200</div>
                        <span class="badge badge-active">Active</span>
                    </div>
                    <p>5 Days • Moderate • 12 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>

            <div class="adventure-card">
                <div class="adventure-image" style="background: linear-gradient(135deg, #3d6f5d 0%, #52a675 100%);">FOREST SANCTUARY</div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Forest Sanctuary</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$650</div>
                        <span class="badge badge-active">Active</span>
                    </div>
                    <p>3 Days • Easy • 8 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>

            <div class="adventure-card">
                <div class="adventure-image" style="background: linear-gradient(135deg, #d97638 0%, #c4523c 100%);">SUMMIT CHALLENGE</div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Summit Challenge</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$2,100</div>
                        <span class="badge badge-new">New</span>
                    </div>
                    <p>7 Days • Difficult • 6 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>

            <div class="adventure-card">
                <div class="adventure-image" style="background: linear-gradient(135deg, #8b6f47 0%, #c9a961 100%);">RIVERSIDE ESCAPE</div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Riverside Escape</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$450</div>
                        <span class="badge badge-active">Active</span>
                    </div>
                    <p>2 Days • Easy • 15 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>

            <div class="adventure-card">
                <div class="adventure-image" style="background: url('assets/images/01.png'); background-size: cover; background-position: center;"></div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Wilderness Explorer</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$850</div>
                        <span class="badge badge-active">Active</span>
                    </div>
                    <p>4 Days • Moderate • 10 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>

            <div class="adventure-card">
                <div class="adventure-image" style="background: linear-gradient(135deg, #52a675 0%, #3d6f5d 100%);">GLACIER EXPEDITION</div>
                <div class="adventure-content">
                    <h3 class="adventure-title">Glacier Expedition</h3>
                    <div class="adventure-meta">
                        <div class="adventure-price">$1,850</div>
                        <span class="badge badge-active">Active</span>
                    </div>
                    <p>6 Days • Difficult • 8 Participants</p>
                    <div class="adventure-actions">
                        <button class="icon-btn">✏️ Edit</button>
                        <button class="icon-btn">👁️ View</button>
                        <button class="icon-btn">🗑️ Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add Adventure Modal -->
    <div class="modal" id="adventureModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Adventure</h2>
            </div>
            <form id="adventureForm" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="input-group">
                        <label>Adventure Title</label>
                        <input type="text" name="title" placeholder="e.g., Mountain Peak Expedition" required>
                    </div>
                    <div class="input-group">
                        <label>Price (USD)</label>
                        <input type="number" name="price" placeholder="1200" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label>Duration (Days)</label>
                        <input type="number" name="duration_days" placeholder="5" required>
                    </div>
                    <div class="input-group">
                        <label>Difficulty</label>
                        <select name="difficulty" required>
                            <option value="">Select difficulty</option>
                            <option value="Easy">Easy</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Difficult">Difficult</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label>Max Participants</label>
                        <input type="number" name="max_participants" placeholder="12" required>
                    </div>
                    <div class="input-group">
                        <label>Status</label>
                        <select name="status" required>
                            <option value="">Select status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Coming Soon">Coming Soon</option>
                        </select>
                    </div>
                </div>

                <div class="input-group">
                    <label>Description</label>
                    <textarea name="description" placeholder="Enter adventure description..." required></textarea>
                </div>

                <div class="input-group">
                    <label>Main Image</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeAdventureModal()">Cancel</button>
                    <button type="submit" class="btn btn-success">Create Adventure</button>
                </div>
            </form>
        </div>
    </div>


    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirm Deletion</h2>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this adventure?</p>
            </div>
            <div class="modal-actions">
                <button type="button" class="btn btn-secondary" id="cancelDelete">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
            </div>
        </div>
    </div>


    <!--            ************************************ edit adventure modal *******************************************               -->

    <div class="modal" id="editAdventureModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Adventure</h2>
            </div>
            <form id="editAdventureForm" enctype="multipart/form-data">
                <input type="hidden" name="id" id="editAdventureId">

                <div class="form-row">
                    <div class="input-group">
                        <label>Adventure Title</label>
                        <input type="text" name="title" id="editTitle" required>
                    </div>
                    <div class="input-group">
                        <label>Price (USD)</label>
                        <input type="number" name="price" id="editPrice" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label>Duration (Days)</label>
                        <input type="number" name="duration_days" id="editDuration" required>
                    </div>
                    <div class="input-group">
                        <label>Difficulty</label>
                        <select name="difficulty" id="editDifficulty" required>
                            <option value="">Select difficulty</option>
                            <option value="Easy">Easy</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Difficult">Difficult</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label>Max Participants</label>
                        <input type="number" name="max_participants" id="editMaxParticipants" required>
                    </div>
                    <div class="input-group">
                        <label>Status</label>
                        <select name="status" id="editStatus" required>
                            <option value="">Select status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Coming Soon">Coming Soon</option>
                        </select>
                    </div>
                </div>

                <div class="input-group">
                    <label>Description</label>
                    <textarea name="description" id="editDescription" required></textarea>
                </div>

                <div class="input-group">
                    <label>Change Image</label>
                    <input type="file" name="image" id="editImage" accept="image/*">
                </div>
                <div class="input-group">
                    <label>Current Image</label>
                    <div id="currentImagePreview" style="margin-top:10px;">
                        <img src="" alt="Current Adventure Image" style="width:150px; height:auto; border-radius:6px; object-fit:cover;" />
                    </div>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeEditAdventureModal()">Cancel</button>
                    <button type="submit" class="btn btn-success">Update Adventure</button>
                </div>
            </form>
        </div>
    </div>

</main>
</div>


<?php
include('includes/footer.php');
?>



<script>
    // Modal functions
    function openAdventureModal() {
        document.getElementById('adventureModal').classList.add('active');
    }

    function closeAdventureModal() {
        document.getElementById('adventureModal').classList.remove('active');
    }

    // Close modal when clicking outside
    document.getElementById('adventureModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeAdventureModal();
        }
    });
</script>



<script>
    $(document).ready(function() {


        function getAdventures() {

            $.ajax({
                url: 'assets/php/adventures/get_adventures.php',
                method: 'GET',
                success: function(response) {
                    console.log(response);

                    var data = JSON.parse(response);

                    var adventuresGrid = ""

                    for (i = 0; i < data.length; i++) {
                        adventuresGrid += `
                               <div class="adventure-card">
                                    <div class="adventure-image" style="background: url('../assets/images/adventures_images/${data[i].image}'); background-size: cover; background-position: center;"></div>
                                    <div class="adventure-content">
                                        <h3 class="adventure-title">${data[i].title}</h3>
                                        <div class="adventure-meta">
                                            <div class="adventure-price">$${data[i].price}</div>
                                            <span class="badge badge-${data[i].status.toLowerCase()}">${data[i].status}</span>
                                        </div>
                                        <p>${data[i].duration_days} Days • ${data[i].difficulty} • ${data[i].max_participants} Participants</p>
                                        <div class="adventure-actions">
                                            <button class="icon-btn" id="editAdventure" data-id="${data[i].id}">✏️ Edit</button>
                                            <button class="icon-btn" id="viewAdventure" data-id="${data[i].id}">👁️ View</button>
                                            <button class="icon-btn" id="deleteAdventure" data-id="${data[i].id}">🗑️ Delete</button>
                                        </div>
                                    </div>
                                </div>
                                `
                    }
                    $('#adventuresGrid').html(adventuresGrid);

                }
            })
        }

        getAdventures()

        /************************************ add adventures ************************************************ */


        $('#adventureForm').on('submit', function(e) {
            e.preventDefault(); // prevent default form submission

            var formData = new FormData(this); // handle file upload

            $.ajax({
                url: 'assets/php/adventures/add_adventure.php', // your PHP insert script
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert('Adventure added successfully!');
                        $('#adventureForm')[0].reset();
                        closeAdventureModal();

                        // Optionally refresh adventures table
                        getAdventures();
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('An error occurred while adding the adventure.');
                }
            });
        });

        /************************************* delete adventure************************************** */
        let adventureIdToDelete = null;

        // Open modal on delete button click
        $(document).on('click', '#deleteAdventure', function() {
            adventureIdToDelete = $(this).data('id');
            $('#deleteModal').addClass('active'); // show modal
        });

        // Cancel deletion
        $('#cancelDelete').on('click', function() {
            adventureIdToDelete = null;
            $('#deleteModal').removeClass('active'); // hide modal
        });

        // Confirm deletion
        $('#confirmDelete').on('click', function() {
            if (adventureIdToDelete) {
                $.ajax({
                    url: 'assets/php/adventures/delete_adventure.php',
                    method: 'POST',
                    data: {
                        id: adventureIdToDelete
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            alert('Adventure deleted successfully!');
                            getAdventures(); // refresh the grid
                        } else {
                            alert('Error: ' + response.message);
                        }
                        adventureIdToDelete = null;
                        $('#deleteModal').removeClass('active'); // hide modal
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('An error occurred while deleting the adventure.');
                        adventureIdToDelete = null;
                        $('#deleteModal').removeClass('active'); // hide modal
                    }
                });
            }
        });

        // Optional: click outside modal to close
        $('#deleteModal').on('click', function(e) {
            if ($(e.target).is('#deleteModal')) {
                adventureIdToDelete = null;
                $(this).removeClass('active');
            }
        });

        /****************************************** edit adventure modal ******************************************************************* */


        let currentEditId = null;

        // Open Edit modal and prefill form
        $(document).on('click', '#editAdventure', function() {
            currentEditId = $(this).data('id');

            // Get adventure details via AJAX
            $.ajax({
                url: 'assets/php/adventures/get_single_adventure.php',
                method: 'GET',
                data: {
                    id: currentEditId
                },
                dataType: 'json',
                success: function(data) {
                    $('#editAdventureId').val(data.id);
                    $('#editTitle').val(data.title);
                    $('#editPrice').val(data.price);
                    $('#editDuration').val(data.duration_days);
                    $('#editDifficulty').val(data.difficulty);
                    $('#editMaxParticipants').val(data.max_participants);
                    $('#editStatus').val(data.status);
                    $('#editDescription').val(data.description);

                    // Show current image
                    let imgPath = '../assets/images/adventures_images/' + data.image;
                    $('#currentImagePreview img').attr('src', imgPath);

                    $('#editAdventureModal').addClass('active');
                },
                error: function(err) {
                    console.error(err);
                    alert('Error fetching adventure data.');
                }
            });
        });

        // Submit edited adventure
        $('#editAdventureForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: 'assets/php/adventures/edit_adventure.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert('Adventure updated successfully!');
                        $('#editAdventureModal').removeClass('active');
                        getAdventures();
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(err) {
                    console.error(err);
                    alert('An error occurred while updating the adventure.');
                }
            });
        });

        // Optional: close modal when clicking outside
        $('#editAdventureModal').on('click', function(e) {
            if ($(e.target).is('#editAdventureModal')) {
                $(this).removeClass('active');
            }
        });

    })
</script>