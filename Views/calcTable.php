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
                        Final Price
                    </th>
                    <th>
                        Amount
                    </th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Final Price
                    </td>
                    <td>
                        <?php echo '$ ' . $finalResult; ?>
                    </td>
                </tr>
            </tbody>  
        </table>
            
    </div>