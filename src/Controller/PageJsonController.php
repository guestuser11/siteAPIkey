<?php
/**
 * @file
 * Contains \Drupal\site_api_key\Controller\PageJsonController.
 */
namespace Drupal\site_api_key\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller for the Node JSON
 */
 
class PageJsonController extends ControllerBase{
	public function json_page_node($site_api_key, $nid){
		$site_api_key_res= \Drupal::config('site_api_key.settings')->get('key'); 
		if($site_api_key !== $site_api_key_res){
			$msg = 'Access Denied';
			return new JsonResponse($msg);			 
		}
		
		$node = Node::load($nid);
		
		if( !empty($node) && $node->getType() === 'page' ){
            $title = $node->getTitle();
            $body = $node->body->getString();
            $type = $node->getType();

        // Prepare JSON response.
        $res = array(
        'Node ID' => $nid,
        'Title' => $title,
        'Body' => $body,
        'Type' => $type,
        );

        // Return the JSON Response.
        return new JsonResponse($res);
        }
		 
	}
	 
 }
 
 ?>