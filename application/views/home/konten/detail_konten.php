<!-- START PRIMARY -->

<div id="primary" class="sidebar-right">

    <div class="container group">

        <div class="row">

            <!-- START CONTENT -->

            <div id="content-single" class="span9 content group">

                <div class="post type-post status-publish format-video hentry category-web-design hentry-post group blog-elegant">

                    <!-- post featured & title -->

                    <div class="thumbnail">

                        <div class="row">

                            <!-- post meta -->

                            <div class="meta group span3">

                                <div>

                                    <h1 class="post-title">

                                        <?php echo $konten['judul']; ?>

                                    </h1>

                                    <p class="author">

                                        <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/author.png" alt="icon-user" />

                                        <span>Author:</span>

                                        <a href="#" title="Admin Web PLN" rel="author">Admin Web PLN</a>

                                    </p>

                                    <p class="date">

                                        <img src="http://localhost/PLNBogor/assets/home_template/celestino/images/icons/date.png" alt="icon-calendar" />

                                        <span>Date:</span><?php echo $konten['tgl_dibuat'];?>

                                    </p>

                                </div>



                                

                                <div>

                                    <div class="socials"><h2>Share on</h2>

                                        <a href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo base_url().$_SERVER['REQUEST_URI']?>&amp;p[title]=<?PHP echo urlencode($konten['judul']);?>&amp;p[summary]=your-content-here&amp;p[images[0]=<?PHP echo base_url().'assets/img/konten/'.$konten['foto'];?>" class="socials-small facebook-small" title="Facebook" target="_blank" >facebook</a>

                                    </div>

                                </div>

                            </div>

                            <!-- post title -->

                            <div class="the-content span6">

                                <div>

                                    <img src="<?PHP echo base_url().'assets/img/konten/'.$konten['foto'];?>" alt="icon-comment" />

                                </div>

                            </div>

                            <!-- post content -->

                            <div class="the-content single group span9">

                                <p><?php echo $konten['isi'];?></p>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

            <!-- END CONTENT -->



            <!-- START SIDEBAR -->

            <div id="sidebar-blog-sidebar" class="span3 sidebar group">

                <div id="last-tweets-4" class="widget-2 widget-last widget last-tweets">

                <div id="text-9" class="widget-first widget widget_text">

                    <h3>Moto</h3>

                    <div class="textwidget">
                    <blockquote> Listrik untuk Kehidupan yang Lebih Baik (Electricity for a Better Life)</blockquote>

                    </div>

                </div>

                    <h3>Visi</h3>
                    <blockquote>
                    Diakui sebagai Perusahaan Kelas Dunia yang Bertumbuh-kembang, Unggul dan Terpercaya dengan bertumpu pada Potensi insani</blockquote>
                </div>

                <div id="last-tweets-4" class="widget-2 widget-last widget last-tweets">

                    <h3>Misi</h3>
                    <blockquote>
                    1.  Menjalankan bisnis kelistrikan dan bidang lain yang terkait, berorientasi pada kepuasan pelanggan, anggota perusahaan dan pemegangsaham.</blockquote>
                </div>

                </div>

                </div>

            </div>

            <!-- END SIDEBAR -->

        </div>

    </div>

</div>

<!-- END PRIMARY -->

