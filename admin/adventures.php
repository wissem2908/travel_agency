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
    })
</script>