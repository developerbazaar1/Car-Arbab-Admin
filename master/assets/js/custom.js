// ------file upload STEP 1-----

var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    
  }
}
//---------------------

// ------file upload step 2-----

// var imgUpload = document.getElementById('step2-upload')
//   , imgPreview = document.getElementById('step2-img-preview')
//   , imgUploadForm = document.getElementById('form-upload2')
//   , totalFiles
//   , previewTitle
//   , previewTitleText
//   , img;

// imgUpload.addEventListener('change', previewImgs, true);

// function previewImgs(event) {
//   totalFiles = imgUpload.files.length;
  
//      if(!!totalFiles) {
//     imgPreview.classList.remove('img-thumbs-hidden');
//   }
  
//   for(var i = 0; i < totalFiles; i++) {
//     wrapper = document.createElement('div');
//     wrapper.classList.add('wrapper-thumb');
//     removeBtn = document.createElement("span");
//     nodeRemove= document.createTextNode('x');
//     removeBtn.classList.add('remove-btn');
//     removeBtn.appendChild(nodeRemove);
//     img = document.createElement('img');
//     img.src = URL.createObjectURL(event.target.files[i]);
//     img.classList.add('img-preview-thumb');
//     wrapper.appendChild(img);
//     wrapper.appendChild(removeBtn);
//     imgPreview.appendChild(wrapper);
   
//     $('.remove-btn').click(function(){
//       $(this).parent('.wrapper-thumb').remove();
//     });    
//   }
// }
//------------------------------

function battery(charge) {
  var index = 0;
  $(".battery .bar").each(function() {
    var power = Math.round(charge / 10);
    if (index != power) {
      $(this).addClass("active");
      index++;
    } else {
      $(this).removeClass("active");
    }
  });
}

$(".battery .bar").click(function() {
  battery(parseInt($(this).data("power")));
});

battery(0); // (67%) Any number 100 or lower will work, Including decimals.