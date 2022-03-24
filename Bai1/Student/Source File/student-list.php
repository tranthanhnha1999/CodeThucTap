<?php
    require ("./students.php");
    $students = getAllStudents();
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Danh sách sinh viên</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <body>
    <a href="student-add.php">THÊM</a>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Fullname</td>
                <td>Birthday</td>
                <td>Action</td>
            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['student_id']; ?></td>
                <td>
                    <a href="student-add.php?id=<?php echo $item['student_id']; ?>"><?php echo $item['student_name']; ?></a>
                </td>
                <td><?php echo $item['student_email']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
                        <input onclick="return confirm('Bạn có chắc muốn cóa sinh viên này không?');" type="submit" value="Delete" name="delete"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>