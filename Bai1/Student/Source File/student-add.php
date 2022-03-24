<?php
    require ("./students.php");

    $data = array();
    $errors = array();

    $is_update_action = false;

    if(!empty($_GET['id'])){
        $data = getStudents($_GET['id']);
        $is_update_action = true;
    }
    if(!empty($_POST['add_student'])){

        $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
        $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';

        if(empty($data['student_id'])){
            $errors['student_id'] ='Bạn chưa nhập ID';
        }
        if(empty($data['student_name'])){
            $errors['student_name'] ='Bạn chưa nhập name';
        }
        if(empty($data['student_email'])){
            $errors['student_email'] ='Bạn chưa nhập email';
        }
        if(empty($errors)){
            updateStudent($data['student_id'],$data['student_name'],$data['student_email']);
            header("Location:student-list.php");
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm mới sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width =device-width, initial-scale =1.0">
    </head>
    <body>
        <a href="student-list.php">Trở lại</a>
        <form action="" method ="post" >
            <table border ="1" >
                <tr>
                    <td>ID</td>
                    <td>
                        <input type="text" name="id" value ="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>">
                        <?php echo !empty($errors['student_id']) ? $errors['student_id'] : '' ;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>">
                        <?php echo !empty($errors['student_name']) ? $errors['student_name'] : '' ;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo !empty($data['student_email']) ? $data['student_email'] : ''; ?>">
                        <?php echo !empty($errors['student_email']) ? $errors['student_email'] : '' ;?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_student" value="<?php echo ($is_update_action) ? 'Cập nhật' : 'Thêm mới' ; ?>">
                    </td>
                </tr>

            </table>
        </form>
    </body>
</html>

