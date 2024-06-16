<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
    <div class="container">
        <h1>Simple Calculator</h1>
        <form method="post" action="index.php">
            <div class="input-group">
                <input type="text" name="num1" required placeholder="Enter first number">
            </div>
            <div class="input-group">
                <select name="operation">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
            </div>
            <div class="input-group">
                <input type="text" name="num2" required placeholder="Enter second number">
            </div>
            <button type="submit" class="btn">Calculate</button>
        </form>

        <?php if (isset($result)): ?>
            <h2>Result: <?php echo htmlspecialchars($result); ?></h2>
        <?php endif; ?>
    </div>
</body>
</html>
