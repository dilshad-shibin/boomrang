<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>BOOMRANG </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="images/fav.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/panelmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">

</head>

<body>

<div class="body_wraper inner_header">
 
  <?php include 'header.php'; ?>    


<section>
<div class="inr_commen_bnrouter">
<div class="inr_combnr">
<div class="container">
<h3 class="wow fadeInUp">Partners</h3>
<ul class="pagelinks">
<li><a href="index.php">Home</a> </li>    
<li>Partners</li>     
</ul>
</div>
</div>
</div>    
</section>
    
<section>
<div class="partners_page">
<div class="container">
<div class="row">

<div class="col-lg-3 col-sm-6 display_flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
<a class="partlogobox" href="https://skiloratech.com/" target="_blank">
<div class="partlogobox_in">
<div class="palogoimg"><img src="images/case-study/partners/skilora.png"> </div>  
<div class="palogotitle"><h4>Skilora</h4></div>  
</div>
</a>
</div>

<div class="col-lg-3 col-sm-6 display_flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
<a class="partlogobox" href="https://www.sesametechnologies.net/" target="_blank">
<div class="partlogobox_in">
<div class="palogoimg"><img src="images/case-study/partners/se-same.png"> </div>  
<div class="palogotitle"><h4>Sesame</h4></div>  
</div>
</a>
</div>

<div class="col-lg-3 col-sm-6 display_flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
<a class="partlogobox" href="https://primalcodes.com/" target="_blank">
<div class="partlogobox_in">
<div class="palogoimg"><img src="images/case-study//partners/primal-codes.png"> </div>  
<div class="palogotitle"><h4>Primalcodes</h4></div>  
</div>
</a>
</div>

<div class="col-lg-3 col-sm-6 display_flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
<a class="partlogobox" href="https://www.seamedia.in/" target="_blank">
<div class="partlogobox_in">
<div class="palogoimg palogoimg-bg"><img src="images/case-study/partners/sea-media.png"> </div>  
<div class="palogotitle"><h4>Seamedia</h4></div>  
</div>
</a>
</div>

<div class="col-lg-3 col-sm-6 display_flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
<a class="partlogobox " href="https://aiderpro.com/" target="_blank">
<div class="partlogobox_in">
<div class="palogoimg"><img src="images/case-study/partners/aider-pro.png"> </div>  
<div class="palogotitle"><h4>Aiderpro</h4></div>  
</div>
</a>
</div>    
</div>
</div>
</div>
</section> 


<!-- want to partner -->
 <section>
    <div class="partner-bg">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-6">
                    <div class="partner-img">
                        <img src="images/case-study/partners/partner-left.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="want-to-partner">
                        <h3>want to <br> partner with us</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur doloribus assumenda obcaecati cumque explicabo soluta sit. Laboriosam deleniti voluptas ad quod dolor aut ut eaque.</p>
                        <a href="contact.php" class="theme_btn btn_grad mr-2">Contact</a>
                        <a href="#" data-toggle="modal" data-target="#pop_enquiryform" class="theme_btn btn_grad">Enquire Now</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
 </section>



     <?php include 'footer.php'; ?>  

</div> <!-- bodywrapper-->
    
 <div class="modal fade popsec onload_pop" id="pop_enquiryform" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"
        data-backdrop="" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><i class="ti-close" aria-hidden="true"></i></button>
                        <div class="onload_left ">
                        
                        </div>
                        <div class="onload_right">
                            <form name="form3" method="post">
                            <div class="pop_title"><h3> Enquire Now</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>    
                            </div>
                                 <div class="input_load">
                                    <input placeholder="Name" name="" type="" required>
                                </div>
                                
                                 <div class="input_load">
                                    <input placeholder="Email" name="" type="" required>
                                </div>
                                
                                 <div class="input_load">
                                    <input placeholder="Phone" name="phone3" type="number" required>
                                </div>
                                
                                
                                <div class="input_load">
                                    <input value="Submit" class="btn_grad" type="submit" name="checknow">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

   <script src="js/jquery-1.12.4.min.js"></script>
   <script src="js/bootstrap.js"></script>
 <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $("#myModal22").modal('show');
                }, 0);
            });
        </script>
   <script src="js/panelmenu.js"></script>
   <script src="js/panel-custom.js"></script>
   <script src="js/stickynew.js"></script>
   <script src="js/totop.js"></script>
   <script src="js/slick.min.js"></script>	
   <script  src="js/wow.min.js"></script>   
   <script src="js/custom.js"></script>

 <script>
        $('a.mm-original-link').click( function(e) {e.preventDefault(); return false; } );
</script>
   
    

</body>

</html>