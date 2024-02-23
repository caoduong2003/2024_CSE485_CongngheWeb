<?php
$genders = ["Male", "Female", "ABC", "mno"];

$reports = ["XYZ", "321", "ABC", "MNO"];

$countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda",

    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",

    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",

    "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin

Islands", "Brunei",

    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="./style/style.css">
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
                <?php
                foreach ($genders as $sex):
                    ?>
                    <input type='radio' name="sex">
                    <label>
                        <?php
                        echo $sex;
                        ?>
                    </label>
                    <br>
                <?php
                endforeach;
                ?>
            </div>
            <p>Title</p>
            <input type="text">
            <p>Suffic</p>
            <input type="text">
            <p>SSN # (if applicable)</p>
            <input type="text">
            <p>Reports To</p>
            <select>
                <?php
                foreach ($reports

                as $report):
                ?>
                <option>
                    <label>
                        <?php
                        echo $report;
                        ?>
                    </label>
                    <br>
                    <?php
                    endforeach;
                    ?>
            </select>

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
            <select>
                <?php
                foreach ($countries

                as $country):
                ?>
                <option>
                    <label>
                        <?php
                        echo $country;
                        ?>
                    </label>
                    <br>
                    <?php
                    endforeach;
                    ?>
            </select>

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
                <textarea name="" id="editor" cols="" rows=""></textarea>
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
        <div class="btn">
            <input type="submit" value="submit" class="btn-submit">
            <button class="btn-cancel">Cancel</button>
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