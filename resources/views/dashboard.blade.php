@extends('layouts.app')

@section('title', '대시보드')

@section('content')
    <!-- 환영 메시지 -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">안녕하세요, {{ Auth::user()->name }}님!</h1>
        <p class="mt-2 text-gray-600">오늘도 좋은 하루 되세요. 현재 진행 상황을 확인해보세요.</p>
    </div>

    <!-- 통계 카드 -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- 전체 고객 -->
        <div class="group bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">전체 고객</p>
                    <p class="mt-3 text-4xl font-bold text-gray-900">1,234</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            12%
                        </span>
                        <span class="text-sm text-gray-500">지난달 대비</span>
                    </div>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 이번 달 상담 -->
        <div class="group bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">이번 달 상담</p>
                    <p class="mt-3 text-4xl font-bold text-gray-900">89</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            8%
                        </span>
                        <span class="text-sm text-gray-500">지난달 대비</span>
                    </div>
                </div>
                <div class="p-4 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 진행 중인 영업 -->
        <div class="group bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">진행 중인 영업</p>
                    <p class="mt-3 text-4xl font-bold text-gray-900">45</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"/>
                            </svg>
                            0%
                        </span>
                        <span class="text-sm text-gray-500">지난달 대비</span>
                    </div>
                </div>
                <div class="p-4 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 이번 달 매출 -->
        <div class="group bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">이번 달 매출</p>
                    <p class="mt-3 text-4xl font-bold text-gray-900">₩45M</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            23%
                        </span>
                        <span class="text-sm text-gray-500">지난달 대비</span>
                    </div>
                </div>
                <div class="p-4 bg-gradient-to-br from-violet-500 to-violet-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- 최근 활동 & 할 일 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- 최근 상담 -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 bg-gradient-to-r from-blue-50 to-white border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-900">최근 상담</h3>
                    <button class="text-sm text-blue-600 hover:text-blue-700 font-medium hover:underline">
                        전체 보기
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @for($i = 1; $i <= 5; $i++)
                    <div class="group flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-md">
                                    <span class="text-white font-bold text-sm">고{{ $i }}</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">고객명 {{ $i }}</p>
                                <p class="text-xs text-gray-500 mt-0.5">제품 문의 · 2시간 전</p>
                            </div>
                        </div>
                        <span class="px-3 py-1.5 text-xs font-semibold text-blue-700 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                            진행중
                        </span>
                    </div>
                    @endfor
                </div>
            </div>
        </div>

        <!-- 오늘 할 일 -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 bg-gradient-to-r from-violet-50 to-white border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-900">오늘 할 일</h3>
                    <button class="text-sm text-violet-600 hover:text-violet-700 font-medium hover:underline">
                        추가하기
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-3">
                    @for($i = 1; $i <= 5; $i++)
                    <label class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-50 cursor-pointer group transition-colors duration-200">
                        <input type="checkbox" class="w-5 h-5 text-violet-600 border-gray-300 rounded focus:ring-violet-500 focus:ring-2 cursor-pointer">
                        <span class="text-sm text-gray-700 group-hover:text-gray-900 flex-1">고객 {{ $i }} 미팅 준비</span>
                        <span class="text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                            </svg>
                        </span>
                    </label>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
