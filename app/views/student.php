<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) : 'Student Information'; ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .profile-card {
            background: #ffffff;
            width: 100%;
            max-width: 480px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .card-header {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 24px;
            text-align: center;
            border-bottom: 4px solid #3498db;
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-body {
            padding: 24px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #eef2f5;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #7f8c8d;
            font-size: 0.95rem;
        }

        .info-value {
            font-weight: 600;
            color: #2c3e50;
            font-size: 0.95rem;
            text-align: right;
        }

        .badge {
            background-color: #e8f4fc;
            color: #2980b9;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="card-header">
            <h1>Student Information</h1>
        </div>
        <div class="card-body">
            <div class="info-row">
                <span class="info-label">Student ID:</span>
                <span class="info-value"><?= isset($student['id']) ? htmlspecialchars($student['id']) : '2024-10492'; ?></span>
            </div>

            <div class="info-row">
                <span class="info-label">Student Name:</span>
                <span class="info-value"><?= isset($student['name']) ? htmlspecialchars($student['name']) : 'Micaella Jayne D. Ramos'; ?></span>
            </div>

            <div class="info-row">
                <span class="info-label">Course:</span>
                <span class="info-value"><?= isset($student['course']) ? htmlspecialchars($student['course']) : 'BS Information Technology'; ?></span>
            </div>

            <div class="info-row">
                <span class="info-label">Year Level:</span>
                <span class="info-value badge"><?= isset($student['year']) ? htmlspecialchars($student['year']) : '2nd Year'; ?></span>
            </div>

            <div class="info-row">
                <span class="info-label">Section:</span>
                <span class="info-value badge"><?= isset($student['section']) ? htmlspecialchars($student['section']) : '2A'; ?></span>
            </div>

            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value"><?= isset($student['email']) ? htmlspecialchars($student['email']) : 'micaella.ramos@minsu.edu.ph'; ?></span>
            </div>
        </div>
    </div>

</body>
</html>