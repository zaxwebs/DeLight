<?php

//cycle.php defines request cycle functions
//For page cycle functions pageStart() & pageEnd() go to page.php

function cycleStart()
{
    session_start();
    loadConfig('core.php');
}

function cycleEnd()
{ }
