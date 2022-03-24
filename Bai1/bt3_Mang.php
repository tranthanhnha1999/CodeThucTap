<!DOCTYPE html>
<html>
    <header>
        <title>
            Bài tập mảng
        </title>
        <meta charset="UTF-8">
    </header>
    <body>
        <h1>Bài 3 Mảng</h1>
        <?php
            $author = array(
                array(
                    'name' => 'NhaTT',
                    'blog' => 'Vitalify asia',
                    'position' => 'Intern'
                ),
                array(
                    'name' => 'KhangNT',
                    'blog' => 'Vitalify asia',
                    'position' => 'Senior'
                ),
                array(
                    'name' => 'DuyNA',
                    'blog' => 'Vitalify asia',
                    'position' => 'Senior'
                ),
                array(
                    'name' => 'NhiNTT',
                    'blog' => 'Vitalify asia',
                    'position' => 'Leader'
                 )
            )
        ?>
        <form action="">
        <?php 
            foreach($author as $key => $author)
            {
            echo '<ul>';
            echo '<li> Name:' 
            .$author['name'];
            echo '</li>';
            echo '<li> Name:' 
            .$author['blog'];
            echo '</li> ';
            echo '<li> Name:' 
            .$author['position'];
            echo '</li>';
            echo '</ul>';
            }
        ?>
        </form>
        
    </body>
</html>