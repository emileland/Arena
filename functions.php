<?php

function redirectTOUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}