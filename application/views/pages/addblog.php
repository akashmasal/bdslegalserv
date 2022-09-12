<div class="notify">
    <?php
    if ($this->session->flashdata("success")) {
        echo $this->session->flashdata("success");
    } else {
        echo $this->session->flashdata("error");
    }
    ?>    
</div>



<div class="container addblogform">
    <form method="post" action="<?php echo base_url("blog/addblog"); ?>" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Author Name</label>
            <input type="text" name="blog_author_name" class="form-control">
            <span><?php //echo form_error("blog_author_name");?></span>
        </div>
        <br>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example2">Blog Title</label>
            <input type="text" name="blog_heading" class="form-control">
            <span><?php //echo form_error("blog_heading");?></span>
        </div>
        <br>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Blog Short Description</label>
            <textarea class="form-control" name="blog_short_description" maxlength="200" rows="2"></textarea>
            <span><?php //echo form_error("blog_description");?></span>
        </div>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Blog Content</label>
            <textarea class="form-control" name="blog_content" rows="4"></textarea>
            <span><?php //echo form_error("blog_description");?></span>
        </div>
        <br>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Blog Banner</label>
            <input type="file" class="form-control" name="blog_banner">
            <span><?php //echo form_error("blog_banner");?></span>
        </div>
        <br>

        <input type="submit" value="ADD" class="btn btn-primary btn-block mb-4">
    </form>
</div>


<style>
    .addblogform {
        padding: 10vh 0vh;
        margin: 0vh 10vh;
        /* display: grid;
        align-items: center;
        justify-content: center;*/
    }
    
    .notify{
        padding-top: 15vh;
        padding-left: 6vw;
    }

    
</style>