<?php
echo '<div class = "bodermax">';
echo'<h4 class= "basic"> Basic Info </h4>';
echo '<div>Employee ID <input style ="width:70%"></div>';
echo '<div>Last name <input style ="width:70%"></div>';
echo '<div>First name <input style ="width:70%"></div>';
echo '<div>Gender';
$genders = [
    "Male","Female","XXX","ZZZ"
];
foreach($genders as $gender) {
    echo '<input name = "gioi tinh " type ="radio">'.$gender.'';
}
echo '</div>';
echo '<div>Title<input style ="width:70%"></div>';
echo '<div>Sufix<input style ="width:70%"></div>';
echo '<div>BirthDate <input style ="width:70%"></div>';
echo '<div>HireDate<input style ="width:70%"></div>';
echo '<div>SSN # (if applicable) <input style ="width:70%"></div>';
$reports = [
    "Buchana","Dasbev","Mavesea","Basdad","VietNam"
];
echo '<div>Country';
echo'<select style ="width:20%">';
foreach ($reports as $report) {
    echo ' <option value="" >'.$report.'</option>';
}
echo '</select>';
echo '<h4>Contact Info</h4>';
echo '<div>Email <input placeholder="name@example.com"style ="width:70%"></div>';
echo '<div>Address <input style ="width:70%"></div>';
echo '<div>city <input style ="width:70%"></div>';
echo '<div>Region <input style ="width:70%"></div>';
echo '<div>Postal Code <input style ="width:70%"></div>';
$countries = [
    "Albania","Andorra","Angola","Aruba","VietNam"
];
echo '<div>Country';
echo'<select style ="width:20%">';
foreach ($countries as $countrie) {
    echo ' <option value="" >'.$countrie.'</option>';
}
echo '</select>';
echo '<div>US Home Phone <input style ="width:70%"></div>';
echo '<div>Photo <input style ="width:70%"></div>';
echo '<h4>Optional Info</h4>';
echo '<div>Notes <input style ="height: 10%;width:70%"></div>';
$preferreds = [
    "Regular", "Gravy Yard"
];
echo '<div>Sreferred Shift';
foreach($preferreds as $preferred) {
    echo '<input name = "preferred shift " type ="checkbox">'.$preferred.'';
}
echo '</div>';
echo '<div>Active<input type ="checkbox"></div>';
echo '<div>Are you human? <input style ="width:70%"></div>';
echo '<div><button>Submit</button> <button>Cancel</button></div>';
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
            height: 150%;
            margin-left: 25%;
            border: 10px solid rosybrown;

        }
        .basic{
            margin-left: 20px;
        }
        
    </style>
</head>
<body>
    
</body>
</html>