@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さん、ご注文ありがとうございました</h1>

           <div class="text-center">
               <p>ご登録頂いたメールアドレスへ決済情報をお送りしております。お手続き完了次第商品をお届け致します。</p>
            </div>

           </div>
       </div>
   </div>
</div>
@endsection