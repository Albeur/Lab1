<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>

<h1>Product Listing</h1>
    <form action="/save" method="post">
        <input type="hidden" name="id" value="<?= isset($tabl['id']) ? $tabl['id'] : '' ?>">
        <label>ProductName: </label> &nbsp &nbsp &nbsp &nbsp  
        <input type="text" name="ProductName" placeholder="ProductName" value="<?= isset($tabl['ProductName']) ? $tabl['ProductName'] : '' ?>">
        <br> <br>
        <label>ProductDescription: </label> 
        <input type="text" name="ProductDescription" placeholder="ProductDescription" value="<?= isset($tabl['ProductDescription']) ? $tabl['ProductDescription'] : '' ?>">
        <br> <br>
        <label for="ProductCategory">Choose a Category:</label>
        <select id="ProductCategory" name="ProductCategory">
        <option value="Fresh Produce"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Fresh Produce' ? 'selected' : '' ?>>Fresh Produce</option>
        <option value="Dairy Products"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Dairy Products' ? 'selected' : '' ?>>Dairy Products</option>
        <option value="Meat and Seafood"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Meat and Seafood' ? 'selected' : '' ?>>Meat and Seafood</option>
        <option value="Bakery"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Bakery' ? 'selected' : '' ?>>Bakery</option>
        <option value="Canned and Jarred Goods"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Canned and Jarred Goods' ? 'selected' : '' ?>>Canned and Jarred Goods</option>
        <option value="Home and Kitchenware"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Home and Kitchenware' ? 'selected' : '' ?>>Home and Kitchenware</option>
        <option value="Office and School Supplies"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Office and School Supplies' ? 'selected' : '' ?>>Office and School Supplies</option>
        <option value="Pet Supplies"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Pet Supplies' ? 'selected' : '' ?>>Pet Supplies</option>
        <option value="Baby and Childcare Products"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Baby and Childcare Products' ? 'selected' : '' ?>>Baby and Childcare Products</option>
        <option value="Health and Beauty Products"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Health and Beauty Products' ? 'selected' : '' ?>>Health and Beauty Products</option>
        <option value="Household and Cleaning Products"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Household and Cleaning Products' ? 'selected' : '' ?>>Household and Cleaning Products</option>
        <option value="Baking Supplies"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Baking Supplies' ? 'selected' : '' ?>>Baking Supplies</option>
        <option value="Condiments and Sauces"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Condiments and Sauces' ? 'selected' : '' ?>>Condiments and Sauces</option>
        <option value="Snacks"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Snacks' ? 'selected' : '' ?>>Snacks</option>
        <option value="Pasta and Grains"<?= isset($tabl['ProductCategory']) && $tabl['ProductCategory'] === 'Pasta and Grains' ? 'selected' : '' ?>>Pasta and Grains</option>
        </select><br>   <br>
        <label>ProductQuantity: </label> &nbsp &nbsp 
        <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= isset($tabl['ProductQuantity']) ? $tabl['ProductQuantity'] : '' ?>">
        <br> <br>
        <label>ProductPrice: </label> &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= isset($tabl['ProductPrice']) ? $tabl['ProductPrice'] : '' ?>">
        <br>
        <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" value="Submit">
        
    </form>
    <ul>
        <?php foreach ($ta as $g): ?>
            <br>
        <li>
            <strong>ProductName:</strong> <?= $g['ProductName'] ?><br>
            <strong>ProductDescription:</strong> <?= $g['ProductDescription'] ?><br>
            <strong>ProductCategory:</strong> <?= $g['ProductCategory'] ?><br>
            <strong>ProductQuantity:</strong> <?= $g['ProductQuantity'] ?><br>
            <strong>ProductPrice:</strong> <?= $g['ProductPrice'] ?><br>
            <strong>Command:</strong> <a href="/delete/<?= $g['id'] ?>">delete</a> || <a href="/edit/<?= $g['id'] ?>">edit</a>
        </li>
        <?php endforeach; ?>
    </ul>
   
</body>
</html>