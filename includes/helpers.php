<?php

function print_d(array | object $data, string $title = '') :void
{
  $data_style = 'margin: 0 0 20px; font-family: sans-serif; font-size: 12px; white-space: pre; color: #941adf;';

  $title_style = 'margin: 10px 0; font-family: sans-serif; font-size: 12px; color: #00c900;';

  if ($title) {
    $data_style .= 'padding: 0 0 0 15px;';

    echo "<p style='$title_style'>$title</p>";
  }

  echo "<div style='$data_style'>" . print_r($data, true) . "</div>";
}
