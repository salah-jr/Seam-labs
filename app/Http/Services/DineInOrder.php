<?php


namespace App\Http\Services;


use App\Actions\OrderAction;
use App\Models\Order;


class DineInOrder implements OrderContract
{
    private string $type = "dine-in";

    public function createOrder(): Order
    {
        $data = request()->validate(
            [
                'type' => 'required',
                'table_number' => 'required',
                'waiter_name' => 'required',
                'service_charge' => 'required',
                'items' => 'required',
            ]
        );

        $order = new Order();
        $order->type = $this->type;
        $order->table_number = $data['table_number'];
        $order->waiter_name = $data['waiter_name'];
        $order->service_charge = $data['service_charge'];
        $order->save();

        OrderAction::AddItemsToOrder($order);

        return $order->load('orderItems.item');
    }

}
