<?php
// Usage example:
// include "components/buttons.php";
// echo primaryButton("Login");

function primaryButton($label)
{
    return '
        <button class="primary-btn">
            ' . htmlspecialchars($label) . '
        </button>
    ';
}

function outlineButton($label)
{
    return '
        <button class="outline-btn">
            ' . htmlspecialchars($label) . '
        </button>
    ';
}
?>
