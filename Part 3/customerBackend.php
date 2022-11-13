<?php

        $Bucket = $_POST["bucket"];
        $Umbrella = $_POST["umbrella"];
        $Boots = $_POST["boots"];
        $Shipping = $_POST["shipping"];
        $User = $_POST["user"];
        $Pass = $_POST["pass"];

        if($Shipping == "0.00")
        {
                $ShippingType = "Free";
        }
        else if ($Shipping == "5.00")
        {
                $ShippingType = "Three Day";
        }
        else
        {
                $ShippingType = "Overnight";
        }


        echo "Welcome ", $User, "!", "<br>", "Your password is: ", $Pass, "<br>";

        echo "<tr>", "<td>", "Item", "<td>", "Quantity", "<td>", "Cost Per Item", "<td>", "Sub Total";
        echo "<tr>", "<td>", "Bucket", "<td>", $Bucket, "<td>", "$5.00", "<td>", "$", $Bucket*5;
        echo "<tr>", "<td>", "Bucket", "<td>", $Umbrella, "<td>", "$10.00", "<td>", "$", $Umbrella*5;
        echo "<tr>", "<td>", "Boots", "<td>", $Boots, "<td>", "$20.00", "<td>", "$", $Boots*5;
        echo "<tr>", "<td>", "Shipping", "<td>", $ShippingType, "<td>", "<td>", $Shipping;
        echo "<tr>", "<td>", "Total Cost", "<td>", (($Bucket*5)+($Umbrella*5)+($Boots*5)+$Shipping);
?>
