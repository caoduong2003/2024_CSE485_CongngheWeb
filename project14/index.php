<?php
$genders = ["Male", "Female", "XXX", "ZZZ"];
$reports = ["ABC", "123", "XXX", "ZZZ"];
$countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <title>form</title>
</head>
<body>
<form action="">
    <h3>Basic Info</h3>
    <hr>
    <div class="basic_Info ">
        <p>Employee ID</p>
        <input type="text" name="" id="">
        <p>Last Name </p>
        <input type="text" name="" id="">
        <p>First Name </p>
        <input type="text" name="" id="">
        <p>Gender</p>
        <div class="">
            <?php
            foreach ($genders as $gender):
                ?>
                <input type="radio" name="gender" id="">
                <label>
                    <?= $gender; ?>
                </label>
                <br>
            <?php endforeach; ?>
        </div>
        <p> Title</p>
        <input type="text" name="" id="">
        <p>Suffix</p>
        <input type="text" name="" id="">
        <p>BirthDate</p>
        <input type="text" name="" id="">
        <p>HireDate</p>
        <input type="text" name="" id="">
        <p>SSN # (if applicable)</p>
        <input type="text" name="" id="">
        <p>Report To</p>
        <select name="" id="">
            <?php
            foreach ($reports as $report):
                ?>
                <option>
                    <label> <?= $report; ?> </label>
                </option>
            <?php
            endforeach;
            ?>
        </select>
    </div>
    <br>
    <h3>Contact Info</h3>
    <hr>
    <div class="contact_Info ">
        <p>Email</p>
        <input type="text" name="" id="" placeholder="name@example.com">
        <p>Address</p>
        <input type="text" name="" id="">
        <p>City</p>
        <input type="text" name="" id="">
        <p>Region</p>
        <input type="text" name="" id="">
        <p> Postal Code</p>
        <input type="text" name="" id="">
        <p>Country</p>
        <select name="" id="">
            <?php
            foreach ($countries as $country):
                ?>
                <option>
                    <label> <?= $country; ?> </label>
                </option>
            <?php
            endforeach;
            ?>
        </select>

        <p>US Home Phone</p>
        <input type="text" name="" id="">
        <p>Photo</p>
        <input type="text" name="" id="">
    </div>
    <br>

    <h3>Optional Info </h3>
    <hr>
    <div class="optional_Info">
        <p>Note</p>
        <div class="" id="">
            <textarea name="" id="editor" cols="30" rows="10"> </textarea>
        </div>


        <p style="margin: 0">Preferred Shift</p>
        <div class="">
            <input type="checkbox" name="" id="">
            <label>Regular</label>
            <br>
            <input type="checkbox" name="" id="">
            <label>Gravy Yard</label>
        </div>
        <p style="margin: 0">Active</p>
        <div class="">
            <input type="checkbox" name="" id="">
        </div>
        <p style="margin: 0">Are you human?</p>
        <div class="">
            <p>Click to change</p>
            <input type="text" name="" id="">
        </div>

    </div>
    <hr>
    <div class="btn_remote_right">
        <button type="submit">Submit</button>
        <button>Cancel</button>

    </div>

    <div class="btn_remote_left">
        <button><</button>
        <button>></button>
        <br>
        * required
    </div>


</form>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>


