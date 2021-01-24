<?php
// include main site header.
$pageTitle = 'Portfolio';
include 'header.php';
?>

<section class="gesture">
  <img id="gesture-back" src="img/bk1.jpg" alt="loading image..." style="width:100%;height:300px;"/>
  <div class="gesture-text">
    <p>
      Hi, I am Rosh Pau.
      <br/>
      And I am a web developer and designer.
    </p>
    <button class="btn-view-work">view my work</button>
  </div>
</section>
<section class="skills">
  <h2>What I Can Do</h2>
  <div class="section-part">
    <div class="section-part-sector">
      <img src="img/web-design.png" alt="*" style="width:50%;height:auto;" />
      <h3>Web Design</h3>
      <p class="section-part-sector-p">
        I can design any layout with HTML, JavaScript & CSS.
      </p>
    </div>
    <div class="section-part-sector">
      <img src="img/web-dev.png" alt="*" style="width:80%;height:auto;" />
      <h3>Web Development</h3>
      <p class="section-part-sector-p">
        I can develop any website back-end with PHP & MySQL/SQL.
      </p>
    </div>
    <div class="section-part-sector">
      <img src="img/seo.png" alt="*" style="width:50%;height:auto;" />
      <h3>Search Engine Optimization</h3>
      <p class="section-part-sector-p">
        I can work on your website SEO to rank in first search results.
      </p>
    </div>
  </div>
</section>
<section class="skills pro-skills">
  <h2>Programming Languages</h2>
  <div class="section-part">
    <div class="section-part-sector">
      <img src="img/web-design.png" alt="*" style="width:50%;height:auto;" />
      <h3>HTML | CSS | JavaScript</h3>
      <p class="section-part-sector-p">
        I can design any layout with HTML, JavaScript & CSS.
      </p>
    </div>
    <div class="section-part-sector">
      <img src="img/web-dev.png" alt="*" style="width:70%;height:auto;" />
      <h3>PHP | MySQL | SQL</h3>
      <p class="section-part-sector-p">
        I can develop any website's back-end with PHP & MySQL/SQL.
      </p>
    </div>
    <div class="section-part-sector">
      <img src="img/seo.png" alt="*" style="width:50%;height:auto;" />
      <h3>API's & Frameworks</h3>
      <p class="section-part-sector-p">
        I can build REST API's with AJAX & JSON. I also know ReactJS.
      </p>
    </div>
    <div class="section-part-sector">
      <img src="img/seo.png" alt="*" style="width:50%;height:auto;" />
      <h3>Git & GitHub</h3>
      <p class="section-part-sector-p">
        version control systems and open source fascinates .
      </p>
    </div>
  </div>
</section>
<section class="about" id="about">
  <div class="about-head">
    <img src="img/avatar.jpg" alt="Avatar..." style="width:70%;height:auto;border:2px solid #ccc;border-radius:10px;" />
    <h3>Who is Rosh Pau?</h3>
  </div>
  <article class="about-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet nisl diam, sed hendrerit erat feugiat vel. Maecenas sed tempus purus. Sed eu blandit enim. Suspendisse at lectus sit amet metus blandit venenatis. Integer sodales auctor suscipit. Nam vel ipsum sed ex semper placerat quis id mi. Aenean sollicitudin tortor est, sed egestas orci accumsan et. Sed condimentum tortor ac ante suscipit, eu imperdiet orci consequat. Curabitur nisl sapien, hendrerit venenatis ultrices id, lacinia eu eros. Quisque a neque at lacus viverra elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent ipsum purus, ultrices commodo dolor id, porttitor suscipit justo. <a href="#">Learn more...</a>
  </article>
</section>
<section class="skills projects" id="portfolio">
  <h2>Completed Projects</h2>
  <div class="section-part">
    <div class="project">
      <img src="img/cyc.png" alt="*" style="width:50%;height:auto;" />
      <h3>Cityzens Corner</h3>
      <p>
        A simple sports news blog.
      </p>
      <a href="https://cityzenscorner.cf" target="_blank">view project</a>
    </div>
    <div class="project">
      <img src="img/cyc.png" alt="*" style="width:50%;height:auto;" />
      <h3>Cityzens Corner</h3>
      <p>
        A simple sports news blog.
      </p>
      <a href="https://cityzenscorner.cf" target="_blank">view project</a>
    </div>
    <div class="project">
      <img src="img/cyc.png" alt="*" style="width:50%;height:auto;" />
      <h3>Cityzens Corner</h3>
      <p>
        A simple sports news blog.
      </p>
      <a href="https://cityzenscorner.cf" target="_blank">view project</a>
    </div>
  </div>
</section>

<?php
// include main site footer
$jsFile = 'index';
include 'footer.php';
