<html>

<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="./source/galstyle.css">
    <script src="./source/js/jquery-3.1.0.js"></script>
</head>
<body>
<div class="gallery">
<div class="container-full container center-block centered">
    <div class ="gal_row">
        <div class="col" >
            <img src="./uploads/gal_1.jpg" alt="pic1" height="235" width="275" id="image1"/>
        </div>
        <div class="col">
            <img src="./uploads/gal_2.jpg" alt="pic2" height="235" width="275" id="image2"/>
        </div>
        <div class="col">
            <img src="./uploads/gal_3.jpg" alt="pic3" height="235" width="275" id="image3"/>
        </div>
        <div class="col">
            <img src="./uploads/gal_4.jpg" alt="pic4" height="235" width="275" id="image4"/>
        </div>
    </div>
</div>


<i class="fa fa-anchor">

</i>"

<br>
    <div class ="gal_row text-center">

        <input class="btn btn-default" value="PREVIOUS" id="prev" name="prev" onclick="prev();" >
        <input class="btn btn-default" value="NEXT" id="next" name="next" onclick="next();" >

        {{--<i class="fa fa-arrow-right" id="prev" name="prev" onclick="prev();">--}}

        {{--</i>--}}

        {{--<i class="fa fa-arrow-left" id="next" name="next" onclick="next();">--}}

        {{--</i>--}}

        {{--<input type="button"  class="btn btn-default fa fa-arrow-left" value="NEXT" id="next" name="next" onclick="next();" >--}}
    </div>
</div>

<script >
    var images1 = [];
    images.push("../../uploads/gal_1.jpg");
    images.push("../../uploads/gal_2.jpg");
    images.push("../../uploads/gal_3.jpg");
    images.push("../../uploads/gal_4.jpg");

    var images2 = [];
    images.push("../../uploads/gal_2.jpg");
    images.push("../../uploads/gal_3.jpg");
    images.push("../../uploads/gal_4.jpg");
    images.push("../../uploads/gal_1.jpg");

    var images3 = [];
    images.push("../../uploads/gal_3.jpg");
    images.push("../../uploads/gal_4.jpg");
    images.push("../../uploads/gal_1.jpg");
    images.push("../../uploads/gal_2.jpg");

    var images4 = [];
    images.push("../../uploads/gal_4.jpg");
    images.push("../../uploads/gal_1.jpg");
    images.push("../../uploads/gal_2.jpg");
    images.push("../../uploads/gal_3.jpg");

    var num = 3;
    var cur = 1;

    var im1=$("#image1");
    var im2=$("#image2");
    var im3=$("#image3");
    var im4=$("#image4");

    function prev(){
        if(cur>0)
        {

            im1.attr('src', images1[cur-1]);
            im2.attr('src', images2[cur-1]);
            im3.attr('src', images3[cur-1]);
            im4.attr('src', images4[cur-1]);
            cur = cur - 1;

        }

    }

    function next(){

        if(cur < num){

            im1.attr('src', images1[cur+1]);
            im2.attr('src', images2[cur+1]);
            im3.attr('src', images3[cur+1]);
            im4.attr('src', images4[cur+1]);
            cur = cur + 1;

        }

    }


</script>

</body>

</html>