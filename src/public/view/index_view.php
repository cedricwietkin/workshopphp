<h1>Liste des produits</h1>
<ul>
    <?php if (!empty($products)) {
        foreach ($products as $product) : ?>
            <li>
                <a href="product.php">
                    <?php echo $product['productName']; ?>
                </a>
            </li>
        <?php endforeach;
    } ?>
</ul>

