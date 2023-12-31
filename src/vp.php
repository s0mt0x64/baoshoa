<?
  // include function libraries
  include (‘include_fns.php’);

  // get post details
  $post = get_post($postid);

  do_html_header($post[“title”]);

  // display post
  display_post($post);
 
  // if post has any replies, show the tree view of them
  if($post[‘children’])
  {
    echo “<br><br>”;
    display_replies_line();
    display_tree($expanded, 0, $postid);
  }

    do_html_footer();
?>