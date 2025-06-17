<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Skill | Counter-Strike 2</title>
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
        .rank-badge {
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
            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                <a href="/">
                    <span class="text-black font-bold text-sm">HS</span>
                </a>
            </div>
            <h1 class="text-xl font-bold tracking-wider">High Skill</h1>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="/" class="hover:text-gray-300 font-medium">Главная</a>
            <a href="/trainers" class="hover:text-gray-300 font-medium">Тренеры</a>
            <a href="#courses" class="hover:text-gray-300 font-medium">Курсы</a>
        </div>
        <button class="md:hidden text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <!-- Основной контент -->
    <div class="container mx-auto px-4 py-8">
        <!-- Описание игры -->
        <div class="bg-gray-900 rounded-lg p-6 dashed-container mb-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 md:pr-8">
                    <h2 class="text-2xl font-bold mb-4">Counter-Strike 2</h2>
                    <p class="mb-4 text-gray-300">
                        Counter-Strike 2 — это тактический шутер от первого лица, где команды террористов и контр-террористов сражаются за выполнение 
                        различных задач. Совершенствуйте свои навыки стрельбы, изучайте карты, работайте в команде и станьте профессиональным игроком 
                        в одной из самых популярных киберспортивных дисциплин.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="font-bold">Жанр:</p>
                            <p class="text-gray-400">Тактический шутер</p>
                        </div>
                        <div>
                            <p class="font-bold">Разработчик:</p>
                            <p class="text-gray-400">Valve</p>
                        </div>
                        <div>
                            <p class="font-bold">Рейтинг:</p>
                            <p class="text-gray-400">4.9/5</p>
                        </div>
                        <div>
                            <p class="font-bold">Год выпуска:</p>
                            <p class="text-gray-400">2023</p>
                        </div>
                    </div>
                    <button class="bg-orange-500 text-black px-6 py-2 rounded-md hover:bg-orange-400 font-semibold">
                       <a href="#courses">Начать обучение</a>
                    </button>
                </div>
                <div class="md:w-1/3 mt-6 md:mt-0">
                    <img src="{{asset('/images/cs2-main.jpg')}}" alt="CS2 Screenshot" class="w-full rounded-md screenshot">
                </div>
            </div>
        </div>

        <!-- Скриншоты игры -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-orange-500 mr-2"></span> Скриншоты игры
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <img src="{{asset('/images/cs2-match.jpg')}}" alt="Match" class="w-full rounded-md screenshot">
                <img src="{{asset('/images/cs2-skin.jpg')}}" alt="Weapons" class="w-full rounded-md screenshot">
                <img src="{{asset('/images/cs2-map.png')}}" alt="Map" class="w-full rounded-md screenshot">
            </div>
        </div>

        <!-- Топ тренеры -->
        <!-- <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-orange-500 mr-2"></span> Лучшие тренеры по CS2
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"> -->
                <!-- Тренер 1 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-orange-500">
                            S
                        </div>
                        <div>
                            <p class="font-bold">S1mpleCoach</p>
                            <p class="text-sm text-gray-400">AWP specialist</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-orange-500">5.0 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">10 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">215</span>
                    </div>
                    <button class="w-full bg-orange-500 text-black px-4 py-2 rounded-md hover:bg-orange-400 font-medium">
                        Выбрать
                    </button>
                </div> -->
                
                <!-- Тренер 2 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-orange-500">
                            N
                        </div>
                        <div>
                            <p class="font-bold">NaviGator</p>
                            <p class="text-sm text-gray-400">IGL expert</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-orange-500">4.9 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">8 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">178</span>
                    </div>
                    <button class="w-full bg-orange-500 text-black px-4 py-2 rounded-md hover:bg-orange-400 font-medium">
                        Выбрать
                    </button>
                </div> -->
                
                <!-- Тренер 3 -->
                <!-- <div class="bg-gray-900 rounded-lg p-4 dashed-container coach-card transition-all">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-gray-800 rounded-full mr-3 flex items-center justify-center text-orange-500">
                            R
                        </div>
                        <div>
                            <p class="font-bold">RushPro</p>
                            <p class="text-sm text-gray-400">Entry fragger</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Рейтинг:</span>
                        <span class="font-medium text-orange-500">4.8 ★</span>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Опыт:</span>
                        <span class="font-medium">6 лет</span>
                    </div>
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Учеников:</span>
                        <span class="font-medium">142</span>
                    </div>
                    <button class="w-full bg-orange-500 text-black px-4 py-2 rounded-md hover:bg-orange-400 font-medium">
                        Выбрать
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Популярные курсы -->
        <div id="courses" class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-orange-500 mr-2"></span> Популярные курсы
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Курс 1 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="{{asset('/images/cs2-awp.jpg')}}" alt="AWP Mastery" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-orange-500 text-black text-xs px-2 py-1 rounded">BESTSELLER</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Мастерство AWP</h4>
                        <p class="text-gray-400 text-sm mb-3">Научитесь доминировать с самой мощной снайперской винтовкой в игре</p>
                        <div class="flex justify-between items-center">
                            <span class="text-orange-500 font-bold">$59.99</span>
                            <button href="payment" class="bg-orange-500 text-black px-4 py-1 rounded-md hover:bg-orange-400 text-sm">
                                <a href="pay">Купить</a>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Курс 2 -->
                <div class="bg-gray-900 rounded-lg overflow-hidden dashed-container">
                    <div class="relative">
                        <img src="{{asset('/images/cs2-igl.png')}}" alt="IGL Guide" class="w-full h-48 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <span class="bg-orange-500 text-black text-xs px-2 py-1 rounded">NEW</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Искусство IGL</h4>
                        <p class="text-gray-400 text-sm mb-3">Станьте лидером команды и ведите свою пятерку к победе</p>
                        <div class="flex justify-between items-center">
                            <span class="text-orange-500 font-bold">$69.99</span>
                            <button class="bg-orange-500 text-black px-4 py-1 rounded-md hover:bg-orange-400 text-sm">
                                <a href="pay">Купить</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Система рангов -->
        <div class="mb-8">
            <h3 class="text-xl font-bold mb-4 flex items-center">
                <span class="w-4 h-4 bg-orange-500 mr-2"></span> Система рангов CS2
            </h3>
            <div class="bg-gray-900 rounded-lg p-6 dashed-container">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="text-center">
                        <div class="rank-badge bg-gray-700 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=S1')"></div>
                        <p class="text-sm">Silver I</p>
                    </div>
                    <div class="text-center">
                        <div class="rank-badge bg-gray-600 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=GN1')"></div>
                        <p class="text-sm">Gold Nova I</p>
                    </div>
                    <div class="text-center">
                        <div class="rank-badge bg-blue-500 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=MG1')"></div>
                        <p class="text-sm">Master Guardian I</p>
                    </div>
                    <div class="text-center">
                        <div class="rank-badge bg-purple-500 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=LEM')"></div>
                        <p class="text-sm">Legendary Eagle</p>
                    </div>
                    <div class="text-center">
                        <div class="rank-badge bg-yellow-500 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=SMFC')"></div>
                        <p class="text-sm">Supreme</p>
                    </div>
                    <div class="text-center">
                        <div class="rank-badge bg-red-500 rounded-full mx-auto mb-2" style="background-image: url('https://via.placeholder.com/24/111111/FFFFFF?text=GE')"></div>
                        <p class="text-sm">Global Elite</p>
                    </div>
                </div>
                <div class="mt-4 text-center text-gray-400 text-sm">
                    Наши тренеры помогут вам подняться на любую ступень этой лестницы!
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
                        <img class="object-scale-down h-12 w-24" src="{{asset('/images/logo.svg')}}">
                        HIGH SKILL
                    </h2>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-orange-500">Помощь</a>
                    <a href="#" class="text-gray-400 hover:text-orange-500">О нас</a>
                    <a href="#" class="text-gray-400 hover:text-orange-500">Контакты</a>
                </div>
            </div>
            <div class="mt-6 pt-6 border-t border-gray-800 text-center text-sm text-gray-500">
                &copy; 2025 High skill. Все права защищены. High Skill являются товарными знаками или зарегистрированными товарными знаками High skill corp.
            </div>
        </div>
    </footer>
</body>
</html>