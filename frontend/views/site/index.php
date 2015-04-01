<?php
    use yii\helpers\Html;
    use yii\widgets\ListView;
?>
    <section id="headline">
        <?php
            $items = [];
            foreach ($headline as $content){
                $items[] = [
                    'content' =>"<img src='../../backend/web/picture/artikel/".$content->gambar."'/>",
                    'caption' => $content->judul,
                    
        ];
            }

        echo yii\bootstrap\Carousel::widget([
            'items' =>$items,
            'controls'=>["<span class='glyphicon glyphicon-chevron-left'>", "<span class='glyphicon glyphicon-chevron-right'>"]
        ]);
        ?>
    </section>
    <section id="profile">
      <div class="container">
         <h1 class="m_3 center">About Us</h1>
      <div class="col-md-5">
        <div class="blog_left">
          <a href="single.html" class="mask"><img src="images/blog.jpg" alt="image" class="img-responsive zoom-img"></a>
        </div>
      </div>
      <div class="col-md-7">
        <h2><a href="single.html"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </a></h2>
        <h3>Posted 02.05.2015 at 18:00h in Web Design By <a href="single.html">Majority have</a> / 60 Likes / 2 Comments.</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
       </div>  
    </div> 
    </section>
    <hr>
    <section id="services">
          <div class="container">
            <h1 class="m_3 center">Services</h1>
            <div class="row_1">
              <div class="col-md-4 box_1">
                <i class="icon1"> </i>
                <h3>Web Design</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="col-md-4 box_1">
                <i class="icon2"> </i>
                <h3>Web Development</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="col-md-4 box_1">
                <i class="icon3"> </i>
                <h3>Simple and Clean</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="row_2">
              <div class="col-md-4 box_1">
                <i class="icon4"> </i>
                <h3>High Quality</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="col-md-4 box_1">
                <i class="icon5"> </i>
                <h3>Responsive Design</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="col-md-4 box_1">
                <i class="icon6"> </i>
                <h3>Easy to Customize</h3>
                <p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus Morbi in dui quis est pulvinar</p>
              </div>
              <div class="clearfix"> </div>
            </div>
        </div>
      </section>
      <hr>
    <section id="portfolio">
        <div class='container'>
            <h1 class="m_3 center">Portfolio</h1>
        
         <?php
            echo ListView::widget([
                'dataProvider' => $album,
                        'itemView' => '_album',
            ]);
        ?>
    </section>
    <section class="team_grid">
        <div class="container">
            <h3 class="m_1">Apa Kata Mereka ?</h3>
          <div class="span_3">
           <div class="col-md-6">
            <ul class="span_2">
                <li class="span_2-left"><img src="images/a1.jpg" class="img-responsive" alt=""/></li>
                <li class="span_2-right">
                  <h3>Gummies lollipop</h3>
                  <h4>Web Designer</h4>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                  <ul class="about_social">
                    <li><a href=""> <i class="fb1"> </i> </a></li>
                    <li><a href=""><i class="tw1"> </i> </a></li>
                    <li><a href=""><i class="google1"> </i> </a></li>
                    <li><a href=""><i class="flickr"> </i> </a></li>
                    <li><a href=""><i class="vemeo"> </i> </a></li>
                  </ul>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6">
            <ul class="span_2">
                <li class="span_2-left"><img src="images/a2.jpg" class="img-responsive" alt=""/></li>
                <li class="span_2-right">
                  <h3>Gummies lollipop</h3>
                  <h4>Web Designer</h4>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                  <ul class="about_social">
                    <li><a href=""> <i class="fb1"> </i> </a></li>
                    <li><a href=""><i class="tw1"> </i> </a></li>
                    <li><a href=""><i class="google1"> </i> </a></li>
                    <li><a href=""><i class="flickr"> </i> </a></li>
                    <li><a href=""><i class="vemeo"> </i> </a></li>
                  </ul>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="clearfix"> </div>
          </div>
          <div class="span_4">
           <div class="col-md-6">
            <ul class="span_2">
                <li class="span_2-left"><img src="images/a3.jpg" class="img-responsive" alt=""/></li>
                <li class="span_2-right">
                  <h3>Gummies lollipop</h3>
                  <h4>Web Designer</h4>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                  <ul class="about_social">
                    <li><a href=""> <i class="fb1"> </i> </a></li>
                    <li><a href=""><i class="tw1"> </i> </a></li>
                    <li><a href=""><i class="google1"> </i> </a></li>
                    <li><a href=""><i class="flickr"> </i> </a></li>
                    <li><a href=""><i class="vemeo"> </i> </a></li>
                  </ul>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6">
            <ul class="span_2">
                <li class="span_2-left"><img src="images/a4.jpg" class="img-responsive" alt=""/></li>
                <li class="span_2-right">
                  <h3>Gummies lollipop</h3>
                  <h4>Web Designer</h4>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                  <ul class="about_social">
                    <li><a href=""> <i class="fb1"> </i> </a></li>
                    <li><a href=""><i class="tw1"> </i> </a></li>
                    <li><a href=""><i class="google1"> </i> </a></li>
                    <li><a href=""><i class="flickr"> </i> </a></li>
                    <li><a href=""><i class="vemeo"> </i> </a></li>
                  </ul>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
          </div>
       </div>
     </section>