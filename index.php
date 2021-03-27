<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>シングルページレイアウト</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css'); ?>">
</head>
<body>
  <header class="header">
    <p class="site-title-sub">Web designer's portfolio</p>
    <h1 class="site-title">HI, MY NAME IS...</h1>
    <p class="site-description">Check out some of my works.</p>
    <div class="buttons">
      <a class="button" href="#about">LEARN MORE</a>
      <a class="button button-showy" href="#contact">SEND MESSAGE</a>
    </div>
  </header>
  <section class="about" id="about">
    <h2 class="heading">ABOUT ME</h2>
    <p class="about-text">
      Nullam eu ante vel est convallis dignissim.  Fusce suscipit, wisi nec facilisis facilisis, est dui fermentum leo, quis tempor ligula erat quis odio.  Nunc porta vulputate tellus.  Nunc rutrum turpis sed pede.  Sed bibendum.  Aliquam posuere.  Nunc aliquet, augue nec adipiscing interdum, lacus tellus malesuada massa, quis varius mi purus non odio.  Pellentesque condimentum, magna ut suscipit hendrerit, ipsum augue ornare nulla, non luctus diam neque sit amet urna.  Curabitur vulputate vestibulum lorem.  Fusce sagittis, libero non molestie mollis, magna orci ultrices dolor, at vulputate neque nulla lacinia eros.  Sed id ligula quis est convallis tempor.  Curabitur lacinia pulvinar nibh.  Nam a sapien.
    </p>
    <p class="about-text">
      Pellentesque dapibus suscipit ligula.  Donec posuere augue in quam.  Etiam vel tortor sodales tellus ultricies commodo.  Suspendisse potenti.  Aenean in sem ac leo mollis blandit.  Donec neque quam, dignissim in, mollis nec, sagittis eu, wisi.  Phasellus lacus.  Etiam laoreet quam sed arcu.  Phasellus at dui in ligula mollis ultricies.  Integer placerat tristique nisl.  Praesent augue.  Fusce commodo.  Vestibulum convallis, lorem a tempus semper, dui dui euismod elit, vitae placerat urna tortor vitae lacus.  Nullam libero mauris, consequat quis, varius et, dictum id, arcu.  Mauris mollis tincidunt felis.  Aliquam feugiat tellus ut neque.  Nulla facilisis, risus a rhoncus fermentum, tellus tellus lacinia purus, et dictum nunc justo sit amet elit.
    </p>
  </section>
  <section class="works">
    <h2 class="heading">WORKS</h2>
    <div class="works-wrapper">
      <div class="work-box tree">
        <img class="work-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/tree.jpg" alt="制作事例1">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              Lorem ipsum dolor sit amet<br>
              Donec hendrerit tempor tellus.<br>
              Donec pretium posuere tellus. <br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box building">
        <img class="work-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/building.jpg" alt="制作事例,">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              Lorem ipsum dolor sit amet<br>
              Donec hendrerit tempor tellus.<br>
              Donec pretium posuere tellus. <br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box lake">
        <img class="work-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/lake.jpg" alt="制作事例3">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              Lorem ipsum dolor sit amet<br>
              Donec hendrerit tempor tellus.<br>
              Donec pretium posuere tellus. <br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box sky">
        <img class="work-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/sky.jpg" alt="制作事例4">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              Lorem ipsum dolor sit amet<br>
              Donec hendrerit tempor tellus.<br>
              Donec pretium posuere tellus. <br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="skills">
  </section>
  <section class="contact" id="contact">
  </section>
  <footer class="footer">
  </footer>
</body>
</html>
