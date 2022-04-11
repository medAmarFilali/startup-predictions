<?php

if( ! class_exists( 'STRT_Pre_init' ) ){
    class STRT_Pre_init{

        public function __construct(){

            add_action( 'init', array( $this, 'init' ) );
        }

        public function init(){
            
        }

    }
}