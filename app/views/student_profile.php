<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Terminal | Student Record</title>
    <!-- Tech Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #0b0f19;
            color: #e2e8f0;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 30px 20px;
        }

        .main-wrapper {
            background: #111827;
            width: 100%;
            max-width: 750px;
            border-radius: 12px;
            border: 1px solid #1f293d;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(16, 185, 129, 0.05);
            overflow: hidden;
        }

        /* Tech Top Bar */
        .top-bar {
            background: #0f172a;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #1e293b;
        }

        .sys-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: #10b981;
            border-radius: 50%;
            box-shadow: 0 0 8px #10b981;
        }

        .top-bar h2 {
            font-size: 0.95rem;
            color: #f8fafc;
            font-family: 'Fira Code', monospace;
            font-weight: 600;
            letter-spacing: -0.3px;
        }

        .content-area {
            padding: 28px;
        }

        /* Dev Header Card */
        .banner-info {
            background: #090d16;
            border-radius: 8px;
            padding: 20px 24px;
            margin-bottom: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            border: 1px solid #1e293b;
            border-left: 4px solid #10b981;
        }

        .banner-info .name-title h1 {
            font-size: 1.35rem;
            color: #f8fafc;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .banner-info .name-title p {
            font-size: 0.85rem;
            color: #10b981;
            font-family: 'Fira Code', monospace;
        }

        .banner-info .id-tag {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-family: 'Fira Code', monospace;
            font-weight: 600;
            border: 1px solid rgba(16, 185, 129, 0.25);
        }

        .panel-section {
            margin-bottom: 24px;
        }

        .panel-title {
            font-size: 0.75rem;
            font-weight: 600;
            color: #10b981;
            font-family: 'Fira Code', monospace;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .panel-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #1e293b;
        }

        /* Tech Table */
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 6px;
        }

        .data-table td {
            padding: 10px 14px;
            font-size: 0.875rem;
            background: #090d16;
        }

        .data-table td.field {
            width: 32%;
            color: #64748b;
            font-family: 'Fira Code', monospace;
            font-size: 0.8rem;
            border-radius: 6px 0 0 6px;
            border: 1px solid #1e293b;
            border-right: none;
        }

        .data-table td.val {
            color: #cbd5e1;
            font-weight: 500;
            border-radius: 0 6px 6px 0;
            border: 1px solid #1e293b;
            border-left: none;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <div class="top-bar">
            <div class="sys-title">
                <span class="status-dot"></span>
                <h2>Student Information System</h2>
            </div>
        </div>

        <div class="content-area">
            <div class="banner-info">
                <div class="name-title">
                    <h1><?= isset($name) ? $name : 'N/A'; ?></h1>
                    <p><?= isset($course) ? $course : 'N/A'; ?> &bull; <?= isset($year) ? $year : 'N/A'; ?> [<?= isset($section) ? $section : 'N/A'; ?>]</p>
                </div>
                <div class="id-tag">
                    ID: <?= isset($student_id) ? $student_id : 'N/A'; ?>
                </div>
            </div>

            <div class="panel-section">
                <div class="panel-title">// Personal Profile</div>
                <table class="data-table">
                    <tr><td class="field">Gender / Sex</td><td class="val"><?= isset($sex) ? $sex : 'N/A'; ?></td></tr>
                    <tr><td class="field">Age & Birthday</td><td class="val"><?= isset($age) ? $age : 'N/A'; ?> (<?= isset($birthday) ? $birthday : 'N/A'; ?>)</td></tr>
                    <tr><td class="field">Contact Number</td><td class="val"><?= isset($contact) ? $contact : 'N/A'; ?></td></tr>
                    <tr><td class="field">Email Address</td><td class="val"><?= isset($email) ? $email : 'N/A'; ?></td></tr>
                    <tr><td class="field">Home Address</td><td class="val"><?= isset($address) ? $address : 'N/A'; ?></td></tr>
                </table>
            </div>

            <div class="panel-section">
                <div class="panel-title">// Academic Background</div>
                <table class="data-table">
                    <tr><td class="field">Elementary School</td><td class="val"><?= isset($elementary) ? $elementary : 'N/A'; ?></td></tr>
                    <tr><td class="field">High School</td><td class="val"><?= isset($highschool) ? $highschool : 'N/A'; ?></td></tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>