<script type='text/javascript' src='<?php echo base_url();?>assets/home_template/celestino/js/jquery.custom.js'></script> 
<?php
$this->load->view("home/slider/slider");
?>
<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            
            <!-- START CONTENT -->
            <div id="content-home" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="section portfolio">
                        <!-- section blog wrapper -->
                        
                        <!-- sticky portfolio -->
                        <?php
                        $i=1;
                        foreach($artikel->result_array() as $d)
                        {
                            if ($i==1) {
                                echo '
                        <div class="row">
                            <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">
                                <div class="work-thumbnail span4">
                                    <div class="thumb-wrapper">
                                        <div class="related_img">
                                            <div class="picture_overlay"><img width="385" height="192" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-section_portfolio_sidebar" alt="004" />
                                                <div class="overlay">
                                                    <div>
                                                        <p>
                                                            <a href="'.base_url('assets/img/konten/'.$d['foto']).'" rel="lightbox" class="ch-info-lightbox">
                                                                <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/zoom.png" alt="Open Lightbox" />
                                                            </a>

                                                            <a href="'.base_url('assets/img/konten/'.$d['foto']).' 
                                                            </a>
                                                        </p>
                                                        <p class="title">'.$d['judul'].'</p>
                                                        <p class="subtitle">logo design</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="span5">
                                    <div class="work-description">
                                        <h2>
                                            '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                                        </h2>
                                        <span>'.$d['tgl_dibuat'].'</span>
                                        <p>
                                        '.strip_tags(substr($d['isi'], 0,250)).'...
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>';
                            }
                            
                            if ($i==2) {
                                echo '<div class="portfolio-projects row">'; // batas 2-4
                                echo '
                        <div class="work_first work span3">
                                <div class="related_img">
                                    <div class="picture_overlay">
                                        <img width="258" height="170" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-thumb_portfolio_fulldesc_related" alt="001" />
                                        <div class="overlay">
                                            <div>
                                                <p>
                                                    <a href="'.base_url('assets/img/konten/'.$d['foto']).'" rel="lightbox" class="ch-info-lightbox">
                                                        <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/zoom.png" alt="Open Lightbox" />
                                                    </a>
                                                </p>
                                                <p class="title">'.$d['judul'].'</p>
                                                <p class="subtitle">photoshop</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h4>
                                        '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                                    </h4>
                                    <span>'.$d['tgl_dibuat'].'</span>
                                    <p>'.strip_tags(substr($d['isi'], 0,250)).'...</p>
                                </div>
                            </div>';
                            }
                            if ($i==3) {
                                echo '
                        <div class="work span3">
                                <div class="related_img">
                                    <div class="picture_overlay">
                                        <img width="258" height="170" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-thumb_portfolio_fulldesc_related" alt="002" />
                                        <div class="overlay">
                                            <div>
                                                <p>
                                                    <a href="'.base_url('assets/img/konten/'.$d['foto']).'" rel="lightbox" class="ch-info-lightbox">
                                                        <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/zoom.png" alt="Open Lightbox" />
                                                    </a>
                                                </p>
                                                <p class="title">'.$d['judul'].'</p>
                                                <p class="subtitle">logo design</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h4>
                                        '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                                    </h4>
                                        <span>'.$d['tgl_dibuat'].'</span>
                                    <p>'.strip_tags(substr($d['isi'], 0,250)).'...</p>
                                </div>
                            </div>';
                            }
                            if ($i==4) {
                                echo '
                        <div class="work span3">
                                <div class="related_img">
                                    <div class="picture_overlay">
                                        <img width="258" height="170" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-thumb_portfolio_fulldesc_related" alt="003" />

                                        <div class="overlay">
                                            <div>
                                                <p>
                                                    <a href="'.base_url('assets/img/konten/'.$d['foto']).'" rel="lightbox" class="ch-info-lightbox">
                                                        <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/zoom.png" alt="Open Lightbox" />
                                                    </a>
                                                    
                                                </p>
                                                <p class="title">'.$d['judul'].'</p>
                                                <p class="subtitle">indesign</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h4>
                                        '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                                    </h4>
                                        <span>'.$d['tgl_dibuat'].'</span>                                    
                                    <p>'.strip_tags(substr($d['isi'], 0,250)).'...</p>
                                </div>
                            </div>';
                                echo '</div>'; // end batas 2-4
                            }
                            $i++;
                            
                        }
                        ?>
                    </div>


                        <center><a href="<?php base_url();?>/home/konten"><h3 class="title">
                        Selengkapnya</h3><strong></strong>
                        </a></center>

                    <!-- end section blog wrapper -->
                    <div class="clear"></div>
                </div>
                <!-- START COMMENTS -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-home-3" class="span3 sidebar group">
                <div id="testimonial-widget-2" class="widget-first widget testimonial-widget">
                    
                    <div class="widget-first widget widget_search">
                        <form role="search" action="<?php echo site_url('home/pencarian');?>" method="post" id="searchform">
                            <div>
                                <label class="screen-reader-text" for="s">Search for:</label>
                                <input type="text" name="cari" id="s" />
                                <input type="submit" id="searchsubmit" value="Search" />
                                <input type="hidden" name="post_type" value="submit" />
                            </div>
                        </form>
                    </div>
                </div>

            <div class="widget-2 widget recent-posts">
            <h3>Recent Post</h3>
                <div class="recent-post group">
                    <?php
                        $i=1;
                        foreach($artikel->result_array() as $d)
                        {
                            if ($i==5)
                            {
                                echo '                    
                                <div class="hentry-post group">
                        <div class="thumb-img">
                            <img width="55" height="55" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-blog_thumb wp-post-image" alt="23" /></div>
                        <div class="text">
                            '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                            <p>'.strip_tags(substr($d['isi'], 0,70)).'[...]</p>
                        </div>
                    </div>';
                            }if ($i==6)
                            {
                                echo '                    
                                <div class="hentry-post group">
                        <div class="thumb-img">
                            <img width="55" height="55" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-blog_thumb wp-post-image" alt="23" /></div>
                        <div class="text">
                            '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                            <p>'.strip_tags(substr($d['isi'], 0,70)).'[...]</p>
                        </div>
                    </div>';
                            }if ($i==7)
                            {
                                echo '                    
                                <div class="hentry-post group">
                        <div class="thumb-img">
                            <img width="55" height="55" src="'.base_url('assets/img/konten/'.$d['foto']).'" class="attachment-blog_thumb wp-post-image" alt="23" /></div>
                        <div class="text">
                            '.anchor('home/detail_konten/'.$d['id_konten'].$d['judul'],$d['judul']).'
                            <p>'.strip_tags(substr($d['isi'], 0,70)).'[...]</p>
                        </div>
                    </div>';
                            }
                                $i++;
                                }
                                ?>



                </div>
            </div>

                <div class="widget-2 widget-last widget featured-projects">
                    <h3>Gallery</h3>
                    <div class="featured-projects-widget flexslider">
                        <ul class="slides">

                        <?php 
                        foreach ($galery->result() as $r) {
                            echo '                            
                            <li>
                                <div class="thumb-project">
                                    <a href="home/galery">
                                        <img width="320" height="154" src="'.base_url('assets/img/galery/'.$r->foto).'" class="attachment-featured_project_thumb" alt="005_mini" />
                                    </a>
                                </div>
                                <a href="home/galery"><h4>'.$r->judul.'</h4></a>
                            </li>';
                        }
                        ?>



                        </ul>
                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            var animation = $.browser.msie || $.browser.opera ? 'fade' : 'slide';
                            $('.featured-projects-widget').flexslider({
                                animation: animation,
                                slideshowSpeed: 8000,
                                animationSpeed: 300,
                                selectors: 'ul > li',
                                directionNav: true,
                                slideshow: true,

                                pauseOnAction: false,
                                controlNav: false,
                                touch: true
                            });
                        });
                    </script>
                </div>


            <!-- END SIDEBAR -->
        </div>

    </div>
</div>
<!-- END PRIMARY -->
