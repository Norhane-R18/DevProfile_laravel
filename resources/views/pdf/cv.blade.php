<!DOCTYPE html>
<html>
<head>
    <title>CV de {{ $user->name }}</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px;
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2563eb;
            padding-bottom: 20px;
        }
        h1 { 
            color: #1e40af;
            font-size: 28px;
            margin-bottom: 10px;
        }
        h2 { 
            color: #3b82f6;
            font-size: 20px;
            margin-bottom: 15px;
        }
        h3 {
            color: #1e40af;
            font-size: 18px;
            margin: 25px 0 15px;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 5px;
        }
        .bio {
            margin: 20px 0;
            text-align: justify;
        }
        .projects {
            margin: 20px 0;
        }
        .project-item {
            margin-bottom: 15px;
        }
        .project-title {
            font-weight: bold;
            color: #1e40af;
        }
        .skills {
            margin: 20px 0;
        }
        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .skill-item {
            background-color: #e5e7eb;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $user->name }}</h1>
        <h2>{{ $user->title }}</h2>
    </div>

    <div class="bio">
        <p>{{ $user->bio }}</p>
    </div>

    <div class="projects">
        <h3>Projets</h3>
        @foreach ($user->projects as $project)
            <div class="project-item">
                <div class="project-title">{{ $project->title }}</div>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </div>

    <div class="skills">
        <h3>Compétences</h3>
        <div class="skill-list">
            @foreach ($user->skills as $skill)
                <div class="skill-item">{{ $skill->name }}</div>
            @endforeach
        </div>
    </div>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')
        <!-- form fields -->
    </form>
</body>
</html>