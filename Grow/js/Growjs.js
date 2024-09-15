//-----------------------------------------menu------------------------------------------------
$('.menuBtn').click(function(){
  $('.mobileMenu').css('left' , '0');
});
$('.menuClose').click(function(){
  $('.mobileMenu').css('left' , '-100%');
});
/* ----------------------------------------first swiper-------------------------------------------*/
var swiper = new Swiper(".swiper1", {
    slidesPerView: 4,
    spaceBetween: 40,
    loop: true,
    speed:500,
    breakpoints: {
       
        768: {
          slidesPerView: 4,
          spaceBetween: 20
        },
       
        568: {
          slidesPerView: 3,
          spaceBetween: 25
        },
        425:{
            slidesPerView:2,
            spaceBetween:20
        },
        
        100: {
            slidesPerView: 1,
            spaceBetween:10
        }
      },
  
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
  });
  /*-----------------------------------------second swiper--------------------------------------------*/
  var swiper = new Swiper(".swiper2", {
    slidesPerView: 3,
    spaceBetween: 100,
    loop:true,
    
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
       
      768: {
        slidesPerView: 3,
        spaceBetween: 100
      },
     
      576: {
        slidesPerView: 2,
        spaceBetween: 50
      },
      425:{
          centeredSlides:true,
          slidesPerView:1.8,
          spaceBetween:20
      },
      
      100: {
        centeredSlides:true,
        slidesPerView:1.4,
        spaceBetween:20
      }
    },

    });

    /*--------------------------------------plant care------------------------------*/
    $('.angle1').click(function() {
      $('.paragraph1').slideToggle(2000);
      $('.paragraph1').css('display' , 'inline');
  })
  $('.angle2').click(function() {
      $('.paragraph2').slideToggle(2000);
      $('.paragraph2').css('display' , 'inline');
  })
  $('.angle3').click(function() {
      $('.paragraph3').slideToggle(2000);
      $('.paragraph3').css('display' , 'inline');
  })
  $('.angle4').click(function() {
      $('.paragraph4').slideToggle(2000);
      $('.paragraph4').css('display' , 'inline');
  })
  $('.angle5').click(function() {
      $('.paragraph5').slideToggle(2000);
      $('.paragraph5').css('display' , 'inline');
  })
  $('.angle6').click(function() {
      $('.paragraph6').slideToggle(2000);
      $('.paragraph6').css('display' , 'inline');
  })
  $('.angle7').click(function() {
      $('.paragraph7').slideToggle(2000);
      $('.paragraph7').css('display' , 'inline');
  })
  $('.angle8').click(function() {
      $('.paragraph8').slideToggle(2000);
      $('.paragraph8').css('display' , 'inline');
  })
  $('.angle9').click(function() {
      $('.paragraph9').slideToggle(2000);
      $('.paragraph9').css('display' , 'inline');
  })
  $('.angle10').click(function() {
      $('.paragraph10').slideToggle(2000);
      $('.paragraph10').css('display' , 'inline');
  })
  // ----------------------------Heart----------------------------------
  $('.heart').click(function() {
    $('.popup').fadeToggle( function(){
    });
    $('.heart').toggleClass("theart");
});
//-----------------------------about us--------------------------------
var swiper = new Swiper(".swiper3", {
  grabCursor: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: [0, 0, -400],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
});
//-------------------------gifts---------------------------------------
$('.gifts').click(function() {
  $('.giftPopup').fadeToggle();
});
//--------------------------email---------------------------------------

function sendEmail(){
 
  var input=document.getElementById('email');
  let email=input.value;
  
  var formdata= new FormData();
  formdata.append("action" , "test");
  formdata.append("email" , email);
  
  if (!email || email==="") {
    document.getElementById('emailResult').innerHTML="Please Enter Your Email!";
    return 0;
  }

  var requestOptions={
    method:'post',
    body: formdata,
  };

  document.getElementById('sum').innerHTML="Sending";
  document.getElementById('emailResult').innerHTML=" ";

  fetch("http://localhost/Grow/wp-admin/admin-ajax.php" , requestOptions)
  .then(response => response.json())
  .then(result => {
    document.getElementById('sum').innerHTML="Sign up";
    if (result.status) {
      document.getElementById('emailResult').innerHTML=`<div class="text-success">${result.message}</div>`;
    }
    else{
      document.getElementById('emailResult').innerHTML=`<div class="text-danger">${result.message}</div>`;
    }
  }) 
  .catch(error => console.log('error' , error));
}
$('.sum').click(function(){
  sendEmail();
});

//-------------------register2---------------
function registerFunction(){
  var email_input=document.getElementById('signup-email');
  var email= email_input.value;
  
  var pass_input= document.getElementById('signup-password');
  var pass=pass_input.value;

  var firstname_input=document.getElementById('firstname');
  var firstname= firstname_input.value;

  var lastname_input = document.getElementById('lastname');
  var lastname= lastname_input.value;

  var formdata= new FormData();
  formdata.append("action" , "register");
  formdata.append("email" , email);
  formdata.append("pass" , pass);
  formdata.append("lastname" , lastname);
  formdata.append("firstname" , firstname);

  if (!email || email===""|| !pass || pass==="") {
    document.getElementById('signup-result').innerHTML="Email and password can't be empty.";
    return 0;
  }

  var requestOptions={
    method: 'post',
    body: formdata,
  };
  
  document.getElementById('signup-sumbit').innerHTML="Sending your information";

  fetch("http://localhost/Grow/wp-admin/admin-ajax.php" , requestOptions)
  .then(response => response.json())
  .then(result => {
    document.getElementById('signup-sumbit').innerHTML="Log in";
    if (result.status) {
      document.getElementById('signup-result').innerHTML=`<div class="text-success">${result.message}</div>`;
      location.reload();
    }
    else{
      document.getElementById('signup-result').innerHTML=`<div class="text-danger">${result.message}</div>`;
    }
  }) 
  .catch(error => console.log('error' , error));
}
$('#signup-sumbit').click(function(){
  registerFunction();
}); 

//--------------------------log in---------------------------

function login(){
  var email_input=document.getElementById('login-email');
  var email= email_input.value;
  
  var pass_input= document.getElementById('login-password');
  var pass=pass_input.value;
  
  var formdata= new FormData();
  formdata.append("action" , "login");
  formdata.append("email" , email);
  formdata.append("pass" , pass);

  if (!email || email===""|| !pass || pass==="") {
    document.getElementById('login-result').innerHTML="Email and password can't be empty.";
    return 0;
  }

  var requestOptions={
    method: 'post',
    body: formdata,
  };
  
  document.getElementById('login-sumbit').innerHTML="Sending your information";

  fetch("http://localhost/Grow/wp-admin/admin-ajax.php" , requestOptions)
  .then(response => response.json())
  .then(result => {
    document.getElementById('login-sumbit').innerHTML="Log in";
    if (result.status) {
      document.getElementById('login-result').innerHTML=`<div class="text-success">${result.message}</div>`;
      location.reload();
    }
    else{
      document.getElementById('login-result').innerHTML=`<div class="text-danger">${result.message}</div>`;
    }
  }) 
  .catch(error => console.log('error' , error));
}
$('#login-sumbit').click(function(){
  login();
}); 
  //-----------------indoor/outdoor new swiper-----------------
  var swiper = new Swiper(".newSwiper", {
    slidesPerView: 3,
    spaceBetween: 100,
    loop:true,
    
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    breakpoints: {
       
      768: {
        slidesPerView: 3,
        spaceBetween: 100
      },
     
      576: {
        slidesPerView: 2,
        spaceBetween: 50
      },
      425:{
          centeredSlides:true,
          slidesPerView:1.8,
          spaceBetween:20
      },
      
      100: {
        centeredSlides:true,
        slidesPerView:1.4,
        spaceBetween:20
      }
    },

    });

  //----------------all posts indoor/outdoor swiper------------
  var swiper = new Swiper(".allSwiper", {
    slidesPerView: 3,
    spaceBetween: 100,
    loop:true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    
    breakpoints: {
       
      768: {
        slidesPerView: 3,
        spaceBetween: 100
      },
     
      576: {
        slidesPerView: 2,
        spaceBetween: 50
      },
      425:{
          centeredSlides:true,
          slidesPerView:1.8,
          spaceBetween:20
      },
      
      100: {
        centeredSlides:true,
        slidesPerView:1.4,
        spaceBetween:20
      }
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    });
    // -----------------------------search part-----------------------------------
   $('.search').click(function() {
      $('.search-part').fadeToggle();
  });
  function searchFunction(){
 
    var input=document.getElementById('search');
    let search=input.value;
    
    var formdata= new FormData();
    formdata.append("action" , "search");
    formdata.append("search" , search);
    
    var requestOptions={
      method:'post',
      body: formdata,
    };
  
    fetch("http://localhost/Grow/wp-admin/admin-ajax.php" , requestOptions)
    .then(response => response.json())
    .then(result => {
      if (result.status) {
        document.getElementById('search-result').innerHTML=`<a href=" ${result.link}"><h4 id="search-result">${result.title}</h4></a>`;
      }
      else{
        document.getElementById('search-result').innerHTML=`<h4 id="search-result">${result.message}</h4>`;
      }
    }) 
    .catch(error => console.log('error' , error));
  }
  $('#searchBtn').click(function(){
    $('#result-box').fadeToggle();
    searchFunction();
  });