
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
    <div class="AccountINFO">
     <ul>
         <li>
             <p>
                 Your account Is {{ Auth::user()->name }} Now!
         </li>
     </ul>
 </div>

</nav>
