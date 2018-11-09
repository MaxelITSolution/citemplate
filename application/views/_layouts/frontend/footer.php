   <div class="clear" style="height:50px;">&nbsp;</div>

     <!-- bagian panah up -->
    <div class="container_12">
        <div class="grid_12">
           <img id="atas_btn" src="<?php echo base_url("public/img/SVG_panahAtas.svg"); ?>" style="cursor:pointer;margin-left:auto;margin-right:auto;width:100%;max-width:100px;display:block;position:relative;" alt="Top" />
        </div>
    </div>
    <!-- end of bagian panah up -->
    
    <div class="clear" style="height:50px;">&nbsp;</div>

    <!-- contact dan footer -->
    <?php if (isset($page) && $page != "contact") { ?>
    <div id="contact" style="width:100%;background-color:#113564;bottom:0;position:relative;" >
        <div class="container_12" >
        
          <div class="grid_3 alpha">
                 <h2 class="headline" style="color:#FFF;letter-spacing:5pt;margin-left:10px;">CONTACT<br>US</h2>
          </div>
          
          <div class="grid_9 omega" id="grid_address">
            <div class="address" >
                  <h4 class="font_Esphimere" style="color:#FFF;">OUR ADDRESS</h4>
                  <br>
                  <h5 class="font_Esphimere" style="margin:0;padding:0; color:#FFF;margin-bottom:10px"><?php echo $cms["contact-address1"]; ?></h5>
                  <h5 class="font_Esphimere" style="margin:0;padding:0;color:#FFF;margin-bottom:10px"><?php echo $cms["contact-address2"]; ?></h5>
                  <h5 class="font_Esphimere" style="margin:0;padding:0;color:#FFF;margin-bottom:10px"><?php echo $cms["contact-phone"]; ?></h5>
                  <h5 class="font_Esphimere" style="margin:0;padding:0;color:#FFF;"><?php echo $cms["contact-email"]; ?></h5>
              </div> 
              
              <div class="message" style="float:right;">
                  <h5 class="font_Esphimere" style="color:#FFF;">for any general inquiries, pelase fill in the folowing contact from:</h5>
                  <div class="form">
                    <form id="form_contactus" action="<?php echo site_url('sendemail'); ?>" method="post" onsubmit="event.preventDefault(); contact_submit();">
                      <div style="float:left;position:relative;">
                      <input type="text" id="name_txt" name="name_txt" class="form_input" style="margin-bottom:30px;" placeholder="Name" required /><br>
                      <input type="email" id="email_txt" name="email_txt" class="form_input" style="margin-bottom:30px;" placeholder="Email" required /><br>
                      <input type="text" id="subject_txt" name="subject_txt" class="form_input" placeholder="Subject" required />
                      </div>
                      
                      <div id="div_textarea" >
                      <textarea id="message_txt" name="message_txt" class="form_textarea" style="height:120px;resize:none;font-family: inherit;" placeholder="Message" required ></textarea>
                      <div class="clear">&nbsp;</div>
                      
                      <button id="submit_contactus" type="submit" style="margin-top:20px;margin-bottom:20px;float:right;width:80px;color:#FFF;background-color:#2BA8E0;position:relative;padding-bottom:3px;padding-top:3px;text-align:center;font-family: 'News Cycle', sans-serif;font-size:8pt;font-style:italic; border: none; cursor: pointer;">
                        SEND
                      </button>
                      <!-- <div id="form_btnsend" style="margin-top:20px;margin-bottom:20px;float:right;width:80px;color:#FFF;background-color:#2BA8E0;position:relative;padding-bottom:3px;padding-top:3px;display:block;text-align:center;font-family: 'News Cycle', sans-serif;font-size:8pt;font-style:italic;">SEND</div> -->
                      </div>
                    </form>

                  </div>
                  </div>
          </div>
        
        </div>
    </div>
    <?php } ?>
    <script>
      function contact_submit() {
        $.ajax({
          type: "POST",
          url: "sendemail",
          async: false,
          data: $("#form_contactus").serialize(),
          success: function(data) {
            if (data.status) {
              alert("Thanks you, Your message has been sent!");
              // $("#form_contactus")[0].reset();
              $("#submit_contactus").prop("disabled","disabled");
              $("#submit_contactus").css("backgroundColor","gray");
            } else {
              alert("Sorry, Your message cannot be sent right now. Please contact us with the info on page 'Contact'.");
            }
          },
          error: function (xhr,status,error) {
            alert(error);
          }
        });
      }
    </script>
     <!-- end of contact -->

     <div class="clear">&nbsp;</div>
    <!-- footer -->
    <div id="footer" style="width:100%;background-color:#2BA8E0;bottom:0;position:relative;" >
       <div class="container_12" >
          <div class="grid_12">
          <div id="label_footer" style="float:right;text-align:right;color:#FFF;padding-top:10px;padding-bottom:10px;">
          <span class="font_NunitoSans">&copy; 2017 Waringin Warehouse. All rights reserved. Terms and Conditions Apply</span>
          </div>
          </div>
       </div>
    </div>
     <!-- end of footer -->
