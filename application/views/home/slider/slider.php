<!-- END HEADER -->
<!-- BEGIN #slider -->
<div id="slider-elastic" class="slider slider-elastic elastic ei-slider" style="width: 100%; height: 400px;">
    <div class="ei-slider-loading">Loading</div>
    <ul class="ei-slider-large">
      <?php
      $i=1;
      $n=1;
      foreach ($slider->result_array() as $d)
      {
        $src_img=base_url('assets/img/slider/'.$d['foto']);
        echo '
        <li class="first slide-'.$i.' slide align-">
            <img width="1920" height="400" src="'.$src_img.'" class="attachment-full" alt="001" />
            <div class="ei-title">
                <a href="http://'.$d->link.'"><h2>'.$d['judul'].'</h2></a>
                <h3>'.$d['slider_desc'].'</h3>
            </div>
        </li>';
      }
      ?>
    </ul>
    <!-- ei-slider-large -->

    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">
            Current
        </li>
        <?php
        foreach ($slider->result_array() as $d)
        {
          $src_img=base_url('assets/img/slider/'.$d['foto']);
          echo '
          <li>
            <a href="'.$d['link'].'"></a>
            <img src="'.$src_img.'" alt=" - " />
          </li>';
        }
        ?>
    </ul>
    <!-- ei-slider-thumbs -->

    <div class="shadow"></div>
</div>
<!-- ei-slider -->

<!-- END #slider -->


<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#slider-elastic.elastic').eislideshow({
            easing      : 'easeOutExpo',
            titleeasing : 'easeOutExpo',
            titlespeed  : 1200,
            autoplay    : true,
            slideshow_interval : 3000,
            speed       : 800,
            animation   : 'sides'
        });
    });
</script>
