<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberStudent | Личный кабинет</title>
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
        .stat-card:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Навигационная панель -->
    <nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
<<<<<<< HEAD
                <span class="text-black font-bold text-sm">HS</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">HIGH SKILL</h1>
=======
                <span class="text-black font-bold text-sm">ST</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">CYBERSTUDENT</h1>
>>>>>>> 960fee48c01bdc29874b9eb964cde9283005da99
        </div>
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:text-gray-300 font-medium">Профиль</a>
            <a href="#" class="hover:text-gray-300 font-medium">Статистика</a>
            <button class="bg-white text-black px-4 py-1 rounded-md hover:bg-gray-200 font-semibold">
                Выйти
            </button>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <!-- Профиль ученика -->
        <div class="bg-gray-900 rounded-lg p-6 dashed-container mb-8">
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <div class="w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center mb-4 md:mb-0 md:mr-6">
                    <span class="text-3xl">AK</span>
                </div>
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-bold mb-1">AlexKiller</h2>
                    <p class="text-gray-400 mb-3">Counter-Strike 2</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <div class="text-center">
                            <p class="text-gray-400 text-sm">Уровень</p>
                            <p class="font-medium">Продвинутый</p>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-400 text-sm">Тренер</p>
                            <p class="font-medium">ProCoach</p>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-400 text-sm">В команде</p>
                            <p class="font-medium">3 месяца</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Основная статистика -->
        <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="bg-gray-900 rounded-lg p-4 text-center dashed-container stat-card transition-all">
                <p class="text-gray-400 text-sm">Текущий рейтинг</p>
                <p class="text-3xl font-bold my-2">92</p>
                <p class="text-sm text-gray-400">/100</p>
            </div>
            <div class="bg-gray-900 rounded-lg p-4 text-center dashed-container stat-card transition-all">
                <p class="text-gray-400 text-sm">K/D соотношение</p>
                <p class="text-3xl font-bold my-2">1.35</p>
                <p class="text-sm text-gray-400">Последняя игра</p>
            </div>
        </div>

        <!-- Последние тренировки -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-white mr-2"></span> Последние тренировки
            </h3>
            <div class="space-y-3">
                <div class="bg-gray-900 rounded-lg p-4 dashed-container">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium">Тренировка по позиционированию</p>
                            <p class="text-sm text-gray-400">2 дня назад • 1.5 часа</p>
                        </div>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Завершена</span>
                    </div>
                </div>
                <div class="bg-gray-900 rounded-lg p-4 dashed-container">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium">Анализ матча</p>
                            <p class="text-sm text-gray-400">5 дней назад • 1 час</p>
                        </div>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Завершена</span>
                    </div>
                </div>
                <div class="bg-gray-900 rounded-lg p-4 dashed-container">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium">Индивидуальная сессия</p>
                            <p class="text-sm text-gray-400">Запланирована на 15.06</p>
                        </div>
                        <span class="px-3 py-1 bg-white text-black rounded-full text-sm font-medium">Предстоящая</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Прогресс -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-white mr-2"></span> Ваш прогресс
            </h3>
            <div class="bg-gray-900 rounded-lg p-6 dashed-container">
                <div class="mb-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span>Точность стрельбы</span>
                        <span>65%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2.5">
                        <div class="bg-white h-2.5 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span>Реакция</span>
                        <span>78%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2.5">
                        <div class="bg-white h-2.5 rounded-full" style="width: 78%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Тактическое понимание</span>
                        <span>82%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2.5">
                        <div class="bg-white h-2.5 rounded-full" style="width: 82%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-gray-900 border-t border-gray-800 py-6">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            <p>CyberStudent &copy; 2023. Личный кабинет игрока CS2</p>
        </div>
    </footer>
</body>
</html>