<?php

function test_text(string $text): bool
{
    $text = htmlspecialchars($text);
    if ($text == "") {
        return false;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $text)) {
            return false;
    }
    return true;
}

function test_email(string $email): bool
{
    $email = htmlspecialchars($email);
    if ($email == "") {
        return false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

# Source - https://stackoverflow.com/a/62362445
# Posted by RShannon, modified by community. See post 'Timeline' for change history
# Retrieved 2026-10-06, License - CC BY-SA 4.0
function test_birth(string $dateString): bool
{
    $date = date('Y-m-d', strtotime($dateString));
    # Source - https://stackoverflow.com/a/62362445
    # Posted by RShannon, modified by community. See post 'Timeline' for change history
    # Retrieved 2026-10-06, License - CC BY-SA 4.0

    $age = date_diff(date_create($date), date_create('now'))->y;

    if ($age <= 18) {
        return false;
    }

    return true;
}
