<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>" method="get">
    <input type="number" name="num01" 
    placeholder="number one">  
    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num02" 
    placeholder="number two">
    <button>Calculate</button>
  </form>

</body>
</html>