@php $gio= gmdate("H",time() +3600*7); @endphp

@if($gio <12)
<p>Chao buoi sang</p>
@elseif($gio < 18)
<p>Chao buoi chieu</p>
@else
<p>Chao buoi toi</p>
@endif



@php $date="";
    $date1=today();
    echo $date1 @endphp
    @switch($date)
        @case(1)
            CN
            @break
        @case(2)
            hai
            @break
        @case(3)
            ba
            @break
        @case(4)
            bốn
            @break
        @case(5)
            năm
            @break
        @case(6)
            sáu
            @break
        @case(7)
            bảy
            @break    
        @default
            
    @endswitch
