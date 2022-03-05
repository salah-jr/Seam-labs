<?php


namespace App\Http\Services;


use App\Actions\OrderAction;
use App\Models\Order;

class TakeAwayOrder implements OrderContract
{
    private string $type = 'takeaway';

    public function createOrder(): Order
    {
        request()->validate(
            [
                'type' => 'required',
            ]
        );
        $order = new Order();
        $order->type = $this->type;
        $order->save();

        OrderAction::AddItemsToOrder($order);

        return $order;
    }
}
