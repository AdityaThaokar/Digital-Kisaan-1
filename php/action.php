<?php
include('server.php');
if(isset($_POST["pid"]))  
 {  
      $order_table = '';  
      $message = '';  
      if($_POST["action"] == "add")  
      {  
           if(isset($_SESSION["shopping_cart"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                     if($_SESSION["shopping_cart"][$keys]['pid'] == $_POST["pid"])  
                     {  
                          $is_available++;  
                          $_SESSION["shopping_cart"][$keys]['pquantity'] = $_SESSION["shopping_cart"][$keys]['pquantity'] + $_POST["pquantity"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'pid'               =>     $_POST["pid"],  
                          'pname'               =>     $_POST["pname"],  
                          'pprice'               =>     $_POST["pprice"],  
                          'pquantity'          =>     $_POST["pquantity"]  
                     );  
                     $_SESSION["shopping_cart"][] = $item_array;  
                }  
           }  
           else  
           {  
                $item_array = array(  
                     	  'pid'               =>     $_POST["pid"],  
                          'pname'               =>     $_POST["pname"],  
                          'pprice'               =>     $_POST["pprice"],  
                          'pquantity'          =>     $_POST["pquantity"]  
                );  
                $_SESSION["shopping_cart"][] = $item_array;  
           }  
      }  
      if($_POST["action"] == "remove")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["pid"] == $_POST["pid"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     $message = '<label class="text-success">Product Removed</label>';  
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($_SESSION["shopping_cart"][$keys]['pid'] == $_POST["pid"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['pquantity'] = $_POST["pquantity"];  
                }  
           }  
      }  
      $order_table .= '  
           '.$message.'  
           <table class="table table-bordered">  
                <tr>  
                     <th width="40%">Product Name</th>  
                     <th width="10%">Quantity</th>  
                     <th width="20%">Price</th>  
                     <th width="15%">Total</th>  
                     <th width="5%">Action</th>  
                </tr>  
           ';  
      if(!empty($_SESSION["shopping_cart"]))  
      {  
           $total = 0;  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                $order_table .= '  
                     <tr>  
                          <td>'.$values["pname"].'</td>  
                          <td><input type="text" name="quantity[]" id="quantity'.$values["pid"].'" value="'.$values["pquantity"].'" class="form-control quantity" data-product_id="'.$values["pid"].'" /></td>  
                          <td align="right">$ '.$values["pprice"].'</td>  
                          <td align="right">$ '.number_format($values["pquantity"] * $values["pprice"], 2).'</td>  
                          <td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["pid"].'">Remove</button></td>  
                     </tr>  
                ';  
                $total = $total + ($values["pquantity"] * $values["pprice"]);  
           }  
           $order_table .= '  
                <tr>  
                     <td colspan="3" align="right">Total</td>  
                     <td align="right">$ '.number_format($total, 2).'</td>  
                     <td></td>  
                </tr>  
                <tr>  
                     <td colspan="5" align="center">  
                          <form method="post" action="cart.php">  
                               <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                          </form>  
                     </td>  
                </tr>  
           ';  
      }  
      $order_table .= '</table>';  
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["shopping_cart"])  
      );  
      echo json_encode($output);  
 }  
?>