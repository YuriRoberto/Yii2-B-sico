<?php
/* @var $this yii\web\View */
?>

<h1>Listagem de cursos</h1>

<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Hours</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($courses as $course):?>
            <tr>
                <td><?php echo $course->id; ?></td>
                <td><?php echo $course->name; ?></td>
                <td><?php echo $course->hours; ?></td>
            </tr>
        <?php endforeach; ?>    
    </tbody>

</table>