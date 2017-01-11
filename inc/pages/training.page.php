<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="page-header">Training</h1>
    </div>
</div>

<div class="container">
    <div style="text-align: center;">
        <h1><img src="<?= IMGS_PATH . 'logo.jpg'; ?>" width="60" align:"left"; alt="TataLogo"> 
        RYA Approved and Accredited Training Centre 
        <img src="<?= IMGS_PATH . 'RYA_TC_Logo.gif'; ?>" width="80" align:"right"; alt="RYA Approved"></h1>
    </div>

    <p class="margin-10">
        The club is recognised by the Royal Yachting Association (RYA) as an approved training centre offering dinghy sailing, powerboat, safety boat, and 1st aid courses.
        Our instructors hold the appropriate RYA qualifications.
        Training and <a href="?page=membership" target="_blank">membership</a> of the club is open to almost anyone.
        You do not need to be employed by Tata Steel, however, you will need to join the club first before starting a training course.
        Why not visit the club on a Sunday to gain an understanding of our activities. Any of our members will be able to direct you to one of our instructors.
    </p>
</div>

<div class="container-fluid">
 
    <div class="row row-centered">
    
        <a class="smoothScroll link-unstyled pointer-hover" data-toggle="collapse" data-parent="#readMore" data-target="#sailingMore" href="#anchor">
            <div class="col-md-3 col-centered vtop rounded grey margin-10 highlight-on-hover training-option-wrapper">
                <h2 class="page-header text-center">Sailing</h2>
                <p>
                    These courses are suited for all levels of experience. Whether you are a complete beginner looking to find your sea legs, 
                    or a more experienced sailer looking to touch up your skills, you will find the courses fun and educational.
                </p>
                <p class="text-center bottom-arrow-container"><span id="arrow" class="fa fa-arrow-down"></span></p>
            </div>
        </a>
    
        <a class="smoothScroll link-unstyled pointer-hover" data-toggle="collapse" data-parent="#readMore" data-target="#racingMore" href="#anchor">
            <div class="col-md-3 col-centered vtop rounded grey margin-10 highlight-on-hover training-option-wrapper">
                <h2 class="page-header text-center">Racing</h2>
                <p>
                    "Start Racing" courses are held in June and July, and will teach you the neccecary rules you will need to know in order to take part in a sailing race.
                </p>
                <p class="text-center bottom-arrow-container"><span id="arrow" class="fa fa-arrow-down"></span></p>
            </div>
        </a>

        <a class="smoothScroll link-unstyled pointer-hover" data-toggle="collapse" data-parent="#readMore" data-target="#powerboatMore" href="#anchor">
            <div class="col-md-3 col-centered vtop rounded grey margin-10 highlight-on-hover training-option-wrapper">
                <h2 class="page-header text-center">Powerboat / First Aid</h2>
                <p>
                    RYA Powerboat / safety boat level 1 and 2 courses are held to ensure our sailing members have the necessary 
                    skills and knowledge to operate the patrol boats competently and safely.
                    The courses prepare members for their roster duties, and provide a pathway to becoming dinghy instructors.
                </p>
                <p class="text-center bottom-arrow-container"><span id="arrow" class="fa fa-arrow-down" style="width: 50px; height: 50px;"></span></p>
            </div>
        </a>

    </div>

</div>

<!-- Read More Anchor -->
<div id="anchor"></div>

<!-- Read Mores -->
<div id="readMore">
    <div class="container accordion-group">
        <!-- Sailing -->
        <div class="collapse" style="margin-bottom: 0px;" id="sailingMore">
            <h2 class="page-header">Sailing</h2>
            <p>
                A mix of classroom and water based training is practiced during the whole course, 
                commencing with a safety briefing and getting to know the dinghy. 
                The aim is to get you on the water as soon as possible.
            </p>
            <p>
                All trainees will achieve either RYA Level 1 or 2 qualifications, 
                will be able to helm a dinghy safely and competently in good conditions,
                and have the ability to make the correct decisions on the water and onshore.
            </p>
            <p>
                The sailing course covers:
                <ul>
                    <li>The correct clothing / equipment</li>
                    <li>Safety on and off the water</li>
                    <li>Understanding the weather</li>
                    <li>Ropework</li>
                    <li>Rigging and boat preparation for sailing</li>
                    <li>Sailing and tacking</li>
                    <li>Sailing terminology</li>
                    <li>The 5 essentials - boat and sail handlin</li>
                    <li>Sailing the triangular course</li>
                    <li>Basic rules of sailing</li>
                    <li>Coming alongside / pick up a mooring</li>
                    <li>Recover a man overboard</li>
                    <li>Taking a tow</li>
                    <li>Launching and landing - best approach</li>
                    <li>Capsize and recovery</li>
                    <li>An understanding of racing</li>
                </ul>
            </p>
            <h4 class="text-center"><strong><a href="<?= DOCS_PATH . 'Training_form.pdf'; ?>" target="_blank">CLICK HERE FOR THE TRAINING APPLICATION FORMS</a></strong></h4>
            <p>
                You can email a completed copy to our Training Principal (<a href="mailto:training@tatasteelsailing.org.uk">training@tatasteelsailing.org.uk</a>), 
                or bring a printed version to the sailing club.
            </p>
        </div>

        <!-- Racing -->
        <div class="collapse" style="margin-bottom: 0px;" id="racingMore">
            <h2 class="page-header">Racing</h2>
            <p>TODO: What will they learn from these 'Racing' courses</p>
        </div>

        <!-- Powerboat / First Aid -->
        <div class="collapse" style="margin-bottom: 0px;" id="powerboatMore">
            <h2 class="page-header">Powerboat / First Aid</h2>
            <p>TODO: What will they learn from these 'power boat and first aid' courses</p>
            <p>Contact our Training Principal (<a href="mailto:training@tatasteelsailing.org.uk">training@tatasteelsailing.org.uk</a>) about Powerboat and First Aid training.</p>
        </div>
    </div>
</div>

<!-- Hide collapse tabs when clicking another so only one shows at a time -->
<script>
    var $group = $('#readMore');
    $group.on('show.bs.collapse','.collapse', function() {
        $group.find('.collapse.in').collapse('hide');
    });
</script>