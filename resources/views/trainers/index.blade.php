<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши тренеры</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #000;
        }
        .dashed-container {
            border: 2px dashed rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        .dashed-container:hover {
            border-color: rgba(255, 255, 255, 0.7);
        }
        .trainer-card:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Навигационная панель -->
    <nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                <span class="text-black font-bold text-sm">HS</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">HIGH SKILL</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="/" class="hover:text-gray-300 font-medium">Главная</a>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <h1 class="text-3xl font-bold mb-8 flex items-center">
            <span class="w-4 h-4 bg-white mr-3"></span> Наши тренеры
        </h1>

        <!-- Список тренеров -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($trainers as $trainer)
            <div class="bg-gray-900 rounded-lg p-6 dashed-container trainer-card transition-all">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold">{{ strtoupper(substr($trainer->name, 0, 1)) }}</span>
                    </div>
                    <h3 class="text-xl font-bold mb-1">{{ $trainer->name }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ $trainer->email }}</p>
                    
                    <div class="w-full mb-4">
                        <!-- <div class="flex justify-between text-xs mb-1">
                            <span>Опыт</span>
                            <span>5 лет</span>
                        </div> -->
                        <!-- <div class="w-full bg-gray-800 rounded-full h-1.5">
                            <div class="bg-white h-1.5 rounded-full" style="width: 85%"></div>
                        </div> -->
                        <h3 class="text-xl font-bold mb-1">{{ $trainer->description }}</h3>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-2 mb-5">
                        <span class="px-2 py-1 bg-gray-800 rounded-full text-xs">CS2</span>
                        <span class="px-2 py-1 bg-gray-800 rounded-full text-xs">Aim</span>
                        <span class="px-2 py-1 bg-gray-800 rounded-full text-xs">Tactics</span>
                    </div>
                    
                    <button class="bg-white text-black px-6 py-2 rounded-md hover:bg-gray-200 font-semibold w-full">
                        Выбрать
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        @if($trainers->isEmpty())
        <div class="bg-gray-900 rounded-lg p-8 dashed-container text-center">
            <p class="text-lg">В настоящее время нет доступных тренеров</p>
            <p class="text-gray-400 mt-2">Проверьте позже или свяжитесь с поддержкой</p>
        </div>
        @endif
    </div>
</body>
</html>