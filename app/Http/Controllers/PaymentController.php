<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
      public function showForm()
    {
        return view('payment.form'); // Папка.страница!!
    }

    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'telegram' => 'required|string|max:255',
            'schedule' => 'required|string',
        ]);

        // Сохраняем данные в БД
        $payment = Payment::create($validated);

        // Перенаправляем на страницу благодарности
        return redirect()->route('payment.thankyou'); // Папка.страница!!
    }

    public function thankyou()
    {
        return view('payment.thankyou'); // Папка.страница!!
    }
}
