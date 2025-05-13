<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCoach | League of Legends</title>
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
        .coach-card:hover {
            transform: translateY(-5px);
        }
        .screenshot {
            transition: all 0.3s ease;
            filter: grayscale(30%);
        }
        .screenshot:hover {
            filter: grayscale(0%);
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Навигационная панель -->
    <nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                <span class="text-black font-bold text-sm">LOL</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">LEAGUE OF LEGENDS</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:text-gray-300 font-medium">Главная</a>
            <a href="#" class="hover:text-gray-300 font-medium">Тренеры</a>
            <a href="#" class="hover:text-gray-300 font-medium">Курсы</a>
            <button class="bg-white text-black px-4 py-1 rounded-md hover:bg-gray-200 font-semibold">
                Войти
            </button>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8">
        <!-- Описание игры -->
        <div class="bg-gray-900 rounded-lg p-6 dashed-container mb-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 md:pr-8">
                    <h2 class="text-2xl font-bold mb-4">League of Legends</h2>
                    <p class="mb-4 text-gray-300">
                        League of Legends — это командная стратегическая игра, где две команды по пять могущественных чемпионов сражаются друг против друга, 
                        чтобы разрушить вражескую базу. Выбирайте одного из более чем 140 чемпионов, участвуйте в эпических битвах, добивайтесь убийств 
                        и разрушайте башни на пути к победе.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="font-bold">Жанр:</p>
                            <p class="text-gray-400">MOBA</p>
                        </div>
                        <div>
                            <p class="font-bold">Разработчик:</p>
                            <p class="text-gray-400">Riot Games</p>
                        </div>
                        <div>
                            <p class="font-bold">Рейтинг:</p>
                            <p class="text-gray-400">4.8/5</p>
                        </div>
                        <div>
                            <p class="font-bold">Год выпуска:</p>
                            <p class="text-gray-400">2009</p>
                        </div>
                    </div>
                    <button class="bg-yellow-500 text-black px-6 py-2 rounded-md hover:bg-yellow-400 font-semibold">
                        Начать обучение
                    </button>
                </div>
                <div class="md:w-1/3 mt-6 md:mt-0">
                    <img src="https://via.placeholder.com/400x225/111111/FFFFFF?text=LoL+Screenshot" alt="LoL Screenshot" class="w-full rounded-md screenshot">
                </div>
            </div>
        </div>

        <!-- Скриншоты игры -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-yellow-500 mr-2"></span> Скриншоты игры
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <img src="https://via.placeholder.com/400x225/111111/FFFFFF?text=LoL+Teamfight" alt="Teamfight" class="w-full rounded-md screenshot">
                <img src="https://via.placeholder.com/400x225/111111/FFFFFF?text=LoL+Champion" alt="Champion" class="w-full rounded-md screenshot">
                <img src="https://via.placeholder.com/400x225/111111/FFFFFF?text=LoL+Map" alt="Map" class="w-full rounded-md screenshot">
            </div>
        </div>

        <!-- Топ тренеры -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-yellow-500 mr-2"></span> Лучшие тренеры по LoL
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Тренер 1 -->
                <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-yellow-500">
                            F
                        </div>
                        <div>
                            <p class="font-bold">FakerPro</p>
                            <p class="text-sm text-gray-400">Mid lane specialist</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-yellow-500">4.9 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">7 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">124</span>
                    </div>
                    <button class="w-full bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-400 font-medium">
                        Выбрать
                    </button>
                </div>
                
                <!-- Тренер 2 -->
                <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-yellow-500">
                            D
                        </div>
                        <div>
                            <p class="font-bold">DiamondJG</p>
                            <p class="text-sm text-gray-400">Jungle expert</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-yellow-500">4.8 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">5 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">87</span>
                    </div>
                    <button class="w-full bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-400 font-medium">
                        Выбрать
                    </button>
                </div>
                
                <!-- Тренер 3 -->
                <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-yellow-500">
                            S
                        </div>
                        <div>
                            <p class="font-bold">SupportKing</p>
                            <p class="text-sm text-gray-400">Support guru</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-yellow-500">4.7 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">6 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">76</span>
                    </div>
                    <button class="w-full bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-400 font-medium">
                        Выбрать
                    </button>
                </div>
            </div>
        </div>

        <!-- Популярные курсы -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-yellow-500 mr-2"></span> Популярные курсы
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Курс 1 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x300/111111/FFFFFF?text=Mid+Guide" alt="Mid Guide" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-yellow-500 text-black text-xs px-2 py-1 rounded">NEW</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Мастерство мид-лейна</h4>
                        <p class="text-gray-400 text-sm mb-3">Научитесь доминировать на центральной линии как профессиональные игроки</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">$49.99</span>
                            <button class="bg-yellow-500 text-black px-4 py-1 rounded-md hover:bg-yellow-400 text-sm">
                                Подробнее
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Курс 2 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x300/111111/FFFFFF?text=Jungle+Guide" alt="Jungle Guide" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-yellow-500 text-black text-xs px-2 py-1 rounded">BESTSELLER</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Секреты лесника</h4>
                        <p class="text-gray-400 text-sm mb-3">Полное руководство по контролю карты и эффективному ганкингу</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">$59.99</span>
                            <button class="bg-yellow-500 text-black px-4 py-1 rounded-md hover:bg-yellow-400 text-sm">
                                Подробнее
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-gray-900 border-t border-gray-800 py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-lg font-bold tracking-wider flex items-center">
                        <span class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-2">
                            <span class="text-black text-sm font-bold">L</span>
                        </span>
                        LEAGUE COACH
                    </h2>
                    <p class="text-sm text-gray-400">Официальный партнер Riot Games</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-yellow-500">Помощь</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-500">О нас</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-500">Контакты</a>
                </div>
            </div>
            <div class="mt-6 pt-6 border-t border-gray-800 text-center text-sm text-gray-500">
                &copy; 2023 League Coach. Все права защищены. League of Legends и Riot Games являются товарными знаками или зарегистрированными товарными знаками Riot Games, Inc.
            </div>
        </div>
    </footer>
</body>
</html>