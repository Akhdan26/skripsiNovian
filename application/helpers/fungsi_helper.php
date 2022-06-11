<?php

function set_pesan($pesan, $link)
{
    echo "<script>
    alert('$pesan');
    window.location.href='http://localhost/lowker/$link';
    </script>";
}