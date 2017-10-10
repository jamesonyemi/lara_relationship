<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body>

    <?php foreach($posts as $post): ?>
        <h2><?php echo e($post->title); ?></h2>
    <?php endforeach; ?> 
    
</body>
</html>