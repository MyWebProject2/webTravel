<div id="header">                                                                                                                                                                                                                                           <div class="inner_copy"><a href="http://www.bestfreetemplates.info/webtemplates/freewebtemplates-10.html">ecommerce website builder reviews</a></div>
    <div id="meta">
      <?php if($this->session->userdata('login') == NULL):?>
      <a href="<?php echo base_url('site/login/index');?>" class="marr">Sign in</a> | <a href="<?php echo base_url('site/signup/index');?>" class="marl marr">Sign up</a> 
      <?php else:?>
        <a href="" class="marr">Hi, <?php echo $this->session->userdata('login');?></a> | <a href="<?php echo base_url('site/logout/index');?>" class="marl marr">Đăng xuất</a> 
      <?php endif;?>                                                                                            
    </div>
    <ul id="menu">
      <li><a href="<?php echo base_url();?>">Home Page</a></li>
      <li><a href="index2.html">Hot Tours</a></li>
      <li><a href="index2.html">Services</a></li>
      <li><a href="index2.html">News</a></li>
      <li><a href="index2.html">Contacts</a></li>
    </ul>
    <ul id="forum">
      <li><a href="index.html">Forum</a></li>
    </ul>
  </div>