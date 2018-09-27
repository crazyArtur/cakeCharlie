<h1>Products</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <?php foreach ($products as $product): ?>
    <tr>
        <td>
            <?= $product->product_name ?>
        </td>
        <td>
            <?= $product->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>