

<header>
     <h1>🌲已知的造林資料統整🌲 </h1>

</header>
<nav class="Menu">
    <a href="/" class="button">Back to MainPage</a>
    <a href="/forest" class="button">index</a>
    @auth
         
    
    @can('admin')
    <a href="/forest/create" class="button">create</a>
    @endcan
    @endauth
    <a href="/" class="button">show</a>
    
 </nav>
 