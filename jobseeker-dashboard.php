<?php
      require_once('include/functions/main.php');
      $title = "Dashboard";
      require('include/layout/profile-header.php');


 ?>

<!-- container-fluid -->
<div class="container-fluid">

    <!-- dashboard-lower-row -->
     <div id="dashboard-lower-row" style="margin-right:0px;margin-left:0px;" class="row">
         <div class="col-xs-12 col-sm-9">
              <div class="col-md-12 dashboard-main-content">
                  <h4 class="content-title text-center">RECENT JOB LISTINGS</h4>
              </div>
              <div id="jobs-table" class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>S/no</th>
                          <th>Company Name</th>
                          <th>Job Title</th>
                          <th>Date posted</th>
                          <th>Application Deadline</th>
                          <th>Qualification</th>
                          <th>Gender</th>
                          <th>Status</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>



                </tbody>
                </table>
            </div>
      </div>

       <div class="col-xs-12 col-sm-3">
            <form id="search-jobs-form" class="form-group searchform" action="include/action/searchjobs.php" method="post">
                <div class="input-group dashboard-input-group">
                    <input class="form-control" type="search" name="search" value="" id="search-jobs" placeholder="Use keywords. E.g: Accountant,  Human Resource"><span class="input-group-addon"><a href=""><i class="glyphicon glyphicon-search"></i></a></span>
                </div>
            </form>

           <div id="my-application" class="panel panel-default">
               <div id="my-application-heading" class="panel-heading">
                 <h3  id="my-application-inner" class="panel-title">My Application</h3>
               </div>
               <div class="panel-body">


               </div>
           </div>

           <div class="panel-group" id="accordion">

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#first" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Accounting / Audit / Tax</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="first">
                       <div class="panel-body">

                       </div>
                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#second" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Banking / Finance / Insurance</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="second">
                     <div class="panel-body">

                     </div>
                   </div>
               </div>

             <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#third" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Engineering</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="third">
                       <div class="panel-body">

                       </div>
                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#fourth" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Information Technology</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="fourth">
                     <div class="panel-body">

                     </div>
                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#fifth" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Marketing / Advertising / Communications</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="fifth">
                       <div class="panel-body">

                       </div>
                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#sixth" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Oil &amp; Gas</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="sixth">
                       <div class="panel-body">

                       </div>
                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading panel-clr">
                     <div class="panel-title">
                         <a href="#seven" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-plus"></i>Real Estate / Property</a>
                     </div>
                   </div>
                   <div class="panel-collapse collapse" id="seven">
                       <div class="panel-body">

                       </div>
                   </div>
               </div>

           </div>

         </div>

     </div>
 </div>
<!-- container-fluid ends-->

<!-- bold extra-space starts -->
<section class="bold extra-space">
       <div class="container">
        <div class="row-content extra-bottom">
          <div class="col-sm-12">
            <h2 class="advert-q text-center">WHY WE ARE YOUR BEST OPTION</h2>
          </div>
        </div>


           <div class="row">

              <div class="col-md-12 bold-content">

                  <div id="features-storage" class="col-sm-4 col-md-4">
                    <img class="img img-responsive center-block" src="img/Tech1.png">
                    <h4 class="tag text-center">Keep you informed</h4>
                  </div>

                  <div id="features-storage" class="col-sm-4 col-md-4">
                    <img class="img img-responsive center-block" src="img/chart.png">
                    <h4 style="margin-top:20px;"class="tag text-center">95% success rate</h4>
                  </div>

                  <div id="features-storage" class="col-sm-4 col-md-4">
                    <img class="img img-responsive center-block" src="img/map.png">
                    <h4 class="tag text-center">Keep you connected</h4>
                  </div>


              </div>

           </div>

           <div class="row">

              <div class="col-md-12 bold-content">

                <div id="features-storage" class="col-sm-4 col-md-4">
                  <img class="img img-responsive center-block" src="img/Hand.png">
                  <h4 class="tag text-center">Keep you connected</h4>
                </div>

                <div id="features-storage" class="col-sm-4 col-md-4">
                  <img class="img img-responsive center-block" src="img/earth.png">
                  <h4 class="tag text-center">Keep you connected</h4>
                </div>

                <div id="features-storage" class="col-sm-4 col-md-4">
                  <img class="img img-responsive center-block" src="img/ammo.png">
                  <h4 class="tag text-center">Keep you connected</h4>
                </div>
              </div>

           </div>

        </div>
    </div>
</section>
<!-- bold extra-ends -->

<!-- Carreer tips starts -->
<section class="career-tips text-center">
        <div style="margin-right:0px;margin-left:0px;" class="row">
            <h2>GET CAREER TIPS FROM EXPERTS</h2>

            <hr>

              <div class="col-sm-3 first-tip">
                    <h4 class="career-title">How to be the best employee</h4>
                        <img class="blog-img img-responsive img-thumbnail center-block" src="img/smile.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><a class="" href="#"><br>read more</a>
                        </p>

              </div>

              <div class="col-sm-3 second-tip">
                  <h4 class="career-title">Best way to build your career</h4>
                      <img class="blog-img img-responsive img-thumbnail center-block" src="img/keyboard.jpg" alt="" />
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><a class="" href="#"><br>read more</a>
                      </p>

              </div>



              <!-- <hr> -->

              <div class="col-sm-3 third-tip">
                        <h4 class="career-title">Become effectively productive</h4>
                        <img class="blog-img img-responsive img-thumbnail center-block" src="img/man.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><a class="" href="#"><br>read more</a>
                        </p>

              </div>


              <div class="col-sm-3 third-tip">
                    <h4 class="career-title">Knowing the right job</h4>
                        <img class="blog-img img-responsive img-thumbnail center-block" src="img/jobs.jpg" alt="" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><a class="" href="#"><br>read more</a>
                </p>

              </div>


        </div>
</section>
<!-- Carreer tips ends -->

<!-- Top jobs starts -->
<section class="top-jobs">

    <div class="container">
        <h2 class="text-center">TOP JOBS</h2>
        <div class="row">

          <!-- The blueimp Gallery setup -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>

            <div id="links">
                <div class="row">
                    <a href="img/gtb.jpg" title="Job Title: " class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block" src="img/gtb.jpg" alt="" />
                    </a>
                    <a href="img/chevron.jpg" title="Bank Manager" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/chevron.jpg" alt="" />
                    </a>
                    <a href="img/coke.jpg" title="Job Title: Sales Representative" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/coke.jpg" alt="" />
                    </a>
                    <a href="img/microsoft.jpg" title="job title" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/microsoft.jpg" alt="" />
                    </a>
                </div>
                <div class="row">
                    <a href="img/first.png" title="job title" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block" src="img/first.png" alt="" />
                    </a>
                    <a href="img/uber.png" title="Job Title: Chief Operation Officer" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/uber.png" alt="" />
                    </a>
                    <a href="img/samsung.jpg" title="Banana" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/samsung.jpg" alt="" />
                    </a>
                    <a href="img/toyota.jpg" title="Banana" class="jobs-logo col-md-3">
                        <img class="img-logo img-responsive center-block"src="img/toyota.jpg" alt="" />
                    </a>
                </div>
            </div>
            <!-- The blueimp Gallery setup ends-->
        </div>
    </div>

</section>
<!-- Top jobs ends -->

<!-- testimonal starts -->
<section class="testimonal">
  <div class="inner">
    <h2 class="text-center">TESTIMONIAL</h2>

    <div class="row">
      <div class="col-md-4 testimonal-col">
        <blockquote>
          <p>"I never taught i could get a job so easily without moving a leg. I was shocked to have received a job interview invitation few weeks after my application"</p>
          <cite>
            <a href="https://twitter.com/tim_kos">Blessing Ataima Edem </a> - Uyo, Nigeria. <br>
            <img src="img/test1.jpg" class="img-responsive img-thumbnail testimonal-img pull-right">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4 testimonal-col">
        <blockquote>
          <p>"It's a huge privilege to have found this website. I recently got a job applying via jobhunt express . I am grateful for the good efforts."</p>
          <cite>
            <a href="https://twitter.com/tim_kos">Iheanachor Franklyn Fabian </a> - Lagos, Nigeria. <br>
            <img src="img/test2.jpg" class="img-responsive img-thumbnail testimonal-img pull-right">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4 testimonal-col">
        <blockquote>
          <p>"I never taught i could get a job so easily without moving a leg. I was shocked to have received a job interview invitation few weeks after my application"</p>
          <cite>
            <a href="https://twitter.com/tim_kos">Olajumoke Adetolu Onikan </a> - Ibadan, Nigeria. <br>
            <img src="img/test3.jpg" class="img-responsive img-thumbnail testimonal-img pull-right">
          </cite>
        </blockquote>
      </div>
    </div>

  </div>
</section>
<!-- testimonal ends -->


 <?php
       require('include/layout/page-header-footer.php');
       require('include/layout/footer.php');
  ?>
