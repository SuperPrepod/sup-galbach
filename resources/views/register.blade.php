<x-guest-layout>

    <div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-black text-white py-6 px-8">
                <h2 class="text-2xl font-bold text-center">Создайте аккаунт</h2>
                <p class="mt-2 text-center text-gray-300">Заполните форму для верификации</p>
            </div>
            
            <!-- Form -->
 
            <form class="px-8 py-6" method="POST" action="{{ route('register') }}">
                     @csrf
                <div class="space-y-5">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Имя</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="Ваше имя">
                        </div>
                    </div>
                    
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="your@email.com">
                        </div>
                    </div>
                    
                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="new-password" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="Не менее 8 символов">
                        </div>
                    </div>
                    
                    <!-- Confirm Password Input -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Подтвердите пароль</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                                placeholder="Повторите пароль">
                        </div>
                    </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Расскажите о себе. Ваш опыт, дисциплины и т.д.</label>
                            <textarea id="description" name="description" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                                placeholder="Расскажите о себе" required>
                            </textarea>
                         </div>
                    
                    <!-- Terms Checkbox -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" 
                                class="focus:ring-black h-4 w-4 text-black border-gray-300 rounded" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-medium text-gray-700">Я принимаю <a href="#" class="text-black underline">условия использования</a></label>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-colors duration-200">
                            Отправить на верификацию
                        </button>
                    </div>
                </div>
            </form>
            
            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 border-t border-gray-200">
                <p class="text-xs text-gray-500 text-center">
                    Уже есть аккаунт? <a href="login" class="font-medium text-black hover:text-gray-900">Войти</a>
                </p>
            </div>
        </div>
        
        <!-- Logo/Brand -->
        <div class="mt-8">
            <p class="text-center text-sm text-gray-600">
                &copy; 2025 Prepod corp. All right recieved.
            </p>
        </div>
    </div>
</x-guest-layout>