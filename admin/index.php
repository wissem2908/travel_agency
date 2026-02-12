<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildpath Adventures - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Crimson+Pro:wght@400;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --forest-deep: #1a3a2e;
            --forest-medium: #2d5a4a;
            --forest-light: #3d6f5d;
            --earth-dark: #4a3728;
            --earth-medium: #8b6f47;
            --earth-light: #c9a961;
            --accent-orange: #d97638;
            --accent-red: #c4523c;
            --cream: #f5f1e8;
            --white: #ffffff;
            --gray-light: #e8e4db;
            --gray-medium: #a39d91;
            --success: #52a675;
            --warning: #d9a738;
            --danger: #c4523c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Crimson Pro', serif;
            background: linear-gradient(135deg, var(--cream) 0%, var(--gray-light) 100%);
            min-height: 100vh;
            color: var(--forest-deep);
        }

        /* Login Page */
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(135deg, var(--forest-deep) 0%, var(--forest-medium) 50%, var(--earth-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M20,50 Q40,30 50,50 T80,50" stroke="rgba(255,255,255,0.03)" fill="none" stroke-width="0.5"/></svg>');
            animation: drift 60s linear infinite;
        }

        @keyframes drift {
            from { transform: translate(-10%, -10%) rotate(0deg); }
            to { transform: translate(10%, 10%) rotate(360deg); }
        }

        .login-box {
            background: rgba(255, 255, 255, 0.98);
            padding: 60px 50px;
            border-radius: 4px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-logo h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 42px;
            color: var(--forest-deep);
            letter-spacing: 3px;
            margin-bottom: 8px;
        }

        .login-logo p {
            font-family: 'Space Mono', monospace;
            font-size: 11px;
            color: var(--gray-medium);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--forest-medium);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--gray-light);
            border-radius: 3px;
            font-family: 'Crimson Pro', serif;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--forest-medium);
            box-shadow: 0 0 0 3px rgba(45, 90, 74, 0.1);
        }

        .login-button {
            width: 100%;
            padding: 16px;
            background: var(--forest-deep);
            color: var(--white);
            border: none;
            border-radius: 3px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 18px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .login-button:hover {
            background: var(--forest-medium);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(26, 58, 46, 0.3);
        }

        /* Admin Layout */
        .admin-layout {
            display: none;
            min-height: 100vh;
        }

        .admin-layout.active {
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, var(--forest-deep) 0%, var(--earth-dark) 100%);
            color: var(--white);
            padding: 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.2);
        }

        .sidebar-header {
            padding: 35px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 0, 0.2);
        }

        .sidebar-header h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 32px;
            letter-spacing: 3px;
            margin-bottom: 5px;
        }

        .sidebar-header p {
            font-family: 'Space Mono', monospace;
            font-size: 10px;
            letter-spacing: 2px;
            opacity: 0.7;
            text-transform: uppercase;
        }

        .sidebar-nav {
            padding: 20px 0;
        }

        .nav-item {
            padding: 16px 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 16px;
            border-left: 4px solid transparent;
            font-weight: 600;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.08);
            border-left-color: var(--accent-orange);
        }

        .nav-item.active {
            background: rgba(255, 255, 255, 0.12);
            border-left-color: var(--accent-orange);
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            opacity: 0.8;
        }

        .sidebar-footer {
            padding: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--accent-orange);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 20px;
        }

        .user-details h4 {
            font-size: 15px;
            margin-bottom: 3px;
        }

        .user-details p {
            font-size: 12px;
            opacity: 0.7;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            flex: 1;
            padding: 40px;
            min-height: 100vh;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 40px;
            padding-bottom: 25px;
            border-bottom: 2px solid var(--gray-light);
        }

        .page-header h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 48px;
            color: var(--forest-deep);
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: var(--gray-medium);
            font-size: 16px;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: var(--white);
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--forest-medium);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .stat-card.orange {
            border-left-color: var(--accent-orange);
        }

        .stat-card.green {
            border-left-color: var(--success);
        }

        .stat-card.red {
            border-left-color: var(--accent-red);
        }

        .stat-label {
            font-family: 'Space Mono', monospace;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--gray-medium);
            margin-bottom: 12px;
        }

        .stat-value {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 42px;
            color: var(--forest-deep);
            letter-spacing: 1px;
        }

        .stat-change {
            font-size: 13px;
            margin-top: 8px;
            font-weight: 600;
        }

        .stat-change.positive {
            color: var(--success);
        }

        .stat-change.negative {
            color: var(--danger);
        }

        /* Content Cards */
        .content-card {
            background: var(--white);
            border-radius: 6px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .card-header {
            padding: 25px 30px;
            border-bottom: 1px solid var(--gray-light);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(135deg, rgba(26, 58, 46, 0.03) 0%, rgba(245, 241, 232, 0.5) 100%);
        }

        .card-header h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 28px;
            color: var(--forest-deep);
            letter-spacing: 2px;
        }

        .card-body {
            padding: 30px;
        }

        /* Buttons */
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 3px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 15px;
            letter-spacing: 1.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--forest-deep);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--forest-medium);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(26, 58, 46, 0.3);
        }

        .btn-secondary {
            background: var(--earth-medium);
            color: var(--white);
        }

        .btn-secondary:hover {
            background: var(--earth-dark);
        }

        .btn-danger {
            background: var(--accent-red);
            color: var(--white);
        }

        .btn-danger:hover {
            background: #a83d2c;
        }

        .btn-success {
            background: var(--success);
            color: var(--white);
        }

        /* Table */
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .data-table thead {
            background: var(--forest-deep);
            color: var(--white);
        }

        .data-table th {
            padding: 18px 20px;
            text-align: left;
            font-family: 'Space Mono', monospace;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .data-table tbody tr {
            border-bottom: 1px solid var(--gray-light);
            transition: background 0.2s ease;
        }

        .data-table tbody tr:hover {
            background: rgba(245, 241, 232, 0.5);
        }

        .data-table td {
            padding: 20px;
            font-size: 15px;
        }

        /* Status Badges */
        .badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .badge-active {
            background: rgba(82, 166, 117, 0.15);
            color: var(--success);
        }

        .badge-new {
            background: rgba(217, 118, 56, 0.15);
            color: var(--accent-orange);
        }

        .badge-pending {
            background: rgba(217, 167, 56, 0.15);
            color: var(--warning);
        }

        .badge-confirmed {
            background: rgba(82, 166, 117, 0.15);
            color: var(--success);
        }

        .badge-cancelled {
            background: rgba(196, 82, 60, 0.15);
            color: var(--accent-red);
        }

        /* Form Elements */
        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--forest-medium);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid var(--gray-light);
            border-radius: 3px;
            font-family: 'Crimson Pro', serif;
            font-size: 15px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .input-group input:focus,
        .input-group select:focus,
        .input-group textarea:focus {
            outline: none;
            border-color: var(--forest-medium);
            box-shadow: 0 0 0 3px rgba(45, 90, 74, 0.1);
        }

        .input-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Adventure Cards */
        .adventures-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .adventure-card {
            background: var(--white);
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .adventure-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .adventure-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--forest-medium) 0%, var(--earth-medium) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-family: 'Bebas Neue', sans-serif;
            font-size: 24px;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }

        .adventure-image::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="60" r="3" fill="rgba(255,255,255,0.08)"/><circle cx="50" cy="80" r="2.5" fill="rgba(255,255,255,0.09)"/></svg>');
            opacity: 0.5;
        }

        .adventure-content {
            padding: 25px;
        }

        .adventure-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 24px;
            color: var(--forest-deep);
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .adventure-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-light);
        }

        .adventure-price {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 28px;
            color: var(--accent-orange);
            letter-spacing: 1px;
        }

        .adventure-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .icon-btn {
            padding: 8px 16px;
            border: 2px solid var(--gray-light);
            background: transparent;
            border-radius: 3px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Crimson Pro', serif;
            font-size: 14px;
            font-weight: 600;
        }

        .icon-btn:hover {
            border-color: var(--forest-medium);
            background: var(--forest-deep);
            color: var(--white);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background: var(--white);
            padding: 40px;
            border-radius: 6px;
            max-width: 700px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideUp 0.4s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--gray-light);
        }

        .modal-header h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 36px;
            color: var(--forest-deep);
            letter-spacing: 2px;
        }

        .modal-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--gray-light);
        }

        /* Page Sections */
        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
            animation: fadeInContent 0.5s ease;
        }

        @keyframes fadeInContent {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding: 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .adventures-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    </head>

    <body>
    <!-- Login Page -->
    <div class="login-container" id="loginPage">
        <div class="login-box">
            <div class="login-logo">
                <h1>WILDPATH</h1>
                <p>Admin Portal</p>
            </div>
            <form id="loginForm">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="loginEmail" placeholder="admin@wildpath.com" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="loginPassword" placeholder="••••••••" required>
                </div>
                <button type="submit" class="login-button">Sign In</button>
            </form>
        </div>
    </div>
    </body>