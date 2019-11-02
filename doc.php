<?php

require_once('d-core/load.php');
loadCore('cycle.php');
cycleStart();

loadCore('page.php');
loadCore('db.php');

putHeader();
?>
<section>
    <div class="container">
        <div data-aos="fade-up" class="row flex-column-reverse flex-md-row">
            <div class="col-md-5 d-flex align-items-center mb-3">
                <div>
                    <h2>Docs</h2>
                    <p>DeLight is self-documenting for the most part. But here's a few things that will put you on the right tracks. Feel free to contact if you have any questions or need help with something.</p>
                </div>
            </div>
            <div data-aos="fade-left" class="col-md-7 d-flex align-items-center mb-3">
                <img class="img-fluid" src="assets/images/files.svg">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="mb-5">
            <h3>Getting Started</h3>
            <ul class="list-group">
                <li class="list-group-item">Download or clone the repo from <a href="#">GitHub</a>.</li>
                <li class="list-group-item">Configure your settings in <span class="pre">d-config/core.php</span>.</li>
                <li class="list-group-item">You can now start working with DeLight.</li>
            </ul>
        </div>
        <div class="mb-5">
            <h3>Structure</h3>
            <ul class="list-group">
                <li class="list-group-item">Pages are at root</li>
                <li class="list-group-item"><span class="pre">d-config</span> - A directory for configuration files.</li>
                <li class="list-group-item"><span class="pre">d-core</span> - A directory for core file.</li>
                <li class="list-group-item"><span class="pre">d-processors</span> - A directory for form processors.</li>
                <li class="list-group-item"><span class="pre">d-partials</span> - A directory for storing partials i.e template files such as header.php.</li>
            </ul>
        </div>
        <div class="mb-5">
            <h3>Pages</h3>
            <ul class="list-group">
                <li class="list-group-item">Pages are located at root of DeLight.</li>
                <li class="list-group-item">You can refer page.draft.php as an example. </li>
                <li class="list-group-item">Each page must include
                    <span class="pre">require_once('d-core/load.php');</span> and load <span class="pre">cycle.php</span> using <span class="pre">loadCore('cycle.php')</span>.</li>
                <li class="list-group-item">A call to <span class="pre">cycleStart()</span> and <span class="pre">cycleEnd()</span> at the beginning and end of the page performs respectively scheduled tasks.</li>
                <li class="list-group-item">DeLight comes with helper <span class="pre">putHeader()</span> and <span class="pre">putFooter()</span> functions that you can import with <span class="pre">loadCore('page.php')</span>. A call to <span class="pre">putHeader()</span> and <span class="pre">putFooter()</span> (after starting cycle and before ending cycle) adds header and footer to the page.</li>
                <li class="list-group-item">You can add your page HTML or PHP content code between the header and footer.</li>
            </ul>
        </div>
        <div class="mb-5">
            <h3>Including Files and Loading</h3>
            <ul class="list-group">
                <li class="list-group-item">You can utilize PHP's in-built <span class="pre">include()</span> function.</li>
                <li class="list-group-item">DeLight has some helper constants that you utilize in <span class="pre">include()</span> like <span class="pre">ROOT</span>. For example, <span class="pre">include(ROOT . 'core/load.php')</span>. This allows for loading files with absolute paths irrespective of your current file's location.</li>
                <li class="list-group-item">Other similar constants are <span class="pre">DIR_CORE</span> which refers to <span class="pre">d-core/</span>, <span class="pre">DIR_CONFIG</span> which refers to <span class="pre">d-config/</span>. You can take a look at <span class="pre">d-config/core.php</span> to see all the path helper constants.</li>
                <li class="list-group-item">Additionally, for including functions you can utilize <span class="pre">loadFile()</span>, <span class="pre">loadCore()</span>, etc. functions from <span class="pre">d-core/load.php</span>.</li>
                <li class="list-group-item">For files like partials (template files) where you need to maintain scope, include them in <span class="pre">d-partials/</span> and then utilize <span class="pre">include(DIR_PARTIALS . 'filename.php')</span> in the file you want to import to.</li>
            </ul>
        </div>
        <div class="mb-5">
            <div class="alert alert-info">More documentation is under construction.</div>
        </div>
</section>

<?php
putFooter();
cycleEnd();
