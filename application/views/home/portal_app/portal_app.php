<div id="page-meta" class="container">

   <!-- SLOGAN -->

    <div class="slogan">

        <h2>Aplikasi Internal</h2><h3>Appliccation Collection Business</h3><br>

    </div>

            <!-- START EXTRA CONTENT -->

            <div class="extra-content group span12">

                <div class="section ch-grid">

                    

                    <div class="services-row row group">



    <?php

    $i=1;

foreach ($kat_portal->result() as $k) {

    echo '

    <div class="row"><hr>

    <h3 class="title">'.$k->deskripsi.'</h3>

    ';

    

    $param=array("id_kat_portal"=>$k->id_kat_portal);

    $portal_app=$this->model_portal_app->get_portal_app($param);



    foreach ($portal_app->result() as $r)

    {



    echo '



                        <div class="span2 service_first">

                        <div class="circle-services">

                        

                                <img class="ch-item no-empty" src="'.base_url()."assets/img/portal_app/".$r->icon.'">

                                <div class="ch-info">

                                    <a target="blank" href="http://'.$r->url.'">

                                        <img src="'.base_url('assets/home_template/celestino/images/project_empty.png').'" alt="" width="175" height="175" /></a>



                                    <p class="related_project">

                                        <a target="blank" href="http://'.$r->url.'">

                                            <img src="'.base_url('assets/home_template/celestino/images/icons/project.png').'" />

                                        </a>

                                    </p>



                                    <p>

                                        <a target="blank" href="http://'.$r->url.'">'.$r->judul.'</a>

                                    </p>



                                </div>

                                </img>

                        </div>

                        <h4>

                            <a target="blank" href="http://'.$r->url.'">'.$r->judul.'</a>

                        </h4>

                        <p style="text-align:center;">'.$r->portal_desc.'</p><br><br>

                    </div>





';

    }

    echo'</div>';

    }

    ?>

<!-- <iframe style="width:100%; height:1024px; border:0px;" src="<?php echo base_url();?>home/portal"></iframe> -->

<div class="clear"></div>

</div>



</div>

                </div>

                </div>

            </div>



