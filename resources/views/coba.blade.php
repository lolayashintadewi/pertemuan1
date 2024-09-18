<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> halaman word </h1>
    {( $n = 1;)}
   @foreach ($users as $user)
   <h3>ini data ke{( $n++)}</h3>
   <p>{( cantik->lola)}</p>
   <p>{( cantik->email)}</p>
   @endforeach
    
</body>
</html>