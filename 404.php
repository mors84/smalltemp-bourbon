<?php
    /**
 	 * Complete the meta content.
     * Warning: Install PHP 7+ or change a constant to variable in meta content.
     * Array values in define constant are allowed in PHP v7.0.0.
 	 *
 	 * @var array
	 */
    define('PAGE',
    [
        'title'         =>  'Error 404 - Page wasn\'t found',
        'description'   =>  'Sorry, that page wasn\'t found. Please enter the address to url correctly. ',
        'keywords'      =>  'error 404'
    ]);

    include('header.php');
?>



<main>

    <h1>Oops, This Page Could Not Be Found!</h1>
    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <strong>404</strong>

</main>



<?php include('footer.php'); ?>
