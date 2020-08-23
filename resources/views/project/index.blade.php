<html>
<head>

</head>
<body>
<h1>Birdboard</h1>
<h2>Projects</h2>
<ul>
    @foreach($projects as $project)
        <li>{{$project->title}}</li>
    @endforeach
</ul>
</body>
</html>
