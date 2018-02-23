<script type='text/javascript' src='<?php echo base_url();?>assets/home_template/celestino/js/jquery.custom.js'></script> 

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
<div class="container group">
<div class="row">
<!-- START CONTENT -->
<div id="content-page" class="span12 content group">

<div class="clear"></div>
<div class="posts">

<div class="hentry-post group portfolio-post internal-post">

<div id="portfolio" class="portfolio-full-description">

<div class="clear"></div>


<h3>Galery</h3>
<div class="portfolio-full-description-related-projects row">
    
    <?php
    foreach ($galery->result() as $r) {
       echo '
           <div class="related_project span3">
        <div class="related_img">
            <div class="picture_overlay">
                <img width="258" height="170" src="'.base_url('assets/img/galery/'.$r->foto).'" class="attachment-thumb_portfolio_fulldesc_related" alt="001" />

                <div class="overlay">
                    <div>
                        <p>
                            <a href="'.base_url('assets/img/galery/'.$r->foto).'" rel="lightbox" class="ch-info-lightbox">
                                <img src="'.base_url('assets/home_template/celestino/images/icons/zoom.png').'" alt="Open Lightbox" />
                            </a>
                        </p>
                        <p class="title">'.$r->judul.'</p>
                        <p class="subtitle">Galery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
       ';
    }
        ?>





</div>
</div>
<div class="clear"></div>
</div>

</div>
</div>
<!-- END CONTENT -->

</div>
</div>
</div>
<!-- END PRIMARY -->
