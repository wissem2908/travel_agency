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