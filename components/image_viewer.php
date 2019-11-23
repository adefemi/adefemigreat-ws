<div class="image_viewer closed" id="image_viewer">
    <div class="close" onclick="closeImageViewer()"><i data-feather="x"></i></div>
    <div class="image-list" id="image-list">
        <img class="active" src="https://cdn.pixabay.com/photo/2019/09/24/06/10/red-4500348_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/09/08/20/54/elephant-4461911_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/09/04/11/56/magical-4451380_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/11/19/14/11/landscape-4637539_960_720.jpg" alt="image">
        <img  src="https://cdn.pixabay.com/photo/2019/11/19/14/11/landscape-4637538_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/11/19/03/35/love-4636369_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/11/19/16/59/lake-4637933_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/10/31/06/58/avenue-4591121_960_720.jpg" alt="image">
        <img src="https://cdn.pixabay.com/photo/2019/11/20/14/48/mirror-house-4640244_960_720.jpg" alt="image">
    </div>
    <div class="controls">
        <button id="prevButton"><i data-feather="chevron-left"></i></button>
        <button id="nextButton"><i data-feather="chevron-right"></i></button>
    </div>
</div>

<script>
    (() => {
        let nextButton = document.getElementById("nextButton");
        let prevButton = document.getElementById("prevButton");
        let imageList = document.getElementById("image-list");
        let image_array = imageList.getElementsByTagName("img")
        checkActive(image_array, nextButton, prevButton);


        prevButton.addEventListener("click", () => {
            if(!checkCanClick("prev", prevButton, nextButton)) return;
            moveImage("prev", image_array)
            checkActive(image_array, nextButton, prevButton);
        });

        nextButton.addEventListener("click", () => {
            if(!checkCanClick("next", prevButton, nextButton)) return;
            moveImage("next", image_array)
            checkActive(image_array, nextButton, prevButton);
        });
    })()

    function moveImage(button, image_list){
        let activeIndex = 0;
        for (var i = 0; i < image_list.length; i++){
            if(image_list[i].classList.contains("active")){
                activeIndex = i;
            }
        }

        if(button === "next"){
            image_list[activeIndex].classList.remove("active");
            image_list[activeIndex + 1].classList.add("active");
        }
        else if(button === "prev"){
            image_list[activeIndex].classList.remove("active");
            image_list[activeIndex - 1].classList.add("active");
        }
    }

    function checkActive(image_array, next, prev){
        if(image_array.lenght < 1) return;

        if(image_array[0].classList.contains("active")){
            if(!prev.classList.contains("disabled")){
                prev.classList.add("disabled")
            }
        }
        else{
            if(prev.classList.contains("disabled")){
                prev.classList.remove("disabled")
            }
        }

        if(image_array[image_array.length - 1].classList.contains("active")){
            if(!next.classList.contains("disabled")){
                next.classList.add("disabled")
            }
        }
        else{
            if(next.classList.contains("disabled")){
                next.classList.remove("disabled")
            }
        }
    }

    function checkCanClick(button, prev, next){
        if(button==="prev" && prev.classList.contains("disabled")) return false;
        else if(button==="next" && next.classList.contains("disabled")) return false;
        return true;
    }

    function openImageViewer(first_image, images){
        let imageViewer = document.getElementById("image_viewer");
        let imageListElement = document.getElementById("image-list");
        imageListElement.innerHTML = ""
        imageListElement.appendChild(imageElement(first_image, 0, "active"))
        
        for (var i =0; i < images.length; i++){
            imageListElement.appendChild(imageElement(images[i].image, (i+1)))
        }

        let image_array = imageListElement.getElementsByTagName("img")
        checkActive(image_array, document.getElementById("nextButton"), document.getElementById("prevButton"));

        // last stuff
        if(imageViewer.classList.contains("closed")){
            imageViewer.classList.remove("closed")
        }
    }

    function imageElement(source, id, content="")
        {
            //dynamically add an image and set its attribute
            var img=document.createElement("img");
            img.src=source
            img.id=id
            img.className = content;
            img.alt = "image"+id;
            return img
        }


    function closeImageViewer(){
        let imageViewer = document.getElementById("image_viewer");
        if(!imageViewer.classList.contains("closed")){
            imageViewer.classList.add("closed")
        }
    }
</script>