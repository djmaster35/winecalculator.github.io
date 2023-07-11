<?php 
if(isset($_POST['calculateSugar'])) {
  $juiceAmount = $_POST['juiceAmount'];
  $juiceDensity = $_POST['juiceDensity'];
  $desiredDensity = $_POST['desiredDensity'];
  $sugarPerLitre = ($desiredDensity - $juiceDensity) * 3;
  $sugarResult = $sugarPerLitre * $juiceAmount;
} 

if(isset($_POST['calculateAlcohol'])) {
  $initialDensity = $_POST['initialDensity'];
  $finalDensity = $_POST['finalDensity'];
  $alcoholResult = ($initialDensity - $finalDensity) / 7.36;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wine Calculator - Natural Fruit Juice, Hydrometer, Fermentation</title>
  <meta name="description" content="This tool is designed to make wine from 100% natural fruit juices at home using a hydrometer to calculate the desired density and alcohol content. Mix ingredients, ferment, bottle, and store in the refrigerator for 15-30 days. Enjoy your homemade fruit wine!">
  <style>
    /* CSS styles here */
  </style>
</head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wine Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      background-color: #0077be;
      color: white;
      padding: 10px;
    }

    form {
      width: 90%;
      max-width: 500px;
      margin: 20px auto;
    }

    label {
      display: inline-block;
      width: 60%;
      margin-bottom: 10px;
    }

    input[type="number"] {
      width: 30%;
    }

    button {
      display: block;
      width: 100%;
      margin-top: 10px;
      padding: 10px;
      background-color: #0077be;
      color: white;
      border: none;
      cursor: pointer
    }

    button:hover {
      background-color: #005c99
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <h1>Wine Calculator</h1>

  <form id="form" method="post">
    <h2>Şeker Hesaplama / Sugar Calculation</h2>

    <label for="juiceAmount">Meyve Suyu Miktarı / Juice Amount (L): </label>
    <input type="number" id="juiceAmount" name="juiceAmount" value="1"><br>

    <label for="juiceDensity">Meyve Suyu Yoğunluğu / Juice Density:</label>
    <input type="number" id="juiceDensity" name="juiceDensity" value="1044"><br>

    <label for="desiredDensity">İstenen Yoğunluk / Desired Density:</label>
    <input type="number" id="desiredDensity" name="desiredDensity" value="1100"><br>
 <?php if(isset($sugarResult)) { ?>
      <p class="result">Eklenecek Şeker / Sugar to add (g): <?php echo $sugarResult; ?></p>
    <?php } ?>
    <button type="submit" name="calculateSugar">Şeker Hesapla / Calculate Sugar</button><br>

   

<h2>Alkol Hesaplama / Alcohol Calculation</h2>

<label for="initialDensity">İlk Yoğunluk / Initial Density:</label>
<input type="number" id="initialDensity" name="initialDensity" value="1100"><br>

<label for="finalDensity">Son Yoğunluk / Final Density:</label>
<input type="number" id="finalDensity" name="finalDensity" value="1000"><br>
<?php if(isset($alcoholResult)) { ?>
  <p class="result">Alkol Değeri / Alcohol Value: <?php echo round($alcoholResult, 2); ?></p>
<?php } ?>
<button type="submit" name="calculateAlcohol">Alkol Hesapla / Calculate Alcohol</button><br>


    </form> </body> </html>
