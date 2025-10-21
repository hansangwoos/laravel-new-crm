<div class="max-w-md w-full">
    {{-- 로그인 카드 --}}
    <div class="bg-white rounded-2xl shadow-2xl p-8 space-y-8 border border-gray-100">
        {{-- 로고 & 제목 --}}
        <div class="text-center">
            <div class="mx-auto w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center shadow-lg mb-4">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                NEW CRM
            </h2>
            <p class="mt-3 text-gray-600">
                로그인하여 시작하세요
            </p>
        </div>

        {{-- 로그인 폼 --}}
        <form wire:submit.prevent="login" class="space-y-6">
            <div class="space-y-5">
                {{-- 이메일 입력 --}}
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        이메일
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input
                            wire:model.live="email"
                            id="email"
                            type="email"
                            required
                            class="block w-full pl-10 pr-3 py-3 border @error('email') border-red-300 bg-red-50 @else border-gray-300 @enderror
                                   rounded-xl text-gray-900 placeholder-gray-400
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   transition-all duration-200"
                            placeholder="admin@example.com"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- 비밀번호 입력 --}}
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        비밀번호
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input
                            wire:model.live="password"
                            id="password"
                            type="password"
                            required
                            class="block w-full pl-10 pr-3 py-3 border @error('password') border-red-300 bg-red-50 @else border-gray-300 @enderror
                                   rounded-xl text-gray-900 placeholder-gray-400
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   transition-all duration-200"
                            placeholder="••••••••"
                        >
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center justify-between">
                <label class="flex items-center cursor-pointer group">
                    <input
                        wire:model="remember"
                        id="remember"
                        type="checkbox"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer transition-all"
                    >
                    <span class="ml-2 block text-sm text-gray-700 group-hover:text-gray-900">
                        로그인 상태 유지
                    </span>
                </label>

                {{-- <div class="text-sm">
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-700">
                        비밀번호 찾기
                    </a>
                </div> --}}
            </div>

            {{-- 로그인 버튼 --}}
            <div>
                <button
                    type="submit"
                    class="group relative w-full flex justify-center items-center py-3.5 px-4 border border-transparent
                           text-base font-semibold rounded-xl text-white
                           bg-gradient-to-r from-blue-600 to-blue-700
                           hover:from-blue-700 hover:to-blue-800
                           focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500
                           shadow-lg shadow-blue-500/50 hover:shadow-xl hover:shadow-blue-600/50
                           disabled:opacity-50 disabled:cursor-not-allowed
                           transform transition-all duration-200 hover:scale-[1.02]"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        로그인
                    </span>
                    <span wire:loading class="flex items-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        로그인 중...
                    </span>
                </button>
            </div>
        </form>

        {{-- 테스트 계정 안내 --}}
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500">테스트 계정</span>
            </div>
        </div>

        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 border border-blue-100">
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="flex-1 text-sm">
                    <p class="font-semibold text-blue-900 mb-2">개발 환경 계정 정보</p>
                    <div class="space-y-1 text-blue-800">
                        <p class="flex items-center">
                            <span class="font-medium mr-2">이메일:</span>
                            <code class="px-2 py-0.5 bg-white rounded text-blue-700 font-mono text-xs">new@example.com</code>
                        </p>
                        <p class="flex items-center">
                            <span class="font-medium mr-2">비밀번호:</span>
                            <code class="px-2 py-0.5 bg-white rounded text-blue-700 font-mono text-xs">password</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
