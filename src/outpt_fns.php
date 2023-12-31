<?php
function display_tree($expanded, $row = 0, $start = 0)
{
  // display the tree view of conversations
  global $table_width;
  echo “<table width = $table_width>”;

  // see if we are displaying the whole list or a sublist
  if($start>0)
    $sublist = true;
  else
    $sublist = false;

  // construct tree structure to represent conversation summary
  $tree = new treenode($start, ‘’, ‘’, ‘’, 1, true, -1, $expanded, $sublist);

  // tell tree to display itself
  $tree->display($row, $sublist);

  echo “</table>”;
}