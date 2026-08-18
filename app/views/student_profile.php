<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Student Portal'; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        nav { margin-bottom: 20px; }
        nav a { text-decoration: none; color: #6b21a8; font-weight: bold; margin: 0 10px; }
        nav a:hover { text-decoration: underline; }
        .container { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav>
            <a href="<?= site_url('student'); ?>">Home</a> | 
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
        <hr><br>

        <h1>Student Portal Home</h1>
        <p>Welcome to the LavaLust Student Information Portal. Click on <strong>Student Profile</strong> to view student details.</p>
    </div>
</body>
</html>