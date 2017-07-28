<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <!-- =====  About Header  ===========================  -->
    <header class="projectHeader" id="title">
      <h4 class="projectNum"><?= $page->projectNum() ?></h4>
      <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
      <h2 class="projectSummary"><?= $page->summary() ?></h2>
    </header>
    <div class="projectThumb">
      <?php $images = $page->images()->filterBy('filename', '*=', 'project-thumb');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        <?php endforeach ?>
        <?php endif ?>
    </div>

    <!-- =====  About Info  ===========================  -->
    <section class="projectInfo cf">
      <div class="projectDesc col-2">
        <h3><?= $page->role() ?></h3>
        <?= $page->text()->kirbytext() ?>
      </div>
      <div class="projectPress col-2"><?= $page->press() ?></div>
    </section>

    <div class="cv">
      <section class="about recognition">
       <h2>Recognition</h2>
       <div class="cf">
         <div class="col-2">
           <h3>Awards + Publications</h3>
           <ul>
             <li>2015 <a href="https://www.instagram.com/p/7B1p0KkH57/?tagged=thebookoflovefb" target="blank">Facebook Analog Research Lab, The Book of Love</a></li>
             <li>2014 <a href="http://prix2014.aec.at/prixwinner/13829/" target="blank">Ars Electronica, Honorary Mention</a></li>
             <li>2014 <a href="https://design100.com/NYC14/entry_details.asp?ID=12867" target="blank">NY Design Award</a></li>
             <li>2014 <a href="https://tribecafilm.com/stories/here-are-your-tff-2014-award-winners" target="blank">Tribeca Film Festival, Storyscapes Award</a></li>
             <li>2013 <a href="http://dblp.uni-trier.de/pers/hd/h/Hallacher:Sarah" target="blank">CHI, Works in Progress</a></li>
           </ul>
         </div>
         <div class="col-2">
           <h3>Exhibitions + Screenings</h3>
           <ul>
             <li><a href="http://www.moma.org/calendar/events/1928?locale=en" target="blank">MoMA</a> 2016</li>
             <li><a href="http://resonate.io/2015/projects/clouds/" target="blank">Resonate Festival</a> 2015</li>
             <li><a href="http://www.sundance.org/blogs/news/2014-festival-new-frontier-projects-announced" target="blank">Sundance</a> 2014</li>
             <li>SXSW Interactive 2014</li>
             <li><a href="https://xoxofest.com/2014/projects/clouds" target="blank">XOXO Festival</a> 2014</li>
             <li><a href="http://dumboartsfestival.com/" target="blank">Dumbo Arts Festival</a> 2013</li>
             <li><a href="http://eyeofestival.com/2014/speaker/clouds/" target="blank">Eyeo Festival</a> 2013</li>
             <li><a href="http://laughingsquid.com/mocca-fest-2012-an-indie-comic-show-benefit-for-the-museum-of-comic-cartoon-art/" target="blank">MoCCA Festival</a> 2012</li>
           </ul>
         </div>
       </div>
     </section>
     <section class="about press">
      <h2>Press</h2>
      <div class="cf">
        <div class="col-3">
          <ul>
            <li><a href="http://beautifuldecay.com/2014/10/29/sarah-hallachers-gifs-show-painful-effects-technology-social-media-breakup/" target="blank">Beautiful Decay</a></li>
            <li><a href="http://bust.com/8-natural-bug-repellents-thatll-keep-mosquitos-and-toxic-chemicals-off-your-bod.html" target="blank">Bust Magazine</a></li>
            <li><a href="https://www.cnet.com/news/microsoft-researchers-think-local-with-herehere/" target="blank">CNET</a></li>
            <li><a href="http://www.coolhunting.com/design/meow-meow-tweet" target="blank">Cool Hunting</a></li>
            <li><a href="http://www.creativeapplications.net/openframeworks/clouds-interactive-documentary-exploring-the-creativity-through-the-lens-of-code/" target="blank">Creative Applications</a></li>
            <li><a href="http://thecreatorsproject.vice.com/blog/immerse-yourself-in-a-3d-cloud-of-creative-coding-culture" target="blank">Creator's Project</a></li>
            <li><a href="http://www.dailymail.co.uk/sciencetech/article-2577891/The-interactive-map-reveals-New-Yorks-mood-just-residents-love-complain.html" target="blank">Daily Mail</a></li>
            <li><a href="http://designtaxi.com/news/370159/GIFs-Depicting-Online-Memories-That-Live-On-After-A-Heartbreak/" target="blank">Design Taxi</a></li>
            <li><a href="http://www.elle.com/beauty/makeup-skin-care/tips/g9052/natural-deodorants/?slide=4" target="blank">Elle Magazine</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul>
            <li><a href="https://www.engadget.com/2014/03/10/microsoft-research-herehere-new-york-311/" target="blank">Engadget</a></li>
            <li>FastCo Exist
              [<a href="http://www.fastcoexist.com/3036536/this-is-the-user-experience-of-a-heartbreak" target="blank">1</a>]
              [<a href="https://www.fastcoexist.com/1681140/look-at-the-us-beef-industry-sculpted-as-raw-meat" target="blank">2</a>]
              [<a href="https://www.fastcoexist.com/3027500/the-mood-of-every-nyc-neighborhood-based-on-their-311-complaints" target="blank">3</a>]
            </li>
            <li><a href="http://fusion.net/story/166932/i-tried-all-the-apps-that-are-supposed-to-mend-a-broken-heart/" target="blank">Fusion</a></li>
            <li><a href="http://www.huffingtonpost.com/2014/11/10/sarah-hallacher_n_6103242.html" target="blank">Huffington Post</a></li>
            <li>information aesthetics
              [<a href="http://infosthetics.com/archives/2012/12/beef_stakes_representing_us_beef_production_as_meat.html" target="blank">1</a>]
              [<a href="http://infosthetics.com/archives/2014/03/here_here_mapping_the_concerns_of_ny_citizens_as_iconographic_maps.html" target="blank">2</a>]</li>
            <li><a href="http://www.theinquirer.net/inquirer/news/2333453/microsoft-maps-new-york-s-complainers" target="blank">Inquirer</a></li>
            <li><a href="http://www.npr.org/sections/thesalt/2013/01/09/168940999/artists-state-shaped-steaks-explore-beefs-origins" target="blank">NPR The Salt</a></li>
            <li><a href="http://www.notcot.org/post/52093/" target="blank">NOTCOT</a></li>
            <li><a href="http://nycopendata.tumblr.com/post/79571485596/independently-designed-and-launched-by-microsoft" target="blank">NYC Open Data</a></li>
          </ul>
        </div>
        <div class="col-3">
         <ul>
            <li><a href="http://www.nylon.com/articles/meow-meow-tweet-brooklyn-apothecary-beauty" target="blank">Nylon</a></li>
            <li><a href="http://www.oprah.com/gift/Meow-Meow-Tweet-Soaps?editors_pick_id=54019" target="blank">O The Oprah Magazine</a>
            <li><a href="http://observer.com/2014/03/here-here-interactive-map-lets-you-know-exactly-what-new-yorkers-are-complaining-about/" target="blank">Observer</a></li>
            <li><a href="http://www.psfk.com/2015/06/microsoft-kinnect-virtual-reality-filmmaking-clouds-interactive-documentary.html" target="blank">PSFK</a></li>
            <li><a href="http://www.thedieline.com/blog/2016/10/27/meowmeowtweet" target="blank">The Dieline</a></li></li>
            <li><a href="http://www.metro.us/lifestyle/breaking-up-in-the-social-media-age-is-more-complicated-than-you-d-think/zsJnke---GVUnmpEBxpM/" target="blank">The Metro</a></li>
            <li><a href="http://cityroom.blogs.nytimes.com/2014/03/12/new-york-today-let-it-rain/?_php=true&_type=blogs&hpw&rref=nyregion&_r=1" target="blank">The New York Times City Room Blog</a></li>
            <li><a href="http://www.theverge.com/2013/1/9/3850668/clouds-an-interactive-documentary-shot-on-kinect-proves-the-future-of" target="blank">Verge</a></li>
            <li><a href="http://www.wired.com/2012/06/clouds-code-kinect/" target="blank">WIRED</a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about teaching">
     <h2>Teaching &amp; Fellowships</h2>
     <div class="cf">
       <div class="col-1">
         <ul>
           <li>2014 - 2015 | <a href="https://generalassemb.ly" target="blank">General Assembly</a> | <a href="https://generalassemb.ly/instructors/sarah-hallacher/3437" target="blank">Lead Web Instructor</a></li>
           <li>2014 | <a href="https://hackitback.com" target="blank">Hack it Back</a> | Mentor</li>
           <li>2014 | <a href="https://itp.nyu.edu" target="blank">ITP Camp @ NYU</a> | <a href="https://itp.nyu.edu/camp2014" target="blank">Instructor</a></li>
           <li>2013 - 2014 | <a href="https://itp.nyu.edu" target="blank">ITP @ NYU</a> | Research &amp; Artist Fellow</li>
         <!-- </ul>
       </div>
       <div class="col-2">
         <ul> -->
           <li>2013 - 2014 | <a href="http://www.qc.cuny.edu/Pages/home.aspx" target="blank">Queens College</a> | Guest Lecturer, Web Design</li>
           <li>2012 - 2013 | Paulette Goddard Fellowship</li>
           <li>2011 - 2013 | Tisch School of the Arts Fellowship</li>
         </ul>
       </div>
     </div>
   </section>
     <section class="about skills">
       <h2>Skills</h2>
       <div class="cf">
         <div class="col-3">
           <ul>
             <li>Adobe Creative Suite</li>
             <li>Sketch</li>
             <li>HTML/CSS</li>
             <li>JavaScript/jQuery</li>
           </ul>
         </div>
         <div class="col-3">
           <ul>
             <li>Bootstrap</li>
             <li>Wordpress</li>
             <li>Squarespace</li>
             <li>Node.js</li>
             <li>Framer.js</li>
           </ul>
         </div>
         <div class="col-3">
           <ul>
             <li>Final Cut Pro</li>
             <li>Processing</li>
             <li>Java</li>
             <li>Arduino</li>
           </ul>
         </div>
       </div>
     </section>
  </div>

    <!-- <div class="cv">
      <section class="about recognition">
       <h2>Recognition</h2>
       <div class="cf">
         <div class="col-2">
           <h3>Awards + Publications</h3>
           <ul>
             <li>2015 <a href="https://www.instagram.com/p/7B1p0KkH57/?tagged=thebookoflovefb" target="blank">Facebook Analog Research Lab, The Book of Love</a></li>
             <li>2014 <a href="http://prix2014.aec.at/prixwinner/13829/" target="blank">Ars Electronica, Honorary Mention</a></li>
             <li>2014 <a href="https://design100.com/NYC14/entry_details.asp?ID=12867" target="blank">NY Design Award</a></li>
             <li>2014 <a href="https://tribecafilm.com/stories/here-are-your-tff-2014-award-winners" target="blank">Tribeca Film Festival, Storyscapes Award</a></li>
             <li>2013 <a href="http://dblp.uni-trier.de/pers/hd/h/Hallacher:Sarah" target="blank">CHI, Works in Progress</a></li>
           </ul>
         </div>
         <div class="col-2">
           <h3>Exhibitions + Screenings</h3>
           <ul>
             <li><a href="http://www.moma.org/calendar/events/1928?locale=en" target="blank">MoMA</a> 2016</li>
             <li><a href="http://resonate.io/2015/projects/clouds/" target="blank">Resonate Festival</a> 2015</li>
             <li><a href="http://www.sundance.org/blogs/news/2014-festival-new-frontier-projects-announced" target="blank">Sundance</a> 2014</li>
             <li>SXSW Interactive 2014</li>
             <li><a href="https://xoxofest.com/2014/projects/clouds" target="blank">XOXO Festival</a> 2014</li>
             <li><a href="http://dumboartsfestival.com/" target="blank">Dumbo Arts Festival</a> 2013</li>
             <li><a href="http://eyeofestival.com/2014/speaker/clouds/" target="blank">Eyeo Festival</a> 2013</li>
             <li><a href="http://laughingsquid.com/mocca-fest-2012-an-indie-comic-show-benefit-for-the-museum-of-comic-cartoon-art/" target="blank">MoCCA Festival</a> 2012</li>
           </ul>
         </div>
       </div>
     </section>
     <section class="about press">
      <h2>Press</h2>
      <div class="cf">
        <div class="col-3">
          <ul>
            <li><a href="http://beautifuldecay.com/2014/10/29/sarah-hallachers-gifs-show-painful-effects-technology-social-media-breakup/" target="blank">Beautiful Decay</a></li>
            <li><a href="http://bust.com/8-natural-bug-repellents-thatll-keep-mosquitos-and-toxic-chemicals-off-your-bod.html" target="blank">Bust Magazine</a></li>
            <li><a href="https://www.cnet.com/news/microsoft-researchers-think-local-with-herehere/" target="blank">CNET</a></li>
            <li><a href="http://www.coolhunting.com/design/meow-meow-tweet" target="blank">Cool Hunting</a></li>
            <li><a href="http://www.creativeapplications.net/openframeworks/clouds-interactive-documentary-exploring-the-creativity-through-the-lens-of-code/" target="blank">Creative Applications</a></li>
            <li><a href="http://thecreatorsproject.vice.com/blog/immerse-yourself-in-a-3d-cloud-of-creative-coding-culture" target="blank">Creator's Project</a></li>
            <li><a href="http://www.dailymail.co.uk/sciencetech/article-2577891/The-interactive-map-reveals-New-Yorks-mood-just-residents-love-complain.html" target="blank">Daily Mail</a></li>
            <li><a href="http://designtaxi.com/news/370159/GIFs-Depicting-Online-Memories-That-Live-On-After-A-Heartbreak/" target="blank">Design Taxi</a></li>
            <li><a href="http://www.elle.com/beauty/makeup-skin-care/tips/g9052/natural-deodorants/?slide=4" target="blank">Elle Magazine</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul>
            <li><a href="https://www.engadget.com/2014/03/10/microsoft-research-herehere-new-york-311/" target="blank">Engadget</a></li>
            <li>FastCo Exist
              [<a href="http://www.fastcoexist.com/3036536/this-is-the-user-experience-of-a-heartbreak" target="blank">1</a>]
              [<a href="https://www.fastcoexist.com/1681140/look-at-the-us-beef-industry-sculpted-as-raw-meat" target="blank">2</a>]
              [<a href="https://www.fastcoexist.com/3027500/the-mood-of-every-nyc-neighborhood-based-on-their-311-complaints" target="blank">3</a>]
            </li>
            <li><a href="http://fusion.net/story/166932/i-tried-all-the-apps-that-are-supposed-to-mend-a-broken-heart/" target="blank">Fusion</a></li>
            <li><a href="http://www.huffingtonpost.com/2014/11/10/sarah-hallacher_n_6103242.html" target="blank">Huffington Post</a></li>
            <li>information aesthetics
              [<a href="http://infosthetics.com/archives/2012/12/beef_stakes_representing_us_beef_production_as_meat.html" target="blank">1</a>]
              [<a href="http://infosthetics.com/archives/2014/03/here_here_mapping_the_concerns_of_ny_citizens_as_iconographic_maps.html" target="blank">2</a>]</li>
            <li><a href="http://www.theinquirer.net/inquirer/news/2333453/microsoft-maps-new-york-s-complainers" target="blank">Inquirer</a></li>
            <li><a href="http://www.npr.org/sections/thesalt/2013/01/09/168940999/artists-state-shaped-steaks-explore-beefs-origins" target="blank">NPR The Salt</a></li>
            <li><a href="http://www.notcot.org/post/52093/" target="blank">NOTCOT</a></li>
            <li><a href="http://nycopendata.tumblr.com/post/79571485596/independently-designed-and-launched-by-microsoft" target="blank">NYC Open Data</a></li>
          </ul>
        </div>
        <div class="col-3">
         <ul>
            <li><a href="http://www.nylon.com/articles/meow-meow-tweet-brooklyn-apothecary-beauty" target="blank">Nylon</a></li>
            <li><a href="http://www.oprah.com/gift/Meow-Meow-Tweet-Soaps?editors_pick_id=54019" target="blank">O The Oprah Magazine</a>
            <li><a href="http://observer.com/2014/03/here-here-interactive-map-lets-you-know-exactly-what-new-yorkers-are-complaining-about/" target="blank">Observer</a></li>
            <li><a href="http://www.psfk.com/2015/06/microsoft-kinnect-virtual-reality-filmmaking-clouds-interactive-documentary.html" target="blank">PSFK</a></li>
            <li><a href="http://www.thedieline.com/blog/2016/10/27/meowmeowtweet" target="blank">The Dieline</a></li></li>
            <li><a href="http://www.metro.us/lifestyle/breaking-up-in-the-social-media-age-is-more-complicated-than-you-d-think/zsJnke---GVUnmpEBxpM/" target="blank">The Metro</a></li>
            <li><a href="http://cityroom.blogs.nytimes.com/2014/03/12/new-york-today-let-it-rain/?_php=true&_type=blogs&hpw&rref=nyregion&_r=1" target="blank">The New York Times City Room Blog</a></li>
            <li><a href="http://www.theverge.com/2013/1/9/3850668/clouds-an-interactive-documentary-shot-on-kinect-proves-the-future-of" target="blank">Verge</a></li>
            <li><a href="http://www.wired.com/2012/06/clouds-code-kinect/" target="blank">WIRED</a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about teaching">
     <h2>Teaching &amp; Fellowships</h2>
     <div class="cf">
       <div class="col-2">
         <ul>
           <li>2014 - 2015 | <a href="https://generalassemb.ly" target="blank">General Assembly</a> | <a href="https://generalassemb.ly/instructors/sarah-hallacher/3437" target="blank">Lead Web Instructor</a></li>
           <li>2014 | <a href="https://hackitback.com" target="blank">Hack it Back</a> | Mentor</li>
           <li>2014 | <a href="https://itp.nyu.edu" target="blank">ITP Camp @ NYU</a> | <a href="https://itp.nyu.edu/camp2014" target="blank">Instructor</a></li>
           <li>2013 - 2014 | <a href="https://itp.nyu.edu" target="blank">ITP @ NYU</a> | Research &amp; Artist Fellow</li>
         </ul>
       </div>
       <div class="col-2">
         <ul>
           <li>2013 - 2014 | <a href="http://www.qc.cuny.edu/Pages/home.aspx" target="blank">Queens College</a> | Guest Lecturer, Web Design</li>
           <li>2012 - 2013 | Paulette Goddard Fellowship</li>
           <li>2011 - 2013 | Tisch School of the Arts Fellowship</li>
         </ul>
       </div>
     </div>
   </section>
     <section class="about skills">
       <h2>Skills</h2>
       <div class="cf">
         <div class="col-3">
           <ul>
             <li>Adobe Creative Suite</li>
             <li>Sketch</li>
             <li>HTML/CSS</li>
             <li>JavaScript/jQuery</li>
           </ul>
         </div>
         <div class="col-3">
           <ul>
             <li>Bootstrap</li>
             <li>Wordpress</li>
             <li>Squarespace</li>
             <li>Node.js</li>
             <li>Framer.js</li>
           </ul>
         </div>
         <div class="col-3">
           <ul>
             <li>Final Cut Pro</li>
             <li>Processing</li>
             <li>Java</li>
             <li>Arduino</li>
           </ul>
         </div>
       </div>
     </section>
   </div> -->
  </main>
<?php snippet('footer') ?>
