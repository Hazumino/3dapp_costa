<!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
        <link rel='stylesheet' type='text/css' href='css/x3dom.css'></link> 
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">

        <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>
        
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Fancybox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap+CSS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    </head>
    <body>
    <style>
    #button-group {
    width: 300px;
    height: 300px;
    position: relative;
  }
</style>

  <!-- aimdwda -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="material-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="assets/images/costa_logo.png" class="rounded me-2" alt="...">
                <strong class="me-auto" id="material-color"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="material-info"></div>
        </div>
    </div>
        <button id="goback_button" type="button" class="btn btn-danger btn-floating btn-lg fixed-bottom" onclick="javascript:swap('main_page')" style="width: 10em;display: none;">
            <i>Go Back</i>
        </button>

        <!-- Header -->
        <?php include_once("header.html"); ?>

        <!-- First -->
        <div id="main_page" class="container_fluid main_contents">
        <div class="row">
            <!-- Future 3d Model-->
            <div class="col-sm-12">
            <div id="main_3d_image">
                <div class="card" id="main_text">
                    <h4  class="card-title">Extraordinary <br>Every day</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Indulge in your favorites</h3>
                    </div>
                    <div class="card-footer mx-auto text-center justify-content-center">
                        <button  class="costa_button" onclick="window.location.href=' https://www.costa.co.uk'">Find a Costa</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasIced" aria-labelledby="offcanvasIcedLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasIcedLabel">Iced Drinks</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small"> 
                ...
            </div>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasHot" aria-labelledby="offcanvasHotLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasHotLabel">Hot Drinks</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small"> 
                ...
            </div>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasCanned" aria-labelledby="offcanvasCannedLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasCannedLabel">Canned Drinks</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small"> 
                ...
            </div>
        </div>

        <!-- Iced Latte Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, transparent, rgba(190, 231, 190,0.5))">
            
            <!-- Future 3d Model-->
            <div class="col-sm-12">
                <div div class="card" id="item_card">
                    <h4 id="iced_latte_main_title" class="card-title"></h4>
                    <div class="arrow_hidden">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary w-100 offcanvas-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="offcanvas   reveal-for-large offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Latte</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                            <div class="offcanvas-body">
                                <a class="mainpage_images" href="assets/x3d/costa_cup/costa_cup.png">
                                    <img class="img-fluid" src="assets/x3d/costa_cup/costa_cup.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="iced_latte_main_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="javascript:swap('iced_latte'); change_flavour('flavour_iced_latte');">Learn More ></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hot Latte Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, rgba(190, 231, 190,0.5), rgba(247, 247, 220, 0.5))">
            <!-- Future 3d Model-->
            <div class="col-sm-12">
                <div div class="card" id="item_card">
                    <h4 id="latte_main_title" class="card-title"></h4>

                    <div class="arrow_hidden">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary w-100 offcanvas-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasExample">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
</a>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Latte</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                            <div class="offcanvas-body">
                                <a class="mainpage_images" href="assets/x3d/costa_cup/costa_cup.png">
                                    <img class="img-fluid" src="assets/x3d/costa_cup/costa_cup.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="latte_main_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="javascript:swap('hot_latte'); ">Learn More ></button>
                    </div>
                </div>
            </div>
        
        </div>
        <style>
  .offcanvas-button {
    background-color: transparent;
    border: none;
    position: relative;
  }
  .offcanvas-button:hover,
  .offcanvas-button:active
    {
    background-color: transparent;
  }
  .offcanvas-button svg {
  transform: scaleX(30) scaleY(8);
}
</style>
        <!-- Cold Can Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, rgba(247, 247, 220, 0.5), rgba(252, 187, 187, 0.5))">
            <div class="col-sm-12">
                <div div class="card" id="item_card">
                    <h4 id="canned_latte_main_title" class="card-title"></h4>
                    <div class="arrow_hidden">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary w-100 offcanvas-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Latte</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                            <div class="offcanvas-body">
                                <a class="mainpage_images" href="assets/x3d/costa_cup/costa_cup.png">
                                    <img class="img-fluid" src="assets/x3d/costa_cup/costa_cup.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="canned_latte_main_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="javascript:swap('canned_latte'); change_flavour('flavour_canned_latte');">Learn More ></button>
                    </div>
                </div>
            </div>

        </div>
        <!-- What's New -->
        <div class="row" style="background:linear-gradient(to bottom, rgba(252, 187, 187, 0.5),rgba(252, 187, 187, 0.5))">
            <div class="col-sm-12">
                <h4 id="latte_title">What's New</h4>
            </div>
        </div>
        <div class="row" style="background:linear-gradient(to bottom, rgba(252, 187, 187, 0.5),transparent)">
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_iced_cup/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_iced"></h4>
                    <div class="card-body mini-card-body" >
                        <h5 id="iced_latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasIced" role="button" aria-controls="offcanvasIced">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_cup/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_hot"></h4>
                    <div class="card-body mini-card-body">
                        <h5 id="latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" data-bs-toggle="offcanvas" href="#offcanvasHot" role="button" aria-controls="offcanvasHot" >Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_re_product/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_canned"></h4>
                    <div class="card-body mini-card-body">
                        <h5 id="canned_latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button  class="costa_button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCanned" role="button" aria-controls="offcanvasCanned">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Other Contents -->


        <!-- X3D Models -->
        <div id="iced_latte" class="container-fluid main_contents" style="display: none;">

            <!-- Original Content -->
            <div class="row">
                <div div class="card" id="item_card">
                    <div class="card-title card-page-title" >
                        <h2 id="slogan_title_text"></h2>
                    </div>
                    <div class="card-body card-page-slogan" style="text-align: center;">
                        <h2 id="slogan_text"></h2>
                    </div>
                </div>
        </div>
    
        <div class="row" style="padding-top: 50px;">
        <temporary></temporary>
            
            <!-- Future 3d Model-->
            <div class="col-sm-6" >
                <div class="float-container">
                        <div class="float-child dropdown"> 
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown_flavour" data-bs-toggle="dropdown" aria-expanded="false">
                                Flavour
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown_flavour">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_iced_latte'); swapDBINfo(1);">Iced Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_cold_brew'); swapDBINfo(2);">Cold Brew</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_chai_tea'); swapDBINfo(3);">Chai Tea Iced Latte</a></li>
                                </div>
                                <div id="hot_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_latte'); swapDBINfo(4);;">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_chocolate'); swapDBINfo(5);;">Hot Chocolate</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_mocha'); swapDBINfo(6);;">Mocha</a></li>
                                </div>
                                <div id="canned_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_latte'); swapDBINfo(7);;">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_caramel'); swapDBINfo(8);;">Caramel Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_americano'); swapDBINfo(9);;">Americano</a></li>
                                </div>
                            </ul>
                        </div>
                            <div class="float-child dropdown"> 
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Category 
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swap('iced_latte'); change_flavour('flavour_iced_latte'); swap_information('iced_latte_page');">Iced Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('hot_latte'); change_flavour('flavour_iced_latte'); swap_information('hot_latte_page');">Hot Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('canned_latte'); change_flavour('flavour_iced_latte'); swap_information('canned_latte_page');">Canned Drinks</a></li>
                                </div>
                            </ul>
                        </div>
                </div>

                <div class="model3D x3d-container">
                <x3d id="wire"> 
                    <scene>
                        <Switch whichChoice="0" id="sceneSwitch">

                                <transform DEF="ball">
                                <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/costa_iced_cup/costa_iced_cup.x3d">  </inline>
                                </transform>

                                <transform>
                                <inline nameSpaceName="model"  mapDEFToID="true"  url="assets/x3d/costa_cup/costa_cup.x3d">  </inline>
                                </transform>

                                <transform>
                                <inline nameSpaceName="model"  mapDEFToID="true"  url="assets/x3d/costa_re_product/costa_re_product.x3d">  </inline>
                                </transform>

                        </Switch>

                                <!-- CONTROLS ROTATION OF THE MODEL __ Iced Drink Straw up and down

                                <timeSensor id="animation_timesensor" DEF='RotationTimer' cycleInterval='4' loop='true' enabled='false'></timeSensor>

                                <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                
                                <ROUTE fromNode='RotationTimer' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                <ROUTE fromNode='Rotator' fromField='value_changed' toNode='ball' toField='set_rotation'></ROUTE>

                                -->

                                <!-- CONTROLS ROTATION OF THE MODEL __ Hot Drink Cup upd and down-->
                                <timeSensor id="time" DEF='time' cycleInterval='4' loop='true' enabled='false'></timeSensor>

                                <PositionInterpolator DEF="move" key="0 0.5 1" keyValue="0 0 0  0 3 0  0 0 0"> </PositionInterpolator>       
                                
                                <Route fromNode="time" fromField ="fraction_changed" toNode="move" toField="set_fraction"> </Route> 
	                            <Route fromNode="move" fromField ="value_changed" toNode="ball" toField="translation"> </Route>  

                                <!-- CONTROLS ROTATION OF THE MODEL __ Can rotate-->

                                <!-- Lights -->
                                <background skycolor="0 0 0" transparency=1 roundcolor="" groundangle="" skyangle="" backurl="" bottomurl="" fronturl="" lefturl="" righturl="" topurl=""></background>
                                <directionallight id="directional" direction="0 -1 0" on="FA intensity="2.0" shadowintensity="0.0" color="1,1,1" shadowmapsize="1024" znear="-1" zfar="-1" shadowcascades="1" shadowsplitfactor="1" shadowsplitoffset="0.1">
                                </directionallight> 
                                <PointLight id='point' on='FALSE' intensity='5.000' color='0.0 0.6 0.0' location='0 10 0.5 ' radius='20.0000' >  </PointLight> 
                                <NavigationInfo id="head" headlight='true' type='"EXAMINE"'>  </NavigationInfo> 
                                <SpotLight id='spot' on ="FALSE" beamWidth='0.9' color='0 0 1' cutOffAngle='1' location='0 0 10' radius='90.000' >  </SpotLight> 
                    </scene>
                </x3d>
                </div>
            </div>
    
            <div class="col-sm-6">
                <div div class="card mx-auto" id="item_card" >
                    <div class="card-title card-latte-title">
                        <h4 id="title_text"></h4>
                    </div>
                    <div class="card-body card-drink-description">
                        <h3 id="drink_description_text"></h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#camera_physical" aria-controls="camera_physical" aria-selected="true">Camera Control</button>
                            </li>
                        </ul>
                    </div>
                    <h3 class="card-title">Camera Controls</h3>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="camera_physical">
                                <button class="btn btn-primary" type="button" style="background-color: rgb(253, 160, 160); border-color: transparent; color:white" onclick="cameraFront();">
                                    Front
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(241, 253, 160); border-color: transparent; color:white" onclick="cameraBack();">
                                    Back
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(160, 253, 177); border-color: transparent; color:white" onclick="cameraLeft();">
                                    Left
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(160, 225, 253); border-color: transparent; color:white" onclick="cameraRight();">
                                    Right
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(206, 160, 253); border-color: transparent; color:white" onclick="cameraTop();">
                                    Top
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(255, 177, 207); border-color: transparent; color:white" onclick="cameraBottom();">
                                    Bottom
                                </button>
                                <button class="btn btn-primary" type="button" style="background-color: rgb(127, 127, 127); border-color: transparent; color:white" onclick="cameraNormal();">
                                    Normal
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#coke" aria-controls="coke" aria-selected="true">Lighting Control</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center; padding: 30px">Lighting Control</h3>
                            <input type="checkbox"  onclick="lightSwitch('point')">
                                <label>point light</label><br>
                            <input type="checkbox"  onclick="lightSwitch('spot')">
                                <label>spot light</label><br>
                            <input type="checkbox"  onclick="lightSwitch('directional')">
                                <label>directional light</label><br>
                            <input type="checkbox" checked="true" onclick="headlight('head')">
                                <label>headlight</label><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" href="#animation">Animation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link" data-bs-toggle="tab" type="button" role="tab" href="#render" >Render</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content card-body">
                        <div class="tab-pane active" id="animation">
                        <h3 class="card-title" style="text-align: center; padding: 30px">Animation</h3>
                            <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="onAnimation();">On</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="offAnimation();">Off</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="render">
                            <h3 class="card-title" style="text-align: center; padding: 30px">Render</h3>
                            <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="wireFrame();">WireFrame</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="vertex();">Vertex</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="normal();">Normal</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="redraw();">Reset</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Gallery Feature -->
        <div id="our_coffee_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem;">
                    <h4  class="card-title">Gallery of our drinks!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Indulge in your favorites</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem; padding-top:40px">
                    <h4  class="card-title">Costa Iced Products!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Perfect on a sunny day!</h3>
                    </div>
                </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="carousel_first"></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem; padding-top:40px">
                    <h4  class="card-title">Costa Take Away Products!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Drink your favourites, anywhere!</h3>
                    </div>
                </div>
            <div id="carouselReProduct" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselReProduct" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselReProduct" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselReProduct" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="carousel_second"></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselReProduct" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselReProduct" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>

            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem; padding-top:40px">
                    <h4  class="card-title">Costa Hot Products!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> No need to be cold, drink this! </h3>
                    </div>
                </div>
            <div id="carouselHotProduct" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="carousel_third"></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotProduct" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHotProduct" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
        </div>
        <!--  Extra Feature -->
        <div id="our_menu_content" class="container-fluid main_contents" style="display: none;">
                <div class="row">
                    <div div class="card">
                        <input type="text" id="mySearch" onkeyup="menu_function()" placeholder="Search.." title="Type in a category">
                    </div>
                </div>
            <ul class="list-group list-group-vertical" id="myMenu" style=" width:33.3%;">
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Iced Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Espresso</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Americano</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Fluid</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Americano</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Fluid</h4>
                </div>
                </a>
              </li>
            </ul>
        </div>

        <!-- Contact Us Feature -->
        <div id="contact_us_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">Have a question about Costa?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> If you can’t find what you’re looking for on our website check out our FAQ’s for the quickest answer. Alternatively, you can reach our Customer Services team by submitting a query through our contact form.</h3>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" id="accordion_button_1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div id="accordion_explanation_1" class="accordion-body"></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" id="accordion_button_2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div id="accordion_explanation_2" class="accordion-body"></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" id="accordion_button_3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body" id="accordion_explanation_3"></div>
                  </div>
                </div>
              </div>
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem; padding-top: 30px;">
                    <h4  class="card-title">Contact us directly!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Please fill in the form with all the information.</h3>
                    </div>
                </div>
            </div>
            <form id="request_form" method="post">
                <div class="form-group">
                  <label class="form-group-header" for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label class="form-group-header" for="category">Please choose the category most appropriate</label>
                  <select class="form-control" id="category" name="category">
                    <option>Dietary Questions</option>
                    <option>Problems with the application</option>
                    <option>Problems with the web page</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-group-header" for="description_request">Description of the issue</label>
                  <textarea class="form-control" id="description_request" name="description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="costa_button btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        
        <!-- Request List Feature -->
        <div id="request_list_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">Want to see the user requests?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h4> You've come to the right place! </h4>
                    <h3> You can even remove them with the click of a button! </h3>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="request_list_placeholder" style="border-color: black">
            <thead class="table-active">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Comment</th>
                <th scope="col">Remove Request</th>
            </tr>
            </thead>
            <tbody class="tbody-light">
            </tbody>
            </table>
        </div>

        <!-- Going Beyond Page -->
        <div id="going_beyond_content" class="container-fluid main_contetns" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">What feature are beyond in this project?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Here they are: </h3>
                    </div>
                </div>
            </div>
            <ul>
                <li>The X3D models are more complex</li>
                <ul>
                    <li>Use of html5 to change values of the x3d model</li>
                    <li>Integration with bootstrap to add Toasts when a specific material is clicked.</li>
                </ul>
                <li>Use of Bootstrap 5, which allows for the creation of accordion (see the Contact Us Page), and the creation of OffCanvas sidebars</li>
                <ul>
                    <li>Use of Accordions</li>
                    <li>Use of OffCanvas sidebars</li>
                    <ul>
                        <li>When images in main page are too big, they are moved to a new offcanvas, accesible via large arrows</li>
                    </ul>
                    <li>Use of Toasts, used to check the material when clicking on a material on the x3d model</li>
                </ul>
                <li>Request Feature (CRUD)</li>
                <ul>
                    <li>Create a request to be sent to the database</li>
                    <li>Read the list of requests</li>
                    <li>Add and update comments for individual requests</li>
                    <li>Delete specific request</li>
                </ul>
                <li>Used Blender to create the X3D model.</li>
                <li>Photorealistic Renders of the 3d Objects (seen in the gallery)</li>
                <ul>
                    <li>Use of condensation texture to add realism to the cans</li>
                    <li>Specific Shader Nodes used to replicate materials (such as the plastic cups in the iced drinks)</li>
                </ul>
                <li>Use of Javascript library Three.js to create 3d gyzmo to interactively </li>
                <ul>
                    <li>Use of condensation texture to add realism to the cans</li>
                    <li>Specific Shader Nodes used to replicate materials (such as the plastic cups in the iced drinks)</li>
                </ul>
            </ul> 
        </div>
        <style>
  
  .offcanvas-button:focus svg {
    filter: drop-shadow(0 0 5px #007bff) drop-shadow(0 0 10px #007bff) drop-shadow(0 0 15px #007bff);
  }
  
</style>

        <!-- Footer -->
        <?php include_once("footer.html"); ?>

        <!-- Custom Javascript -->
        <script src="js/request_table_functions.js"></script>
        <script src="js/gallery_functions.js"></script>
        <script src="js/getJsondata.js"></script>
        <script src="js/swap_functions.js"></script>
        <script src="js/modelInteraction.js"></script>
        <!-- Custom Javascript -->
    </body>
</html>