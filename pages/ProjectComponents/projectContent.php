<div class="max-width-1400">

    <div class="margin-top-50 home-segment">
        <div class="title3 text-center">My projects</div>
    </div>

    <?php if(count($decoded_projects) < 1){ ?> 
        <div class="main-404">
            <div class="heading-404">
                OPS!
            </div>
            <div class="desc-404">There is currently no project. You should check back later.</div>
        </div>
        
    <?php } ?>

    <?php if($page_error != NULL){ ?> 
        <div class="main-404">
            <div class="heading-404">
                ERROR
            </div>
            <div class="desc-404">The page you are looking for do not exist!</div>
            <a href="/projects" class="button-main">Go Back</a>
        </div>
        
    <?php } ?>

    <?php if(count($decoded_projects) > 0){ ?>
    

    <?php 
        for($j=0; $j<count($decoded_projects); $j++){
            $sum = $j+1;
            $is_odd = $sum%2>0 ? true : false;
    ?>

    <?php if($is_odd){  ?>

        <div class="container-section flex-inverse">
            <div class="section-1 home-heading margin-right-10 remove-spaces-mobile">
                <div>
                <h1 class="project-title"><?php echo($decoded_projects[$j]["title"]) ?></h1>
                <p class="context">
                <?php echo($decoded_projects[$j]["description"]) ?>
                </p>
                <a href="<?php echo($decoded_projects[$j]["link"]) ?>" target="_blank">
                    <button class="button-main">
                        Explore
                    </button>
                </a>
                </div>
            </div>
            <div class="section-2 home-heading-image">
                <div class="img-con-cover">
                    <div class="img-con" style="background-image: url(<?php echo($decoded_projects[$j]["cover_image"]); ?>)"></div>
                </div>
            </div>

        </div>
    <?php } else { ?>
        <div class="container-section">
            <div class="section-2 home-heading-image">
                <div class="img-con-cover">
                    <div class="img-con" style="background-image: url(<?php echo($decoded_projects[$j]["cover_image"]); ?>)"></div>
                </div>
            </div>
            <div class="section-1 home-heading margin-left-20 remove-spaces-mobile">
            <div>
                <h1 class="project-title"><?php echo($decoded_projects[$j]["title"]) ?></h1>
                <p class="context">
                    <?php echo($decoded_projects[$j]["description"]) ?>
                </p>
                <a href="<?php echo($decoded_projects[$j]["link"]) ?>" target="_blank">
                    <button class="button-main">
                        Explore
                    </button>
                </a>
                </div>
            </div>
        </div>

    <?php } ?>

    <?php } ?>

    <?php } ?>
    <?php if($page_error == NULL){ ?> 

        <div class="paginator">
            <a class="page-items <?php 
                if($decoded_project_data['previous'] == NULL){
                    echo("disabled");
                }else{
                    echo("");
                }
            ?>" href="<?php 
                $temp_data = explode('?', $decoded_project_data['next']);
                if(end($temp_data) != NULL){
                    $path_data = 'http://'.$_SERVER['HTTP_HOST'].'/projects?'.end($temp_data);
                }
                else{
                    $path_data = 'http://'.$_SERVER['HTTP_HOST'].'/projects';
                }
                
                echo ($path_data);
            ?>">
                Prev
            </a>
            <a class="page-items <?php 
                if($decoded_project_data['next'] == NULL){
                    echo("disabled");
                }else{
                    echo("");
                }
            ?>" href="<?php 
                $temp_data = explode('?', $decoded_project_data['next']);
                if(end($temp_data) != NULL){
                    $path_data = 'http://'.$_SERVER['HTTP_HOST'].'/projects?'.end($temp_data);
                }
                else{
                    $path_data = 'http://'.$_SERVER['HTTP_HOST'].'/projects';
                }
                echo ($path_data);
            ?>">
                Next
            </a>
        </div>

    <?php } ?>

    <?php include_once("components/footer.php") ?>
</div>