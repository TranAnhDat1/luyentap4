<?php
// Initialize the result variable
$result = "0";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input value
    $expression = $_POST['display'];

    // Try to evaluate the expression (be cautious with eval in real-world applications)
    try {
        $result = eval("return " . $expression . ";");
    } catch (Exception $e) {
        $result = "Error"; // If the evaluation fails, show an error
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Máy Tính Cá Nhân</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Form to send data to PHP -->
    <form class="calculator" method="POST">
      <div class="display" id="display"><?php echo htmlspecialchars($result); ?></div>
      <input type="text" name="display" id="input_display" value="<?php echo htmlspecialchars($result); ?>" />
      <div class="buttons">
        <div class="button" onclick="clearDisplay()">C</div>
        <div class="button" onclick="deleteDigit()">DEL</div>
        <div class="button" onclick="input('.')">.</div>
        <div class="button" class="operator" onclick="input('/')">÷</div>
        <div class="button" onclick="input('7')">7</div>
        <div class="button" onclick="input('8')">8</div>
        <div class="button" onclick="input('9')">9</div>
        <div class="button" class="operator" onclick="input('*')">×</div>
        <div class="button" onclick="input('4')">4</div>
        <div class="button" onclick="input('5')">5</div>
        <div class="button" onclick="input('6')">6</div>
        <div class="button" class="operator" onclick="input('-')">−</div>
        <div class="button" onclick="input('1')">1</div>
        <div class="button" onclick="input('2')">2</div>
        <div class="button" onclick="input('3')">3</div>
        <div class="button" class="operator" onclick="input('+')">+</div>
        <div class="button" onclick="input('0')">0</div>
        <!-- Submit button to calculate -->
        <input type="submit" class="equal" value="=" />
      </div>
    </form>

    <script src="./script.js"></script>
  </body>
</html>
  