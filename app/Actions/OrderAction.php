<?php


namespace App\Actions;


use App\Models\Item;
use App\Models\Order;

class OrderAction
{
    /**
     * @param Order $order
     */
    public static function AddItemsToOrder(Order $order): void
    {
        foreach (request('items') as $reqItem) {
            $item = Item::findOrFail($reqItem['id']);
            $order->orderItems()->create([
                                             'order_id' => $order->id,
                                             'item_id' => $item->id,
                                             'price' => $item->price,
                                             'qty' => $reqItem['qty'],
                                             'total' => ($item->price) * $reqItem['qty']
                                         ]);
        }
    }
}
