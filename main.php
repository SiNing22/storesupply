<!--
#Si Ning Wong
#120741345 -->

<!DOCTYPE html> <?php #Telling the browser that it is a html document. ?>
<html> <?php #open html file specifying html elements and content. ?>

<head> <?php #content placed in browser tab. ?>
    <title>Frenvicon Sales</title>  <?php #title in browser tab. ?>
</head>   <?php #closes the content placed in browswer tab. ?>

<body>  <?php #open body tag where content is to be placed in the web page. ?>

<header> <?php #open header tag and defines a header element. ?>
    <style>  <?php #open style tag where css code is placed. ?>
    img.logo {height:500px; width: 500px; display: block; margin-left: auto; margin-right: auto;}  <?php #creates a class called logo which makes any image with this class have height and width of 500px. The image is in a display block with margins left and right set to auto that makes the image centered on the webpage. ?>
    </style> <?php #it closes the style tag meaning the end of ccs codes. ?>

<h1 style="background-color: rgb(171, 235, 198  );font-style:Times New Roman; text-align: center; font-size: 70px"> Frenvicon </h1> <?php #makes text size header 1, Times New Roman type font, font size 70 pixels and the centered on the page. It has a light green background color.?>
</header>   <?php #it closes the header. ?>

<main> <?php #It creates a main page in the webpage. ?>

<h3 style = "background-color: rgb(133, 193, 233 );text-align: center; margin-left:300px; margin-right: 300px;"> <?php #makes text header size 3, centered on page with margins 300 pixels both sides. It has a light blue background color?>
Welcome to our newly opened company's website. Glad your here to see some products we are selling. <br>Any questions leave it in the comments!
</h3> <?php #closes the header tage ?>

    <!-- #1 -->
<section style= "background-color:pink;"> <?php #opens a section tag with style attribute that makes the background color pink ?>
<form action = "main.php" action= "post"> <?php #creates a form section, all data submitted wil be sent to the main php file, data are sent as url variables by the method get.?>
    <ul>  <?php #make an unordered list ?>
        Nermes Brush (10.00 each) <a href="pro1.html" target= "_blank" >link</a> <?php #creates a link to another website and when clicked on it, the website link can be viewed on another tab.?>
        <input type = "checkbox"  name="materials[]" value="Brush"> <?php #creates a checkbox, data is put into a list called materials and the data submitted will be a variable named brush ?>
        How Many?: <input type = "number" name = "pro[]">  <?php #data is numerical, creates a number textbox, data is put into a list call pro.?>
        <br> <?php #creates a line break ?>
        Weeb Shirt (15.00 each) <a href="pro2.html" target= "_blank" >link</a> <?php #creates a link to another website and when clicked on it, the website link can be viewed on another tab.?>
        <input type = "checkbox"  name="materials[]" value="Shirt"> <?php #creates a checkbox, data is put into a list called materials and the data submitted will be a variable named shirt ?>
        How Many?: <input type = "number" name = "pro[]"><?php #data is numerical, creates a number textbox, data is put into a list call pro.?>
        <br>
        Blanc Boots (70.00 each) <a href="pro3.html" target= "_blank" >link</a> <?php #creates a link to another website and when clicked on it, the website link can be viewed on another tab.?>
        <input type = "checkbox"  name="materials[]" value="Boots"> <?php #creates a checkbox, data is put into a list called materials and the data submitted will be a variable named boots ?>
        How Many?: <input type = "number" name = "pro[]"><?php #data is numerical, creates a number textbox, data is put into a list call pro.?>
        <br>
        Meifan's Wig (100.00 each) <a href="pro4.html" target= "_blank" >link</a><?php #creates a link to another website and when clicked on it, the website link can be viewed on another tab.?>
         <input type = "checkbox"  name="materials[]" value="Wig"> <?php #creates a checkbox, data is put into a list called materials and the data submitted will be a variable named wig ?>
        How Many?: <input type = "number" name = "pro[]"><?php #data is numerical, creates a number textbox, data is put into a list call pro.?>
        <br>
        Blu Flacon Dress (70.00 each) <a href="pro5.html" target= "_blank" >link</a> <?php #creates a link to another website and when clicked on it, the website link can be viewed on another tab.?>
        <input type = "checkbox"  name="materials[]" value="Dress"> <?php #creates a checkbox, data is put into a list called materials and the data submitted will be a variable named dress ?>
        How Many?: <input type = "number" name = "pro[]"><?php #data is numerical, creates a number textbox, data is put into a list call pro.?>
        <br>
    </ul> <?php #closes the unordered list tag.?>
    <input type ="submit"> <?php #creates a submit button which enables all data to be sent onto the main.php file ?>
</form> </section><?php #closes the form and section tag ?>

<!-- #7 -->
<?php
$products=array('Brush' => 10, "Shirt" => 15.00, 'Boots' => 23.00, "Wig" => 100.00, "Dress"=>70.00); #creates an array of the products names as key and prices as values.
?>

<?php #6
function calculation ($p,$q){ #creates a function that takes in the two lists argument.
    $total = 0.0;  #total variable is set to 0
    for ($i=0; $i<count($p); $i++) {#creates a for loop and it loops around as many times if $i is less than the total amount of elements in the materials list. $i is set to 0 and it is increased by 1 after each loop.
        $total = $total + $p[$i] * $q[$i];} #It access the elements in $p and $q list using $i as index number and both are multiplied then added to total. After each loop it changes the total amount until it stops. 
    
    echo "<h3> Total price: ", number_format($total,2), "<br> </h3>";} #prints out the total price in two decimal places with header size 3 with a line break.
?>

 <?php #2

if (isset ($_POST["materials"]) && (isset ($_POST["pro"]))) { #code to be executed if data is recieved from the materials list and the pro list, otherwise it wont work.
    $materials = $_POST["materials"]; #creates a materials list from the form data in materials.
    $pro = $_POST["pro"]; #creates a pro list from the form data in pro.

    $pricelist = array(); #creates an empty array called pricelist
    $num = array();  #creates an empty array called num

    echo "You ordered: <br>"; #prints out the message with a line break.
    for ($i=0;$i<count($materials);$i++){  #creates a for loop and it loops around as many times if $i is less than the total amount of elements in the materials list. $i is set to 0 and it is increased by 1 after each loop.
        $prices = $products[$materials[$i]]; #finds the product from materials using $i as index number, then find the value number (price) in products array.
        $index = array_search($prices, array_values($products)); #finds the index number of of the price in the products list.

        echo  $materials[$i]," - ", "€",$prices, " x ", $pro[$index], "<br>"; #prints out the products oredered with their prices and using the index number in pro for quantity.

        array_push($pricelist,$prices); #adds the prices found in the products array into the pricelist array
        array_push($num, $pro[$index]); #adds the quantity number found in pro array into the num array.
    }
    calculation($pricelist,$num);   #use calculation function here to get total price/amount.
} 
#3

?>

<hr><br> <!-- makes a horizontal line across the webpage and a linebreak afterwards  -->
<!-- #4 -->
<form action = "main.php" action= "post"> <?php #creates a form section, all data submitted wil be sent to the main php file, data are sent as url variables by the method get.?>
    Rate from 1 - 5: <input type = "number" min=1 max=5 value = 1> <?php #creates a number textbox, numbers being entered are min of 1 and can't go over 5 ?>
    <input type = "submit">  <?php #creates a submit button which enables all data to be sent onto the main.php file ?>
<form> <?php #closes the form tag ?>

<br><!-- creates a line break -->
<br><!-- creates a line break -->
<!-- #5 -->
<form action = "main.php" action= "post"> <?php #creates a form section, all data submitted wil be sent to the main php file, data are sent as url variables by the method get.?>
    Type in your comment:<br><br> <!-- creates two line breaks -->
    <textarea  cols= 20 rows =10 name="txt2"></textarea> <!-- creates a textbox named txt2 with 20 columns across and 10 rows down. -->
    <input type = "submit">  <?php #creates a submit button which enables all data to be sent onto the main.php file ?>
</form> <?php #closes the form tag ?>

<?php
if (isset($_POST["txt2"])){ #if data is entered from the textbox, it will execute the code below.
    $text = $_POST["txt2"]; #stores the text entered into the $text
    echo "<p style='color:blue; border:2px black solid;'>",$text, "<br> Do you confirm? </p>";} #prints out the text in blue color in a paragraph

?>

<hr> <!-- makes a horizontal line across the webpage -->
<img class= "logo" src = "https://thumbs.dreamstime.com/b/rotated-leaf-swirl-your-logo-design-nature-template-vector-illustration-flat-solid-color-style-136576763.jpg"> <?php #assigns the image to class named logo and follows css code. It displays the image on the webpage in the center.?>

</main> <!-- closes the main tag -->
</body><!-- closes the body tag -->
</html><!-- closes the html tag  -->
