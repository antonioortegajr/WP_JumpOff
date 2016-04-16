add_action( 'rest_api_init', function () {
  //set up routes
    register_rest_route( 'wp_jumpoff/v1', '/example_route', array(
        'methods' => 'GET',
        'callback' => 'wp_jumpoff_function',
    ) );

} );

wp_jumpoff_function( WP_REST_Request $request ){
//return some json
return '{"example":"test"}';
}
