<div id="central">                                                                                                                                   
            <div class="welcome">
                <p>WELCOME to 
                    <br>
                    <span style="margin-left: 50px;">Our Company</span></p>                                         
            </div>
            <div class="search">
                <form action="#">
                    <span>Search</span> <input type="text"> <a href="#" id="ok"><img src="<?php echo public_url('site/template');?>/images/button.jpg" alt="" width="45" height="24"></a>
                </form>
            </div>
            <?php foreach($list as $row):?>
            <div class="block">
                <div class="block-img">
                    <a href="<?php echo base_url('site/Event?id='.$row->id);?>"><img src="<?php echo public_url('site/template/img-event/'.$row->link_img);?>" alt="" width="180" height="150"></a>
                </div>
                <div class="block-content">
                    <div class="block-content-title">
                        <h4><?php echo $row->ten;?></h4>
                    </div>
                    <div class="block-content-address">
                        <p><?php echo $row->dia_chi;?></p>
                    </div>
                    <div class="block-content-place">
                        <span class="price"><?php echo $row->dia_diem;?></span>
                    <a href="<?php echo base_url('site/event/index?id='.$row->id);?>" class="more">xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
            
            <div class='pagination'>
                 <?php echo $this->pagination->create_links();?>
            </div>
 </div>
 <?php $this->load->view('site/right.php');?>
