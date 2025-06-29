<x-login-layout>
    
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white shadow-xl rounded-lg overflow-hidden">
            
            <div class="bg-black text-white py-6 px-8">
                <h2 class="text-2xl font-bold text-center">Вход в аккаунт</h2>
                <p class="mt-2 text-center text-gray-300">Введите свои учетные данные</p>
            </div>
            
       
            <form class="px-8 py-6" action="{{ route('login') }}">
                 @csrf
                <div class="space-y-5">
                  
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="your@email.com">
                        </div>
                    </div>
             
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="Ваш пароль">
                        </div>
                    </div>
                    
           
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" 
                                class="h-4 w-4 text-black focus:ring-black border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Запомнить меня
                            </label>
                        </div>
                        
                        <div class="text-sm">
                            <a href="#" class="font-medium text-black hover:text-gray-900">
                                Забыли пароль?
                            </a>
                        </div>
                    </div>
                    
      
                    <div>
                        <button type="submit" 
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-colors duration-200">
                            Войти
                        </button>
                    </div>
                </div>
            </form>
            
      
            <div class="px-8 pb-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Или войдите через</span>
                    </div>
                </div>
                
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <div>
                        <a href="#" class="w-full flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            GitHub
                        </a>
                    </div>
                    
                    <div>
                        <a href="#" class="w-full flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Twitter
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="bg-gray-50 px-8 py-4 border-t border-gray-200">
                <p class="text-xs text-gray-500 text-center">
                    Еще нет аккаунта? <a href="#" class="font-medium text-black hover:text-gray-900">Зарегистрируйтесь</a>
                </p>
            </div>
        </div>
        

        <div class="mt-8">
            <p class="text-center text-sm text-gray-600">
                &copy; 2025 Prepod corp. Все права защищены.
            </p>
        </div>
    </div>
</body>
</x-login-layout>
