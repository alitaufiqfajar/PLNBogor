<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-blog" class="span9 content group">
<div class="widget-first widget widget_search">
                        <form role="search" action="<?php echo site_url('home/pencarian');?>" method="post" id="searchform">
                            <div>
                                <input type="text" name="cari" id="s" />
                                <input type="submit" id="searchsubmit" value="Search" />
                                <input type="hidden" name="post_type" value="submit" />
                            </div>
                        </form>
                    </div>
            <?php
            $i=1;
            foreach ($cari as $r) {

            echo '
                <div class="post type-post status-publish format-standard hentry category-elegant-vintage hentry-post group blog-small">
                    <!-- post featured & title -->

                    <div class="thumbnail">
                        <div class="row">

                            <!-- post featured -->
                            <div class="image-wrap span4">
                                <img width="365" height="340" src="'.base_url('assets/img/konten/'.$r->foto).'" class="attachment-blog_small wp-post-image" alt="imgbloh" />
                            </div>

                            <!-- post title -->
                            <div class="span5">
                                <h2 class="post-title">
                                    '.anchor('home/detail_konten/'.$r->id_konten.$r->judul,$r->judul).'
                                </h2>
                                <div class="the-content">
                                    <p>'.strip_tags(substr($r->isi, 0,250)).'</p>
                                    <p>'.anchor('home/detail_konten/'.$r->id_konten.'/'.$r->judul,'[Read More]').'</p>
                                </div>
                            </div>

                            <div class="clear"></div>

                            <!-- post meta -->
                            <div class="meta group span3">
                                <div>
                                    <p class="author">
                                        <img src="'.base_url("assets/home_template/celestino/images/icons/author.png").'" alt="icon-user" />
                                        <span>Author:</span>
                                        <a href="#" title="Admin Web PLN" rel="author">Admin Web PLN</a>
                                    </p>
                                    <p class="date">
                                        <img src="'.base_url("assets/home_template/celestino/images/icons/date.png").'" alt="icon-calendar" />
                                        <span>Date:</span> '.$r->tgl_dibuat.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
                }
                ?>


                <?php  foreach ($cari as $r) {
                }echo "
                <div class='content'>
                <div id='pagination' class='general-pagination group'>
                ".$this->pagination->create_links()."   
                </div>
            </div>";
                ?>
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-blog-sidebar" class="span3 sidebar group">
                <div id="text-9" class="widget-first widget widget_text">
                    <h3>I&#8217;m social</h3>
                    <div class="textwidget">Praesent ultricies iaculis erat iaculis feugiat. Sed suscipit tempor felis, sit amet aliquam nunc sollicitudin sed.
                    <br /><br />

                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                    <a href="#" class="socials-small google-small" title="Google"  >google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a>

                    </div>
                </div>

                <div id="last-tweets-4" class="widget-2 widget-last widget last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-4"></div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-4 .list-tweets-4').tweetable({
                                listClass: 'tweets-widget-4',
                                username: 'YIW',
                                time: true,
                                limit: 3,
                                replies: true
                            });
                        });
                    </script>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
    </div>
</div>
<!-- END PRIMARY -->
