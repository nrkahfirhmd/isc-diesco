<head>
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
</head>
<body>
    @if (session('success'))
        <div class="alert-wrapper">
            <div class="alert success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="alert-wrapper">
            <div class="alert error">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('warning'))
        <div class="alert-wrapper">
            <div class="alert warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('warning') }}
            </div>
        </div>
    @endif
</body>