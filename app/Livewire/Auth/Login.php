<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Login extends Component
{
    // 로그인 처리 로직
    // 입력 필드
    public $email = '';
    public $password = '';
    public $remember  = false;

    /**
     * 유효성 검사 규칙
     */
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    /**
     * 실시간 유효성 검사
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,);
    }

    /**
     * 로그인 처리
     */
    public function login()
    {
        // 유효성 검사
        $credentials = $this->validate();

        // 로그인 시도
        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
            'is_active' => true // 활성화 된 사용자만
        ], $this->remember )){
            // 세션 재생성
            session()->regenerate();

            // 마지막 로그인 시간 업데이트 및 로그인 IP 체킹
            Auth::user()->update([
                'last_login_at' => now(),
                'login_ip' => request()->ip(),
            ]);

            // 대시보드로 리턴
            return redirect()->intended(route('/dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => "이메일 또는 비밀번호가 올바르지 않습니다",
            'is_active' => "활성화된 사용자만 로그인 할 수 있습니다",
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
