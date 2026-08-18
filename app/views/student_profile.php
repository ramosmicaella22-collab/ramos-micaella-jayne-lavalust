<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Full Record</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', 'Segoe UI', sans-serif; }
        body { background: #fef9e7; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 30px 20px; }
        .main-wrapper { background: #ffffff; width: 100%; max-width: 750px; border-radius: 16px; border: 1px solid #fce7f3; box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1); overflow: hidden; }
        .top-bar { background: #fbcfe8; padding: 20px 30px; display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #f472b6; }
        .top-bar h2 { font-size: 1.2rem; color: #831843; font-weight: 700; }
        .back-link { background: #ffffff; color: #9d174d; text-decoration: none; padding: 8px 16px; border-radius: 8px; font-size: 0.85rem; font-weight: 600; transition: background 0.2s; }
        .back-link:hover { background: #fef3c7; }
        .content-area { padding: 30px; }
        .banner-info { background: #fef3c7; border-radius: 12px; padding: 20px; margin-bottom: 28px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .banner-info .name-title h1 { font-size: 1.4rem; color: #78350f; font-weight: 700; }
        .banner-info .name-title p { font-size: 0.85rem; color: #92400e; }
        .banner-info .id-tag { background: #ffffff; color: #831843; padding: 6px 14px; border-radius: 8px; font-size: 0.85rem; font-weight: 700; border: 1px solid #fbcfe8; }
        .panel-section { margin-bottom: 24px; }
        .panel-title { font-size: 0.85rem; font-weight: 700; color: #be185d; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
        .panel-title::after { content: ''; flex: 1; height: 1px; background: #fce7f3; }
        .data-table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        .data-table td { padding: 10px 14px; font-size: 0.9rem; border-bottom: 1px solid #fef3c7; }
        .data-table td.field { width: 35%; color: #9d174d; font-weight: 600; background: #fffbeb; border-radius: 6px 0 0 6px; }
        .data-table td.val { color: #374151; font-weight: 500; background: #ffffff; }
    </style>
</head>
<body>

    <div class="top-bar">
    <div class="sys-title">
        <span class="status-dot"></span>
        <h2>sys.student_db // record_view</h2>
    </div>
   <a href="/student" class="back-link">&lt; /return&gt;</a>
</div> 

        <div class="content-area">
            <div class="banner-info">
                <div class="name-title">
                    <h1><?= isset($name) ? $name : 'N/A'; ?></h1>
                    <p><?= isset($course) ? $course : 'N/A'; ?> &bull; <?= isset($year) ? $year : 'N/A'; ?> (<?= isset($section) ? $section : 'N/A'; ?>)</p>
                </div>
                <div class="id-tag">
                    ID: <?= isset($student_id) ? $student_id : 'N/A'; ?>
                </div>
            </div>

            <div class="panel-section">
                <div class="panel-title">Personal Details</div>
                <table class="data-table">
                    <tr><td class="field">Gender / Sex</td><td class="val"><?= isset($sex) ? $sex : 'N/A'; ?></td></tr>
                    <tr><td class="field">Age & Birthday</td><td class="val"><?= isset($age) ? $age : 'N/A'; ?> (<?= isset($birthday) ? $birthday : 'N/A'; ?>)</td></tr>
                    <tr><td class="field">Contact Number</td><td class="val"><?= isset($contact) ? $contact : 'N/A'; ?></td></tr>
                    <tr><td class="field">Email Address</td><td class="val"><?= isset($email) ? $email : 'N/A'; ?></td></tr>
                    <tr><td class="field">Home Address</td><td class="val"><?= isset($address) ? $address : 'N/A'; ?></td></tr>
                </table>
            </div>

            <div class="panel-section">
                <div class="panel-title">Educational Background</div>
                <table class="data-table">
                    <tr><td class="field">Elementary School</td><td class="val"><?= isset($elementary) ? $elementary : 'N/A'; ?></td></tr>
                    <tr><td class="field">High School</td><td class="val"><?= isset($highschool) ? $highschool : 'N/A'; ?></td></tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>