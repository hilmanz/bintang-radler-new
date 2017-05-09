<?php /* Smarty version 2.6.13, created on 2014-06-24 10:48:58
         compiled from application/web//apps/register-input.html */ ?>
    
<div id="body">
    <div id="page">
        <div id="thecontent">
        	<div class="page_section" id="getitPage">
                <div id="container">
                    <div class="center-title">
                        <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/title2.png" />
                        <h3>Can't wait to get a taste of the double refreshment? 
                        We'll make sure you'll be the first to get
                        the latest update about Bintang Radler! </h3>
						<h4>All you have to do is fill in the form below:</h4>
                    </div>
                    <div id="getit-form">
                    <form class="getitForm" method="post" action="" enctype="multipart/form-data">
                      
					   <input type="text" name="name" onBlur="if(this.value=='')this.value='NAME';" onFocus="if(this.value=='NAME')this.value='';" value="NAME" />
                         <input type="text" name="email" onBlur="if(this.value=='')this.value='Email Address';" onFocus="if(this.value=='Email Address')this.value='';"  value="Email Address" />
                        <input type="text" name="alamat" onBlur="if(this.value=='')this.value='City';" onFocus="if(this.value=='City')this.value='';" value="City"  />
                        <div class="row row-submit">
                        <span class="error"><?php echo $this->_tpl_vars['check_mail'];  echo $this->_tpl_vars['nama_ngga_valid'];  echo $this->_tpl_vars['email_ngga_valid']; ?>
</span>
                         <input type="submit" value="SUBMIT" name="submit" class="button" />
                         <input type="button"  onclick="location.href='<?php echo $this->_tpl_vars['basedomain']; ?>
';" value="CANCEL" class="button" />
                        </div>
                    </form>
                    </div><!-- end #getit-form -->
                    <div class="ice-container">
                        <div class="ice4">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/ice4.png" />
                        </div><!-- end .ice4 -->
                        <div class="ice3">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/ice3.png" />
                        </div><!-- end .ice4 -->
                        <div class="ice2">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/ice2.png" />
                        </div><!-- end .ice4 -->
                        <div class="ice1">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/ice1.png" />
                        </div><!-- end .ice4 -->
                        <div class="flare">
                            <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/comingsoon/lens_flare.png" />
                        </div><!-- end .flare -->
                    </div><!-- end .ice-container -->
                </div><!-- end #container -->
            </div><!-- end #getitPage -->
      </div>
    </div><!-- end #page -->
</div><!-- end #body -->	

