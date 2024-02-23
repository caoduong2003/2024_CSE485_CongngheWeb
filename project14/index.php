<?php

use Illuminate\Support\Arr;

$countries = array (
  "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
  "Antigua & Barbuda",
  "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
  "Bahamas", "Bahrain",
  "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
  "Bermuda", "Bhutan",
  "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
  Islands", "Brunei",
  "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
  );

  $genders = array("Male","Female","XXX","ZZZ");
  $reports = array("Banani","ds","da");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
 <style>
 
 
 </style>

</head>
<body>
  <form action="">
   <div class="container">
   <h2>Basic Info</h2>
    <hr>
    <div class="basic">
      <p>Employee</p>
      <input type="text"> 
      <p>Last Name</p>
      <input type="text"> 
      <p>First Name</p>
      <input type="text"> 
      
      <p>Gender</p>
      <div>
        <?php foreach($genders as $gender): ?>
          <input type="radio" name="gender"> 
          <label for=""><?=  $gender; ?></label><br>
        <?php endforeach ?>
      </div>
      <p>Title</p>
      <input type="text">
      <p>Suffic</p>
      <input type="text">
      <p>BirthDate</p>
      <input type="datetime-local" name="" id="">
      <p>SSN # (if applicable)</p>
      <input type="text">
      <p>Reports To</p>
      <div>
        <select name="" id="">
          <?php foreach($reports as $report): ?>
            <option value=""><?= $report ?></option>
          <?php endforeach ?>
        </select>
      </div>

    </div>

    <h2>Contact Info</h2>
    <hr>
    <div class="contact">
      <p>Email</p>
      <input type="text">
      <p>Adress</p>
      <input type="text">
      <p>City</p>
      <input type="text">
      <p>Region</p>
      <input type="text">
      <p>Postal Code</p>
      <input type="text">
      <p>Country</p>
      <div>
        <select name="" id="">
          <?php foreach($countries as $country): ?>
            <option value=""><?= $country ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <p>US Home Phone</p>
      <input type="text">
      <p>Photo</p>
      <input type="text">       
    </div>
    
    <h2>Optional Info</h2>
    <hr>
    <div class="option">
      <p>Note</p>
      <div>
        <textarea name="" id="editor" cols="30" rows="10"></textarea>
      </div>
      <p>Preferred Shift </p>
      <div>
        <input type="checkbox" name="regular" id="">
        <label for="">Regular</label><br>
        <input type="checkbox" name="gravy" id="">
        <label for="">Gravy Yard</label>
      </div>
      <p>Active? </p>
      <div>
        <input type="checkbox" name="regular" id="">       
      </div>
      <p>Are you human?</p>
      <input type="text">
    </div>
    <div>
      <input type="submit" value="submit">
      <button>Cancel</button>
    </div>

            
  
   </div>
  </form>
  
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
</body>
</html>