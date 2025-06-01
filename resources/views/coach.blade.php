<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCoach | Личный кабинет</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        .player-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Навигационная панель -->
    <nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                <span class="text-black font-bold text-xl">C</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">CYBERCOACH</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:text-gray-300 font-medium">Дашборд</a>
            <a href="#" class="hover:text-gray-300 font-medium">Ученики</a>
            <a href="#" class="hover:text-gray-300 font-medium">Аналитика</a>
            <button class="bg-white text-black px-4 py-1 rounded-md hover:bg-gray-200 font-semibold">
                Выйти
            </button>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8">
        <!-- Приветствие и статистика -->
        <div class="bg-gray-900 rounded-lg p-6 dashed-container mb-8">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Добро пожаловать, Тренер</h2>
                    <p class="text-gray-400">Ваша текущая дисциплина: <span class="text-white font-medium">Counter-Strike 2</span></p>
                </div>
                <div class="flex space-x-4">
                    <div class="text-center">
                        <p class="text-gray-400 text-sm">Учеников</p>
                        <p class="text-2xl font-bold">8</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-400 text-sm">Часов</p>
                        <p class="text-2xl font-bold">156</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-400 text-sm">Рейтинг</p>
                        <p class="text-2xl font-bold">4.8/5</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Дисциплина -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-white mr-2"></span> Ваша дисциплина
            </h3>
            <div class="bg-gray-900 rounded-lg p-6 text-center dashed-container max-w-xs">
                <img src="https://via.placeholder.com/150?text=CS2" class="w-32 h-32 mx-auto mb-4" alt="CS2">
                <p class="font-semibold text-xl">Counter-Strike 2</p>
                <p class="text-sm text-gray-400 mt-2">8 активных учеников</p>
                <button class="mt-4 bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 font-medium">
                    Настройки дисциплины
                </button>
            </div>
        </div>

        <!-- Текущие ученики -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-white mr-2"></span> Ваши ученики
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray-900 rounded-lg p-4 dashed-container player-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center">
                            <span class="text-xl">AK</span>
                        </div>
                        <div>
                            <p class="font-bold">AlexKiller</p>
                            <p class="text-sm text-gray-400">Уровень: Продвинутый</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium">92/100</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">K/D:</span>
                        <span class="font-medium">1.35</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Последняя тренировка:</span>
                        <span class="font-medium">2 дня назад</span>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg p-4 dashed-container player-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center">
                            <span class="text-xl">SM</span>
                        </div>
                        <div>
                            <p class="font-bold">SniperMaster</p>
                            <p class="text-sm text-gray-400">Уровень: Средний</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium">85/100</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">K/D:</span>
                        <span class="font-medium">1.12</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Последняя тренировка:</span>
                        <span class="font-medium">5 дней назад</span>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg p-4 dashed-container player-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center">
                            <span class="text-xl">NT</span>
                        </div>
                        <div>
                            <p class="font-bold">NoobToPro</p>
                            <p class="text-sm text-gray-400">Уровень: Начинающий</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium">78/100</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">K/D:</span>
                        <span class="font-medium">0.89</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Последняя тренировка:</span>
                        <span class="font-medium">Вчера</span>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg p-4 dashed-container player-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center">
                            <span class="text-xl">+</span>
                        </div>
                        <div>
                            <p class="font-bold">Добавить ученика</p>
                            <p class="text-sm text-gray-400">Новая запись</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button class="w-full bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 font-medium">
                            Добавить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-gray-900 border-t border-gray-800 py-6">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            <p>CyberCoach Pro &copy; 2023. Все права защищены.</p>
            <p class="mt-1">Личный кабинет тренера по CS2</p>
        </div>
    </footer>
</body>
</html>