<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

require "Smarty/Smarty.class.php";

/**
 *
 *
 * @file system/application/libraries/Mysmarty.php
 */
class Mysmarty extends Smarty
{
    function Mysmarty() {
        parent::__construct();
        $config =& get_config();
        // absolute path prevents "template not found" errors
        $this->template_dir = ( !empty( $config['smarty_template_dir'] ) ? $config['smarty_template_dir'] : APPPATH . 'views/' );
        $this->compile_dir  = ( !empty( $config['smarty_compile_dir'] ) ? $config['smarty_compile_dir'] : APPPATH . 'cache/' );
        $this->fetch_dir  = ( !empty( $config['smarty_compile_dir'] ) ? $config['smarty_compile_dir'] : APPPATH . 'cache/' );
        $this->force_compile = false;
        // $this->debugging = true;
        $this->error_reporting = E_ALL & ~E_NOTICE;
        $this->compile_check = true;
        $this->caching = false;
        $this->cache_lifetime = 50;
        $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';
        $public_path = $config['base_url'] .APPPATH. "public";

        $this->assign( "public_css", $public_path . "/css" );
        $this->assign( "public_js", $public_path . "/js"  );
        $this->assign( "base_url", $config['base_url'] );
        
        //use CI's cache folder

        if ( function_exists( 'site_url' ) ) {
            // URL helper required
            $this->assign( "site_url", site_url() ); // so we can get the full path to CI easily
        }
    }
    
    // function fetch($filename){
    //     return parent::fetch($this->fetch_dir.$filename);
    // }
    /**
     *
     *
     * @param unknown $resource_name string
     * @param unknown $params        array holds params that will be passed to the template
     * @desc loads the template
     */
    function display( $resource_name, $params = array() ) {
        if ( strpos( $resource_name, '.' ) === false ) {
            $resource_name .= '.html';
        }

        if ( is_array( $params ) && count( $params ) ) {
            foreach ( $params as $key => $value ) {
                $this->assign( $key, $value );
            }
        }

        // check if the template file exists.
        if ( !is_file( $this->template_dir . $resource_name ) ) {
            show_error( "template: [$resource_name] cannot be found." );
        }

        return parent::display( $resource_name );
    }
} // END class smarty_library
?>
