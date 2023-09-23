<tr>
    <td>
        <h1>Поступил новый заказ</h1>
        <p>От кого: {{ $order->first_name }} {{ $order->last_name }}</p>
        <p>Сумма заказа: {{ $order->summ }}</p>
        <p>Время заказа: {{ $order->created_at }}</p>
    </td>
</tr>
