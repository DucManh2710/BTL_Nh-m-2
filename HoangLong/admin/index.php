<?php
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thi php1</title>
</head>
<body>
    <?php
    if(isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'danhsach':
                require_once 'sanpham/danhsach.php';
                break;
            
            case 'them':
                require_once 'sanpham/them.php';
                break;
                
            case 'sua':
                require_once 'sanpham/sua.php';
                break;
                    
            case 'xoa':
                require_once 'sanpham/xoa.php';
                break;
                        
                    
            default:
                require_once 'sanpham/danhsach.php';
                break;
        }
        

    }
    else{
        require_once 'sanpham/danhsach.php';
    }
    ?>
    
</body>
</html>