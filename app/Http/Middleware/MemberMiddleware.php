<?php

namespace App\Http\Middleware;

use Closure;

class MemberMiddleware
{
    private $memberService;
    
    public function __construct(\App\Services\MemberService $memberService){
        $this->memberService = $memberService;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user() == null || auth()->user()->role_id != \App\UserRole::$MEMBER){
            return redirect('/login');
        }
        
        $member = $this->memberService->getMemberByUserId(auth()->user()->id);
        if($member == null){
            return redirect('/login')->with('error', 'please contact customer support');
        }
        
        if(!$member->approved_status){
            return redirect('/login')->with('error', 'your account is still being reviewed');
        }
        
        return $next($request);
    }
}
