<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата тренировки</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8 border border-gray-200">
        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Оплата тренировки</h1>
        
        <form class="space-y-4" method="POST" action="{{ route('payment.process') }}">
            @csrf
            <!-- ФИО -->
            <div>
                <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">ФИО</label>
                <input type="text" id="fullname" name="fullname" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                       placeholder="Иванов Иван Иванович" required>
            </div>
            
            <!-- Ссылка на ТГ -->
            <div>
                <label for="telegram" class="block text-sm font-medium text-gray-700 mb-1">Ссылка на Telegram</label>
                <input type="text" id="telegram" name="telegram" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                       placeholder="@username или https://t.me/username" required>
            </div>
            
            <!-- Описание -->
            <div>
                <label for="schedule" class="block text-sm font-medium text-gray-700 mb-1">Удобное время для тренировки</label>
                <textarea id="schedule" name="schedule" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                          placeholder="Например: будни после 18:00, выходные в любое время" required></textarea>
            </div>
            
            <!-- Разделитель -->
            <div class="border-t border-gray-200 my-6"></div>
            
            <!-- Реквизиты карты -->
            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Реквизиты для оплаты</h2>
                <div class="bg-gray-50 p-4 rounded-md">
                    <p class="text-sm text-gray-700 mb-1">Номер карты:</p>
                    <p class="font-mono text-black font-medium mb-4">1234 5678 9012 3456</p>
                    
                    <p class="text-sm text-gray-700 mb-1">Получатель:</p>
                    <p class="font-mono text-black font-medium">ИВАНОВ И.И.</p>
                </div>
            </div>
            
            <!-- Кнопка подтверждения -->
            <div class="pt-4">
                <button type="submit" 
                         class="w-full bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition">
                    <a href="thankyou"> Подтвердить данные </a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>