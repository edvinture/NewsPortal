<?php
ob_start();

if(isset($result)){
    if($result[0]==true)
    {
        ?>
            <div class="container">
                <div class= "alert alert-info">
                    <strong>пользователь добавлен.</strong><a href ="admin/">Dashboard</a>                 
                </div>
            </div>
        <?php
    }

    else if($result[0]==false)
    {
        ?>
            <div class="container">
                <div class= "alert alert-warning">
                    <strong>Ошибка!</strong><?php echo $result [1];?><a href ="registerForm">форма регистрации</a>                 
                </div>
            </div>
        <?php
    }
}
?>
<?php $content = ob_get_clean(); ?>

<?php include "view/layout.php";