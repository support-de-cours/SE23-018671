<?php 

function doSomeThing(): bool 
{
    return true;
}
function doAnotherThing(): bool 
{
    return false;
}

// false ; true ; null
function doAwesomeThing(): false 
{
    return false;
}

function doAmazingThing(): ?string 
{
    // return null;
    return "azert";
}
function _doAmazingThing(): null 
{
    return null;
}