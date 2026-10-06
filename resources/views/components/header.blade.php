

<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Логотип -->
      <a href="#" class="flex items-center gap-2 shrink-0">
        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
          <span class="text-white font-bold text-lg">L</span>
        </div>
        <span class="text-xl font-bold text-gray-900">Logo</span>
      </a>

      <!-- Навигация (десктоп) -->
      <nav class="hidden md:flex items-center gap-8">
        <a href="{{ route('index') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">index</a>
        <a href="{{ route('welcome') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">welcome</a>
      
      </nav>

      <!-- Кнопки (десктоп) -->
      <div class="hidden md:flex items-center gap-3">
        <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Войти</a>
        <a href="#" class="px-5 py-2 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors shadow-sm">
          Начать
        </a>
      </div>

    </div>
  </div>
</header>
