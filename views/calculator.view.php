<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valo Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Valo Calculator</h1>
        <form method="post" action="index.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="num1" required placeholder="Enter first number">
            </div>
            <div class="mb-3">
                <select class="form-select" name="operation">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="num2" required placeholder="Enter second number">
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php if (isset($result)): ?>
            <h2 class="mt-4">Result: <?php echo htmlspecialchars($result); ?></h2>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
