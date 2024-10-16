@php
    $menu = [
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Collectibles",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ];
@endphp

<header>
  <div class="container">
    <img src="../../img/favicon.ico" alt="logo" class="logo">
    <nav class="navbar">
   <ul>
   <?php foreach($menu as $item): ?>
          <li><a href="#"><?= $item ?></a></li>
    <?php endforeach; ?>
   </ul>
    </nav>
  </div>
</header>
