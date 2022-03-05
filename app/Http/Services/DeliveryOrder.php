<?php


namespace App\Http\Services;


use App\Actions\OrderAction;
use App\Models\Order;

class DeliveryOrder implements OrderContract
{
    private string $type = 'delivery';

    public function createOrder(): Order
    {
        $data = request()->validate(
            [
                'type' => 'required',
                'fees' => 'required',
                'customer_phone' => 'required',
                'customer_name' => 'required',
                'items' => 'required',
            ]
        );

        $order = new Order();
        $order->type = $this->type;
        $order->fees = $data['fees'];
        $order->customer_phone = $data['customer_phone'];
        $order->customer_name = $data['customer_name'];
        $order->save();

        OrderAction::AddItemsToOrder($order);

        return $order;
    }
}
