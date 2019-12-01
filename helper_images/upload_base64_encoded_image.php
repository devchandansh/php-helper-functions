<?php

/*
*|==============================================
*|  Upload Base64 Image. Write the Image on a file.
*|==============================================
*/

function upload_base64_image($image_data ='') {  
    
    if( !empty($image_data) )
    {
        //  $data_base64; 
        $data_base64_encoded = $image_data; 
        
        //  Image extension
        $data_extn 	= 'jpg'; 
        $extension  = '.'.$data_extn;

        $rand 		= (rand(1000,9999));
        $data_base64_decoded = base64_decode($data_base64_encoded);

        //  Set File Name
        $new_file_name  = 'file_'.$rand.$extension;
        
        //  Upload Path
        $new_file_path = 'images/'.$new_file_name;
        
        $put_content = file_put_contents($new_file_path, $data_base64_decoded);

        if($put_content)
        {
            return TRUE;
        }
        
    }
    return FALSE;
}
