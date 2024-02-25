<?php
echo '<div class = "bodermax">';

echo'<h4 class= "basic"> Basic Info </h4>';
echo '<div class ="auto">';

echo '<div class = "cssrows"> Employee ID <input style ="width:75%;"></div>';
echo '<div class = "cssrows"> Last name <input style ="width:75%"></div>';
echo '<div class = "cssrows"> First name <input style ="width:75%"></div>';

echo '<div> Gender'; echo'</div>';
echo '<div>';
$genders = [ "Male","Female","XXX","ZZZ"];
foreach($genders as $gender) { echo '<input style = "margin-left: 150px;" name = "gioi tinh " type ="radio">'.$gender.'</br>';}
echo '</div>';

echo '<div class = "cssrows"> Title <input style ="width:75%"></div>';
echo '<div class = "cssrows"> Sufix <input style ="width:75%"></div>';
echo '<div class = "cssrows"> BirthDate <input style ="width:75%"></div>';
echo '<div class = "cssrows"> HireDate <input style ="width:75%"></div>';
echo '<div class = "cssrows"> SSN # (if applicable) <input style ="width:75%"></div>';
$reports = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
"Antigua & Barbuda",
 "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
"Bahamas", "Bahrain",
 "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
"Bermuda", "Bhutan",
 "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
 "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
];
echo '<div> Country';
echo'<select style ="width:20% ;margin-left: 99px;">';
foreach ($reports as $report) { echo ' <option value="" >'.$report.'</option>';}
echo '</select>';
echo '</div>';

echo '<h4 class= "basic">Contact Info</h4>';
echo '<div class = "cssrows"> Email <input placeholder="name@example.com"style ="width:75%"></div>';
echo '<div class = "cssrows"> Address <input style ="width:75%"></div>';
echo '<div class = "cssrows"> City <input style ="width:75%"></div>';
echo '<div class = "cssrows"> Region <input style ="width:75%"></div>';
echo '<div class = "cssrows"> Postal Code <input style ="width:75%"></div>';
$countries = [
    "Albania","Andorra","Angola","Aruba","VietNam"
];

echo '<div>Country';
echo'<select style ="width:20%;margin-left: 99px;">';
foreach ($countries as $countrie) { echo ' <option value="" >'.$countrie.'</option>';}
echo '</select>';
echo '</div>';

echo '<div class = "cssrows"> US Home Phone <input style ="width:75%"></div>';
echo '<div class = "cssrows"> Photo <input style ="width:75%"></div>';
echo '<h4 class= "basic">Optional Info</h4>';
echo '<div class = "cssrows"> Notes <input style ="height: 100px;width:75%"></div>';
$preferreds = [
    "Regular", "Gravy Yard"
];
echo '<div> Sreferred Shift';echo '</div>';
echo '<div>';
foreach($preferreds as $preferred) {
    echo '<input style = "margin-left: 150px;" name = "preferred shift " type ="checkbox">'.$preferred.'<br>';
}
echo '</div>';

echo '<div> Active<input style = "margin-left: 107px;" type ="checkbox"></div>';
echo '<div class = "cssrows"> Are you human? <input style ="width:75%"></div>';
echo '<div class = "buttons"> <button>Submit</button> <button>Cancel</button></div>';
echo '</div>';
echo '</div>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bodermax{
            
            background-color:white;
            width: 50%;
            height: 195%;
            margin-left: 25%;
            border: 10px solid cornsilk;
            padding: 0px 30px 0px 30px;
                       
        }
        .auto{
            display: grid; grid-row-gap: 10px;

        }
        .buttons{
            margin-left: 75%;
        }
        
        .basic{
            border-bottom: 1px solid black;
            
        }
        .cssrows{
            display: flex;
            justify-content: space-between;
        }
    
        
    </style>
</head>
<body>
    
</body>
</html>