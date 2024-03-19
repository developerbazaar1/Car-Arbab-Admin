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


// --------electric battery condition------

var position,
  lastPosition,
  canSlide = false,
  range = $(".range"),
  input = range.find("input"),
  maxPoints = input.attr("max"),
  minPoints = input.attr("min"),
  prevVal = input.attr("min");

range.on("mousedown touchstart", rangeSliderInit);
range.on("mousemove touchmove", rangeSliderUpdate);
range.on("mouseup touchend", rangeSliderStop);

function pointerEvents(e) {
  var pos = { x: 0, y: 0 };

  if (
    e.type == "touchstart" ||
    e.type == "touchmove" ||
    e.type == "touchend" ||
    e.type == "touchcancel"
  ) {
    var touch = e.changedTouches[0];
    pos.x = touch.pageX;
    pos.y = touch.pageY;
  } else if (
    e.type == "mousedown" ||
    e.type == "mouseup" ||
    e.type == "mousemove" ||
    e.type == "mouseover" ||
    e.type == "mouseout" ||
    e.type == "mouseenter" ||
    e.type == "mouseleave"
  ) {
    pos.x = e.pageX;
    pos.y = e.pageY;
  }

  return pos;
}

function rangeSliderInit() {
  canSlide = true;
}

function rangeSliderUpdate(e) {
  if (!canSlide || maxPoints == 0) return;

  var position = pointerEvents(e),
    dial = range.find(".dial"),
    dialRadius = dial.width() / 2,
    coords = {
      x: position.x - range.offset().left,
      y: position.y - range.offset().top
    },
    radius = range.width() / 2,
    atan = Math.atan2(coords.x - radius, coords.y - radius),
    deg = Math.ceil(-atan / (Math.PI / 180) + 180);

  if (prevVal <= 1 && lastPosition - position.x >= 0) deg = 0;
  if (prevVal >= 359 && lastPosition - position.x <= 0) deg = 360;

  var x =
    Math.ceil((radius - 5) * Math.sin(deg * Math.PI / 180)) + radius + "px",
    y =
      Math.ceil((radius - 5) * -Math.cos(deg * Math.PI / 180)) + radius + "px",
    points = Math.ceil(deg * maxPoints / 360);

  //move dial
  dial.css({ transform: "translate(" + x + "," + y + ")" });

  //show range progress
  if (deg <= 180) {
    range.find(".right .blocker").css({ transform: "rotate(" + deg + "deg)" });
    range.find(".left .blocker").css({ transform: "rotate(0)" });
  } else {
    range.find(".right .blocker").css({ transform: "rotate(180deg" });
    range
      .find(".left .blocker")
      .css({ transform: "rotate(" + (deg - 180) + "deg)" });
  }

  //show value
  range.find(".count").text(points).val(points);

  prevVal = deg;
  lastPosition = position.x;
}

function rangeSliderStop() {
  canSlide = false;
}
