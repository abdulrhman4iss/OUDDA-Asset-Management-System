
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'عُدّة | OUDDA')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Tahoma, Arial, sans-serif;
            background: #f4f6fa;
            color: #172b4d;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .app-container {
            display: flex;
            min-height: 100vh;
        }

        .main-area {
            flex: 1;
            min-width: 0;
            margin-right: 250px;
        }

        .content {
            padding: 28px;
            min-height: calc(100vh - 120px);
        }

        .page-title {
            font-size: 25px;
            margin-bottom: 20px;
            color: #142d5c;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 18px;
            border-radius: 7px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        @media (max-width: 768px) {
            .main-area {
                margin-right: 0;
            }

            .content {
                padding: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <div class="app-container">

        @include('partials.sidebar')

        <div class="main-area">

            @include('partials.navbar')

            <main class="content">
                @yield('content')
            </main>

            @include('partials.footer')

        </div>

    </div>

    @stack('scripts')

</body>
</html>
