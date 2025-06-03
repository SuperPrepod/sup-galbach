<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за покупку</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8 border border-gray-200 text-center">
        <!-- Иконка галочки -->
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
            <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Спасибо за покупку!</h1>
        
        <p class="text-gray-600 mb-6">
            Выбранный вами тренер свяжется с вами в ближайшее время.
        </p>
        
        <!-- Дополнительная информация -->
        <div class="bg-gray-50 p-4 rounded-md text-sm text-gray-600">
            <p>Если у вас есть вопросы, вы можете написать нам в Telegram:</p>
            <p class="font-medium text-black mt-1">@support_username</p>
        </div>
        
        <!-- Кнопка возврата -->
        <div class="mt-6">
            <a href="/index" class="inline-block px-4 py-2 border border-black rounded-md text-black hover:bg-gray-50 transition">
                Вернуться на главную
            </a>
        </div>
    </div>
</body>
</html>