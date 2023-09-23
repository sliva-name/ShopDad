<tr>
    <td>
        <h1>Поступил новый заказ</h1>
        <p>От кого: <?php echo e($order->first_name, false); ?> <?php echo e($order->last_name, false); ?></p>
        <p>Сумма заказа: <?php echo e($order->summ, false); ?></p>
        <p>Время заказа: <?php echo e($order->created_at, false); ?></p>
    </td>
</tr>
<?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/mail/shipping.blade.php ENDPATH**/ ?>