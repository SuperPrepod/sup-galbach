<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCoach | Brawlhalla</title>
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
        .legend-icon {
            width: 24px;
            height: 24px;
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Навигационная панель -->
    <nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center">
                <span class="text-black font-bold text-sm">BH</span>
            </div>
            <h1 class="text-xl font-bold tracking-wider">BRAWLHALLA</h1>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="/" class="hover:text-gray-300 font-medium nav-link text-purple-400">Главная</a>
            <a href="/trainers" class="hover:text-gray-300 font-medium nav-link">Тренеры</a>
            <a href="#courses" class="hover:text-gray-300 font-medium">Курсы</a>
        </div>
        <!-- <button class="md:hidden text-white" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button> -->
    </nav>

    <!-- Мобильное меню -->
    <!-- <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-b border-gray-800 p-4">
        <div class="flex flex-col space-y-4">
            <a href="#about" class="hover:text-gray-300 font-medium nav-link text-purple-400">Главная</a>
            <a href="#coaches" class="hover:text-gray-300 font-medium nav-link">Тренеры</a>
            <a href="#courses" class="hover:text-gray-300 font-medium nav-link">Курсы</a>
            <a href="#legends" class="hover:text-gray-300 font-medium nav-link">Легенды</a>
            <button class="bg-white text-black px-4 py-1 rounded-md hover:bg-gray-200 font-semibold w-full">
                Войти
            </button>
        </div>
    </div> -->

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8">
        <!-- Описание игры -->
        <section id="about" class="bg-gray-900 rounded-lg p-6 dashed-container mb-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 md:pr-8">
                    <h2 class="text-2xl font-bold mb-4">Brawlhalla</h2>
                    <p class="mb-4 text-gray-300">
                        Brawlhalla — это бесплатная платформерная файтинг-игра, где легендарные воины сражаются за славу в Вальгалле. 
                        Выбирайте из 50+ уникальных легенд, осваивайте различные виды оружия и участвуйте в динамичных сражениях 
                        на 1-8 игроков. Идеальная комбинация доступности и глубины игрового процесса.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="font-bold">Жанр:</p>
                            <p class="text-gray-400">Платформер-файтинг</p>
                        </div>
                        <div>
                            <p class="font-bold">Разработчик:</p>
                            <p class="text-gray-400">Blue Mammoth Games</p>
                        </div>
                        <div>
                            <p class="font-bold">Рейтинг:</p>
                            <p class="text-gray-400">4.7/5</p>
                        </div>
                        <div>
                            <p class="font-bold">Год выпуска:</p>
                            <p class="text-gray-400">2017</p>
                        </div>
                    </div>
                    <button class="bg-purple-600 text-white px-6 py-2 rounded-md hover:bg-purple-500 font-semibold">
                        <a href="#courses">Начать обучение</a>
                    </button>
                </div>
                <div class="md:w-1/3 mt-6 md:mt-0">
                    <img src="{{asset('/images/bh-main.jpg')}}" alt="Brawlhalla Screenshot" class="w-full rounded-md screenshot">
                </div>
            </div>
        </section>

        <!-- Скриншоты игры -->
        <section class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-purple-600 mr-2"></span> Скриншоты игры
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <img src="{{asset('/images/bh-battle.jpg')}}" alt="Battle" class="w-full rounded-md screenshot">
                <img src="{{asset('/images/bh-legends.jpg')}}" alt="Legends" class="w-full rounded-md screenshot">
                <img src="{{asset('/images/bh-arena.jpg')}}" alt="Arena" class="w-full rounded-md screenshot">
            </div>
        </section>

        <!-- Топ тренеры -->
        <!-- <section id="coaches" class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-purple-600 mr-2"></span> Лучшие тренеры по Brawlhalla
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"> -->
                <!-- Тренер 1 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-purple-500">
                            S
                        </div>
                        <div>
                            <p class="font-bold">SandstormPro</p>
                            <p class="text-sm text-gray-400">2x World Champion</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-purple-500">5.0 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">6 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">198</span>
                    </div>
                    <button class="w-full bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-500 font-medium">
                        Выбрать
                    </button>
                </div> -->
                
                <!-- Тренер 2 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-purple-500">
                            B
                        </div>
                        <div>
                            <p class="font-bold">BoomieCoach</p>
                            <p class="text-sm text-gray-400">Spear & Bow expert</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-purple-500">4.9 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">5 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">156</span>
                    </div>
                    <button class="w-full bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-500 font-medium">
                        Выбрать
                    </button>
                </div> -->
                
                <!-- Тренер 3 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-purple-500">
                            D
                        </div>
                        <div>
                            <p class="font-bold">DobreinTrain</p>
                            <p class="text-sm text-gray-400">Sword & Katars master</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-purple-500">4.8 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">4 года</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">132</span>
                    </div>
                    <button class="w-full bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-500 font-medium">
                        Выбрать
                    </button>
                </div>
            </div>
        </section> -->

        <!-- Популярные курсы -->
        <section id="courses" class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-purple-600 mr-2"></span> Популярные курсы
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Курс 1 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="{{asset('/images/bh-move.jpg')}}" alt="Advanced Tech" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded">BESTSELLER</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Продвинутые техники</h4>
                        <p class="text-gray-400 text-sm mb-3">Освойте уклонения, чейн-дадж и другие продвинутые механики</p>
                        <div class="flex justify-between items-center">
                            <span class="text-purple-400 font-bold">$39.99</span>
                            <button class="bg-purple-600 text-white px-4 py-1 rounded-md hover:bg-purple-500 text-sm">
                                <a href="/pay">Купить</a>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Курс 2 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="{{asset('/images/bh-weapons.jpg')}}" alt="Weapon Mastery" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded">NEW</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Мастерство оружия</h4>
                        <p class="text-gray-400 text-sm mb-3">Полное руководство по всем видам оружия в Brawlhalla</p>
                        <div class="flex justify-between items-center">
                            <span class="text-purple-400 font-bold">$49.99</span>
                            <button class="bg-purple-600 text-white px-4 py-1 rounded-md hover:bg-purple-500 text-sm">
                                <a href="/pay">Купить</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Футер -->
    <footer class="bg-gray-900 border-t border-gray-800 py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-lg font-bold tracking-wider flex items-center">
                        <img class="object-scale-down h-12 w-24" src="{{asset('/images/logo.svg')}}">
                        HIGH SKILL
                    </h2>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-purple-400">Помощь</a>
                    <a href="#" class="text-gray-400 hover:text-purple-400">О нас</a>
                    <a href="#" class="text-gray-400 hover:text-purple-400">Контакты</a>
                </div>
            </div>
            <div class="mt-6 pt-6 border-t border-gray-800 text-center text-sm text-gray-500">
                &copy; 2025 High skill. Все права защищены. High Skill являются товарными знаками или зарегистрированными товарными знаками High skill corp.
            </div>
        </div>
    </footer>
</body>
</html>