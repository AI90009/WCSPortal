
<script>
        // Function to check if CSS is already included
        function addCSS() {
            if ($('link[href="styles.css"]').length === 0) { // Check if the stylesheet is not already included
                $("head").append('<link rel="stylesheet" href="../assets/css/style.css">');
            }
        }

        // Ensure addCSS is called when the page loads
        $(document).ready(function() {
            addCSS();  // Call the function to add CSS
        });
    </script>


<?php
include("../php_scripts/functions.php");

// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html'); // Output as HTML, not JSON

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ensure the database connection is available
if (!isset($con) || !$con) {
    die("<p style='color:red;'>Database connection failed.</p>");
}

//if(!empty($_POST["catID"])) {

    $id=intval($_POST['catID']);
// Fetch practice areas
//$query = getById('sub_area',$id);
$query = mysqli_query($con,"select * from sub_area where area_id='$id'");
if (!$query || empty($query)) {
    die("<p style='color:red;'>No practice areas found.</p>");
}

// Generate the HTML for the select dropdown 
echo ' 
<label>Lawyer Practice Sub-Area</label>
<select class="select" name="lawyer_sub" id="lawyer_sub" onChange="getLawyer(this.value);">
    <option value="default">Select sub-area</option>';

foreach ($query as $row) {
    echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['sub_area']) . '</option>';
}

echo '</select>';
//}
?>

<script src="../assets/js/admin.js"></script>