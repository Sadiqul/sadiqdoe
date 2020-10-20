<?php

$cmd = $_REQUEST['cmd'];
   switch($cmd)
   {
   
    case "details":
	             	$info["table"] = "first_page_comments";
					$info["fields"] = array("first_page_comments.*"); 
					$info["where"]   = "1 AND status='active' Order by id DESC";
					
					$arr =  $db->select($info);
					include("files_body/details.php");
  
           break;
	 case "tv_program":
	 				
					include("files_body/tv_program.php");	
             break;
      case "awareness_video":
	 				
					include("files_body/awareness_video.php");	
             break;		  
	     	
  case "report":
	 				$info["table"] = "acts_order";
				    $info["fields"] = array("acts_order.*"); 
				    $info["where"]   = "1 AND id='".$_REQUEST['id']."'";
					$arr =  $db->select($info);
					//var_dump($arr);
					include("files_body/acts_order.php");  
           break; 
	case "news":
		    include("files_body/news.php");
           break;
	case "statistics":
		   include("files_body/statistics.php");
           break;
	case "acts_order":
		   include("files_body/acts_order.php");
           break;	   	
	case "public":
		   include("files_body/public.php");
           break;
	case "tender":
		   include("files_body/tender.php");
           break;	
	case "publication":
		   include("files_body/publication.php");
           break;		      		      	
	case "news_details":
		   include("files_body/news_details.php");
           break;	 
 			
   case "profile":
		   include("files_body/profile.php");
           break;	
    case "photo_gallery":
		   include("files_body/gallery.php");
           break;
 		
	case "contact_us":
			 include("files_body/contact_us_editor.php");
		   break;	      
	case "add_contact_us":
				$info['table']    = "contact_us";
				$data['fullname']   = $_REQUEST['fullname'];
                $data['emailaddress']   = $_REQUEST['emailaddress'];
                $data['phone']   = $_REQUEST['phone'];
                $data['subject']   = $_REQUEST['subject'];
                $data['message']   = $_REQUEST['message'];
				
				$info['data']     =  $data;
				
				if(empty($_REQUEST['id']))
				{
					 $db->insert($info);
				}
				else
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
		   include("files_body/contact_us_success.php");
		   break;	
	case "project":
			 include("files_body/project.php");
		   break;	
	case "ccie_offices":
			 include("files_body/ccie_offices.php");
		   break;		      	         
	
	default:	               
	        	
					include("files_body/home.php");  
          
   }
?>
            