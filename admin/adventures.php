<?php
include ('includes/header.php');
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

                <div class="adventures-grid">
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
                        <div class="adventure-image" style="background: linear-gradient(135deg, #2d5a4a 0%, #1a3a2e 100%);">WILDERNESS EXPLORER</div>
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
      
        </main>
    </div>

   
<?php
include ('includes/footer.php');
?>