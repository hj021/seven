<?php

namespace App\Http\Controllers;

use App\Food;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function add(Request $request)
    {
        $result = false;
        if(Product::find($request->id))
        {
            $basket = explode('#',session('basket')) ?? [];
            $basket[] = $request->id;
            session(['basket' => implode('#',$basket)]);
            $result = true;
        }
        return ['result' => $result];
    }

    public function remove($id)
    {
        $id = (int)$id;
        if (is_integer($id)) {
            $basket = unserialize(session('basket'), ["allowed_classes" => false]);
            if (isset($basket[$id])) {
                unset($basket[$id]);
                session(['basket' => serialize($basket)]);
                $count = session('count');
                $count--;
                session(['count' => $count]);
            }
        }
        return redirect('/basket');
    }

    public function checkout()
    {
        if (!auth()->check()) return redirect('/login');
        $user = auth()->user();
        if ($user->address == null || $user->phone == null) {
            return redirect('/edit');
        }
        $basket = cookie('basket')->getValue();
        if ($basket) {
            $basket = unserialize($basket, ["allowed_classes" => false]);
            $jam = 0;
            foreach ($basket as $pid => $value) {
                $p = Food::find($pid);
                if (isset($p))
                    $jam += $p->price * (1 - $p->off / 100);
            }
//            Dargah::transaction($jam,url('reply'));
        } else
            return redirect('/');
    }

    public function reply()
    {
        if (!auth()->check()) return redirect('/login');
        $user = auth()->user();
        if (1) {
            $res = 1;
            if (1) {
                $pay = new Payment();
                $pay->userid = $user->id;
                $pay->products = \Cookie::get('basket');
                $pay->transid = $res->transId;
                $pay->factor = $this->CreateFactor();
                $pay->trace = $res->traceNumber;
                $pay->time = time();
                if ($pay->save()) {
                    $message = 'محصول با موفقیت خرید شد.';
                    $message .= '<br>';
                    $message .= 'شماره فاکتور : ';
                    $message .= $pay->factor;
                    $message .= '<br>';
                    $message .= 'شماره پیگیری بانک : ';
                    $message .= $pay->trace;
                    $message .= '<br>';
                    \Cookie::remove('basket');
                    \Cookie::remove('count');
                }
            } else
                $message = 'شما پرداخت را با موفقیت انجام داده اید.';
        } else
            $message = 'مشکلی در پرداخت به وجود آمده است.درصورت کسر وجه تا 1 ساعت مبلغ به حسابتان باز خواهد گشت.';
        return view('user.complete', compact('message'));
    }

    public function CreateFactor()
    {
        $f = Pay::all(0, 2, 'factor|DESC');
        if (!empty($f))
            $factor = $f[0]->factor;
        else
            $factor = 1000000;
        return $factor + 1;
    }

    public function status()
    {
        if (!auth()->check()) return redirect('/login');
        $user = auth()->user();
        $pays = $user->payments;
        return view('user.status', compact('pays'));
    }

    public function takmil()
    {
        $user = auth()->user();
        return view('user.edit', compact('user'));
    }

    public function takmiler(Request $request)
    {
        $user = auth()->user();
        $errors = [];
        $user->email = (empty($request->email)) ? null : $request->email;
        $user->phone = (empty($request->phone)) ? null : $request->phone;
        $user->name = (empty($request->name)) ? null : $request->name;
        $user->address = (empty($request->address)) ? null : $request->address;

        return redirect('/edit');
    }

}
