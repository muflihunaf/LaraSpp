@if (Auth::guard('web')->check())
    <p class="text-success">
        Kau Login Sebagai <strong> user </strong>
    </p>
    @else 
    <p class="text-danger">
        Kau Log out <strong> user </strong>
    </p>
@endif

@if (Auth::guard('siswa')->check())
    <p class="text-success">
        Kau Login Sebagai <strong> Siswa </strong>
    </p>
    @else
    <p class="text-danger">
        Kau Log out <strong> Siswa </strong>
    </p>    
@endif