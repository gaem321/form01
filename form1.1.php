<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $class = $_POST['class'] ?? '';
    $student_id = $_POST['student_id'] ?? '';
    $study_plan = $_POST['study_plan'] ?? '';
    $gender = $_POST['gender'] ?? '';


    echo "<h3>ข้อมูลที่กรอก:</h3>";
    echo "<p>ชื่อ: " . htmlspecialchars($first_name) . "</p>";
    echo "<p>นามสกุล: " . htmlspecialchars($last_name) . "</p>";
    echo "<p>ชั้น: " . htmlspecialchars($class) . "</p>";
    echo "<p>เลขที่: " . htmlspecialchars($student_id) . "</p>";
    echo "<p>แผนการเรียน: " . htmlspecialchars($study_plan) . "</p>";
    echo "<p>เพศ: " . htmlspecialchars($gender) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มกรอกข้อมูลนักเรียน</title>
    <!-- ใช้ Bootstrap 5 สำหรับการจัดรูปแบบ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>กรอกข้อมูลนักเรียน</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="first_name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">ชั้น</label>
                <input type="text" class="form-control" id="class" name="class" required>
            </div>
            <div class="mb-3">
                <label for="student_id" class="form-label">เลขที่</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="mb-3">
                <label for="study_plan" class="form-label">แผนการเรียน</label>
                <select class="form-select" id="study_plan" name="study_plan" required>
                    <option value="เทคโนโลยี">เทคโนโลยี</option>
                    <option value="วิศวกรรมศาสตร์">วิศวกรรมศาสตร์</option>
                    <option value="ศิลปศาสตร์">ศิลปศาสตร์</option>
                    <option value="ภาษาอังกฤษ">ภาษาอังกฤษ</option>
                    <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">เพศ</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" required>
                    <label class="form-check-label" for="male">ชาย</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง" required>
                    <label class="form-check-label" for="female">หญิง</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
