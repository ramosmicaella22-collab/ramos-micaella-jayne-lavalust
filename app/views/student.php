<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Terminal | Student Summary</title>
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
            padding: 20px;
        }

        .card-container {
            background: #111827;
            width: 100%;
            max-width: 480px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(16, 185, 129, 0.05);
            border: 1px solid #1f293d;
            border-top: 4px solid #10b981;
            padding: 32px;
            position: relative;
            overflow: hidden;
        }

        .status-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            font-size: 0.75rem;
            font-family: 'Fira Code', monospace;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            border: 1px solid rgba(16, 185, 129, 0.25);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-dot {
            width: 6px;
            height: 6px;
            background-color: #10b981;
            border-radius: 50%;
            box-shadow: 0 0 6px #10b981;
        }

        .sys-id {
            font-family: 'Fira Code', monospace;
            font-size: 0.75rem;
            color: #64748b;
        }

        .student-header h1 {
            font-size: 1.5rem;
            color: #f8fafc;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 4px;
        }

        .student-header p {
            font-size: 0.85rem;
            color: #10b981;
            font-family: 'Fira Code', monospace;
            margin-bottom: 24px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 24px;
        }

        .info-item {
            background: #090d16;
            padding: 12px 14px;
            border-radius: 6px;
            border: 1px solid #1e293b;
        }

        .info-item.full-width {
            grid-column: span 2;
        }

        .info-item .label {
            display: block;
            font-size: 0.7rem;
            color: #64748b;
            font-family: 'Fira Code', monospace;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .info-item .value {
            font-size: 0.875rem;
            color: #e2e8f0;
            font-weight: 500;
        }

        .btn-action {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #10b981;
            color: #090d16;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.2);
        }

        .btn-action:hover {
            background: #34d399;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.4);
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <div class="card-container">
        <div class="status-header">
            <span class="badge">
                <span class="status-dot"></span> Active Student
            </span>
            <span class="sys-id">sys.user // active</span>
        </div>

        <div class="student-header">
            <h1><?= $name ?? 'Student'; ?></h1>
            <p>UID: <?= $student_id ?? 'N/A'; ?></p>
        </div>

        <div class="info-grid">
            <div class="info-item">
                <span class="label">Course</span>
                <span class="value"><?= $course ?? 'N/A'; ?></span>
            </div>
            <div class="info-item">
                <span class="label">Section</span>
                <span class="value"><?= $section ?? 'N/A'; ?></span>
            </div>
            <div class="info-item">
                <span class="label">Year Level</span>
                <span class="value"><?= $year ?? 'N/A'; ?></span>
            </div>
            <div class="info-item full-width">
                <span class="label">Email Address</span>
                <span class="value"><?= $email ?? 'N/A'; ?></span>
            </div>
        </div>

       <a href="/student/profile" class="btn-action">
    <span>View Full Record</span>
    <span>&rarr;</span>
</a>
    </div>

</body>
</html>