<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'TaskFlow')</title>

<!-- CSS simple pour le TP -->
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: Arial, sans-serif; background: #f5f5f5; }
.navbar { background: #2c3e50; padding: 1rem 2rem; }
.navbar a { color: white; text-decoration: none; margin-right: 20px; }
.navbar a:hover { text-decoration: underline; }
.container { max-width: 1200px; margin: 2rem auto; padding: 0 1rem; }
.card { background: white; border-radius: 8px; padding: 1.5rem;
margin-bottom: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
.btn { padding: 0.5rem 1rem; border: none; border-radius: 4px;
cursor: pointer; text-decoration: none; display: inline-block; }
.btn-primary { background: #3498db; color: white; }
.btn-success { background: #27ae60; color: white; }
.btn-danger { background: #e74c3c; color: white; }
.alert { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; }
.alert-success { background: #d4edda; color: #155724; }
.alert-danger { background: #f8d7da; color: #721c24; }
.form-group { margin-bottom: 1rem; }
.form-group label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
.form-group input, .form-group textarea, .form-group select {
width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;
 
 
}
footer { text-align: center; padding: 2rem; color: #666; margin-top: 2rem; }
.badge { padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.8rem; }
.badge-success { background: #27ae60; color: white; }
.badge-warning { background: #f39c12; color: white; }
.badge-secondary { background: #95a5a6; color: white; }
</style>

@yield('styles')
</head>
<body>
{{-- Navigation --}}
@include('partials.navbar')

{{-- Contenu principal --}}
<main class="container">
{{-- Messages flash --}} @if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div> @endif

@if(session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div> @endif

@yield('content')
</main>

{{-- Pied de page --}}
@include('partials.footer')
 
@yield('scripts')
</body>
</html>
