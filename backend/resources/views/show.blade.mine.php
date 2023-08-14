<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
</head>

<body>

    <h1>
        {{ $name }}'s Posts
    </h1>

    <p>
        {{-- {{ $posts }} --}}
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>
    </p>

    <footer>
        <div style="color:gray">
            <i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-instagram"></i> <i
                class="fa-brands fa-twitter"></i>
        </div>
    </footer>

</body>

</html>


