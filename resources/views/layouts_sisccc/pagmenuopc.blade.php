<ul class="nav nav-pills nav-justified">                    
    @foreach($items as $route => $opc)
    <li role="presentation">
        <i class="fa {{ $opc[1] }} fa-5x" aria-hidden="true"></i>      
        <a href="{{ $route }}">{{ $opc[0] }}</a>
    </li>
    @endforeach
</ul>