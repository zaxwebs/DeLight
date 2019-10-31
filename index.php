<?php

require_once('d-core/load.php');
loadCore('cycle.php');
cycleStart();

loadCore('page.php');
loadCore('flash.php');
putHeader(null, false);
?>
<section>
    <div class="container">
        <div data-aos="fade-up" class="row flex-column-reverse flex-md-row">
            <div class="col-md-5 d-flex align-items-center mb-3">
                <div>
                    <h2>A Procedural<br />PHP<br />Framework</h2>
                    <p class="pb-4">
                        A compact PHP 7 pretty-procedural framework offering a foundation for quickly building lightweight apps.<br />
                        DeLight is aimed at being flexible and easy to pick up, perfect to get you up and running in no time.<br />
                    </p>
                    <a class="btn btn-primary mb-2" href="#">Download via GitHub</a> <a class="btn btn-secondary mb-2" href="doc.php">Documentation</a>
                </div>
            </div>
            <div data-aos="fade-left" class="col-md-7 d-flex align-items-center mb-3">
                <img class="img-fluid" src="assets/images/rocket.svg">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="row">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="col-md-6 d-flex align-items-center mb-3">
                <img class="img-fluid" src="assets/images/think.svg">
            </div>
            <div class="col-md-6 d-flex align-items-center mb-3">
                <div>
                    <h2>The Motivation</h2>
                    <p>
                        Most of the frameworks today are object-oriented. And there's a reason for that, object oriented programming brings in goodies like abstraction, inheritance, polymorphism, encapsulation, etc. However, sometimes using object oriented programming requires more effort than it’s worth. The simplicity of procedural combined with the structure of a framework can help save time and cost.
                        <br />
                        Quite a lot of PHP developers start off procedural and can only use frameworks until after they are somewhat efficient in object-oriented. While they work on the switch, offering the benefits that come from the foundations of a framework would be beneficial to the them.<br />
                        These are the two major motives behind DeLight.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="row flex-column-reverse flex-md-row">
            <div class="col-md-6 d-flex align-items-center mb-3">
                <div>
                    <h2>Pretty Procedural</h2>
                    <p>
                        Procedural but not entirely. You are free to go or blend in object-oriented if you need to. In fact, DeLight itself relies on a few things OOP (like PDO). But it offers handy wrapper functions for utilizing most of them.
                    </p>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="col-md-6 d-flex align-items-center mb-3">
                <img class="img-fluid" src="assets/images/process.svg">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="row">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="col-md-6 d-flex align-items-center mb-3">
                <img class="img-fluid" src="assets/images/open-source.svg">
            </div>
            <div class="col-md-6 d-flex align-items-center mb-3">
                <div>
                    <h2>Open Source</h2>
                    <p>
                        DeLight is hosted on <a href="#">GitHub</a> and is licensed under the MIT license. The philosophy is to to simplify quite a lot of tasks with a delightful usage interface. If you have ideas and/or implementations to add to DeLight you are invited to do so.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
putFooter();
cycleEnd();
