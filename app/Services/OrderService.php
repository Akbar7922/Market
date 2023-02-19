<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Database\QueryException;

class OrderService
{
    public function create($data){
        try {
            return Order::create($data);
        }catch (QueryException $queryException){
            return $queryException->getMessage();
        }
    }

    public function updatePayment($order_id , $transaction_id){
        try {
            $order = Order::findOrFail($order_id);
            $order->transaction_id = $transaction_id;
            $order->save();
            return true;
        }catch (QueryException $queryException){
            return false;
        }
    }

    public function getFromTransaction($reference_code){
        $transaction_id = Transaction::query()->select('id')->where('reference_code' , $reference_code)->first();
        return Order::where('transaction_id' , $transaction_id->id)->first();
    }

}
