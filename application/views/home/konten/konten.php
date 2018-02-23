<!-- START PRIMARY -->

<div id="primary" class="sidebar-right">

    <div class="container group">

        <div class="row">

            <!-- START CONTENT -->

            <div id="content-blog" class="span9 content group">





            <?php

            $i=1;

            foreach ($page->result() as $r) {



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

                                    <p>'.strip_tags(substr($r->isi, 0,250)).'...'.anchor('home/detail_konten/'.$r->id_konten.'/'.$r->judul,'[Read More]').'</p>

                                    

                                </div>

                            </div>



                            <div class="clear"></div>



                            <!-- post meta -->

                            <div class="meta group span3">

                                <div>

                                    <p class="author">

                                        <img src="'.base_url("assets/home_template/celestino/images/icons/author.png").'" alt="icon-user" />

                                        <span>Author:</span>

                                        <a href="author-nicola.html" title="Posts by Nicola Mustone" rel="author">Admin Web PLN</a>

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





                <?php  foreach ($page->result() as $r) {

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

                    <h3>Moto</h3>

                    <div class="textwidget">
                    <blockquote> Listrik untuk Kehidupan yang Lebih Baik (Electricity for a Better Life)</blockquote>

                    </div>

                </div>



                <div id="last-tweets-4" class="widget-2 widget-last widget last-tweets">

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

            <!-- END SIDEBAR -->

        </div>

    </div>

</div>

<!-- END PRIMARY -->

