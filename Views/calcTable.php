<div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>
                        Description
                    </th>
                    <th>
                        Amount
                    </th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Customer Name
                    </td>
                    <td>
                        <?php echo '$ ' . $baseInfo['baseProductPrice']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Name
                    </td>
                    <td>
                        <?php echo '$ ' . $baseInfo['baseProductPrice']; ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        Base Price
                    </td>
                    <td>
                        <?php echo '$ ' . $baseInfo['baseProductPrice']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Quantity Bought
                    </td>
                    <td>
                        <?php echo $baseInfo['quantity'] . ' units'; ?>
                    </td>   
                </tr>
                <tr>
                    <td>
                        Customer Fixed Discount
                    </td>
                    <td>
                        <?php echo '$ ' . $baseInfo['customerFixed']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Customer Variable Discount
                    </td>
                    <td>
                        <?php echo '% ' . $baseInfo['customerVariable'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Total Sum of Fixed Discounts from Groups
                    </td>
                    <td>
                        <?php echo '$ ' . $baseInfo['totalGroupFixed']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Highest Variable from Groups
                    </td>
                    <td>
                        <?php echo '% ' . $baseInfo['highestGroupVariable']; ?>
                    </td>
                </tr>
            </tbody>  
        </table>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>
                        Calc. Process
                    </th>
                    <th>
                        Amount
                    </th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Base Price - Fixed Discount from Customer
                    </td>
                    <td>
                        $ 999
                    </td>
                </tr>
                <tr>
                    <td>
                        Base Price - Variable Discount from Customer
                    </td>
                    <td>
                        $ 1081
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Base Price - Ttl. Fixed Discount from Groups
                    </td>
                    <td>
                        $ 1234
                    </td>
                </tr>
                <tr>
                    <td>
                        Base Price - Ttl. Variable Discount from Groups
                    </td>
                    <td>
                       $ 980 
                    </td>
                </tr>
                <tr>
                    <td>
                        Best Deal per unit
                    </td>
                    <td>
                         $980
                    </td>
                </tr>
                <tr>
                    <td>
                        Best Deal per Unit * Quantity
                    </td>
                    <td>
                         $ 12.123
                    </td>
                </tr>
                <tr>
                    <td>
                        Discount For Bulk?
                    </td>
                    <td>
                         NO
                    </td>
                </tr>
                <tr>
                    <td>
                        Final Price
                    </td>
                    <td>
                         $ 12.123
                    </td>
                </tr>
            </tbody>  
        </table>
            
    </div>