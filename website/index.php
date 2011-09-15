<?php
include('header.php');
require_once('memcache.php');

if(file_exists('server_message.html')) {
    //Used to convey a message on the front page
    include('server_message.html');
}

?>

<!--<MarkdownReplacement with="competition.md">-->

<h1>CIS99 Ants Test Server</h1>

<p>Welcome to the CIS99 Ants test server. Here is what you need to do
to participate:</p>

<ul> 

<li>First, <a href="register.php">create your account.</a> Enter in
your SEAS account name for username.  </li>

<li>Once you register, you will need to activate the account by
clicking the link provided in the confirmation page.</li> 

<li>Finally, <a href="login.php">login</a> to your account and click
<a href="submit.php">upload</a> to upload your bot as described in the
course materials.</li> </ul>

 <!--</MarkdownReplacement>-->

<p>Latest Game Replay:</p>
<?php
    $last_game_id = 0;
    if ($memcache)
        $last_game_id = $memcache->get('last_game_id');
    if (!$last_game_id) {
        $last_game_id = 0;
    }
    include 'visualizer_widget.php';
    visualize_game($game_id=strval($last_game_id),false,550,550);
?>

<?php include 'footer.php'; ?>
