<?php
add_theme_support('post-thumbnails');

// -------------menu----------------
add_theme_support('menus');
function my_menu(){
    register_nav_menus(
        array(
            'category_menu' => "منوی دسته بندی"
        )
        );
}
add_action('init' , 'my_menu');


 //------------email-----------------
 add_action('wp_ajax_test' , 'testfunction');
 add_action('wp_ajax_nopriv_test' , 'testfunction');

function testfunction(){
    $data=$_POST;
    $email=$data['email'];
    global $wpdb;
    $prefix=$wpdb -> prefix;
    $table_name=$prefix.'form';
    
    $sql_select=$wpdb -> prepare('SELECT * FROM '.$table_name.' WHERE email_address= "'.$email.'"');
    $results = $wpdb -> get_results($sql_select);
    
    if(count($results)==0){
        $sql=$wpdb -> prepare('INSERT INTO '.$table_name.' (email_address) VALUES("'.$email.'")');
        $wpdb -> query($sql);
        
        echo wp_json_encode(
            array(
                "data" => $email ,
                "status" => true ,
                "message" =>" Very Welcome To Our Shop"
            )
        );
    }
    else{
        echo wp_json_encode(
            array(
                "status" => false ,
                "message" =>"You've Been Here Before. Nice To Meet You Again"
            )
        );
    }
    die();
}

//-----------------sign up-------------------
add_action('wp_ajax_register' , 'registerFunction');
add_action('wp_ajax_nopriv_register' , 'registerFunction');

function registerFunction(){
    $data=$_POST;
    $email=$data['email'];
    $firstname=$data['firstname'];
    $lastname=$data['lastname'];
    $password=$data['pass'];

    
    if (!$email || !$password || $email=="" || $password=="") {
        echo json_encode(
            array(
                'status' => false,
            )
         );
         exit();
    }

    $result= wp_insert_user(
        array(
            'user_login' => $email ,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'user_pass' => $password,
        )
    );

     
    if(!is_wp_error($result)){
        wp_signon(
            array(
                'user_login' => $email,
                'user_password' => $password
            )
            );
        echo json_encode(
            array(
                'status' => true,
                'message'=> 'You signed up!'
            )
        );

    }

    else{
        if(is_wp_error($result)){
            echo json_encode(
                array(
                    'status' => false,
                    'message' => 'your information is not correct'
                )
            );
        }
    }
 die();
}

 //-------------------------login---------------------------
 add_action('wp_ajax_login' , 'loginfunction');
 add_action('wp_ajax_nopriv_login' , 'loginfunction');

function loginfunction(){
    $data=$_POST;
    $email=$data['email'];
    $password=$data['pass'];
    global $wpdb;
    $prefix=$wpdb -> prefix;
    $table_name=$prefix.'users';
    
    $sql_select=$wpdb -> prepare('SELECT * FROM '.$table_name.' WHERE user_login= "'.$email.'"');
    $results = $wpdb -> get_results($sql_select);
 
    if(count($results)==0){        
        echo wp_json_encode(
            array(
                "status" => false ,
                "message" =>"You have not signed up , please sign up first!"
            )
        );
    }
    else{
        wp_signon(
            array(
                'user_login' => $email,
                'user_password' => $password
            )
        );
        echo wp_json_encode(
            array(
                "status" => true ,
                "message" =>"welcome back"
            )
        );
    }
    die();
}
//------------------------------search part------------------------------
add_action('wp_ajax_search' , 'searchfunction');
add_action('wp_ajax_nopriv_search' , 'searchfunction');

function searchfunction(){
   $data=$_POST;
   $search=$data['search'];
   global $wpdb;
   $prefix=$wpdb -> prefix;
   $table_name=$prefix.'posts';
   
   $sql_select=$wpdb -> prepare('SELECT ID FROM '.$table_name.' WHERE post_title like"%'.$search.'%" AND post_status= "publish"');
   $results = $wpdb -> get_results($sql_select);
   $id=(int)$results[0] -> ID;

   if(count($results)==0){        
       echo wp_json_encode(
           array(
               "status" => false ,
               "message" =>"No product has found!"
           )
       );
      exit(); 
   }
   else{
        $post_id=(int)$results[0];
        echo wp_json_encode(
            array(
                "status" => true,
                "title" => get_the_title($id),
                "link" =>get_permalink( $id )
            )
        );
     };
   die();
}
 ?>