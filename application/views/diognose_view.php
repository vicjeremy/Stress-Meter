<html>
<head>
    <title>Diagnosis Stres</title>
</head>
<body>
    <h2>Diagnosis Stres</h2>
    <form method="post" action="<?php echo site_url('expert_system/diagnose'); ?>">
        <?php foreach ($symptoms as $symptom): ?>
            <input type="checkbox" name="symptoms[]" value="<?php echo $symptom['name']; ?>">
            <?php echo $symptom['name']; ?><br>
        <?php endforeach; ?>
        <input type="submit" value="Diagnose">
    </form>
</body>
</html>