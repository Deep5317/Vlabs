<?php
require_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Engineering Virtual Lab | Team</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mainPage.css" />
    <link rel="stylesheet" href="./css/teams.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/vlabLogo-main1.png" />
</head>

<body class="fade-in-image">
    <header>
        <div class="banner">
            <div class="banner-column">
                <div class="logo">

                </div>
                <div class="col-name">

                </div>
            </div>
            <div class="vlab-logo">

            </div>
        </div>
        <div class="nav">
            <a class="nav-content" href="./index.php">Home</a>
            <a class="nav-content" href="./index.php#objective">Objectives</a>
            <a class="nav-content" href="./index.php#vlab">VLabs</a>
            <a class="nav-content" href="./index.php#about">About</a>
            <a class="nav-content" href="./team.php">Team</a>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 0) {
            ?>
                <a class="nav-content" href="logout.php">Logout</a>
                <!-- <a class="nav-content"><?php echo "Hello, " . $_SESSION['email']
                                            ?></a> -->
            <?php
            } else if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 1) { ?>
                <a class="nav-content" href="./feedback.php">View Feedback</a>
                <a class="nav-content" href="./writeups.php">View Writeups</a>
                <a class="nav-content" href="logout.php">Logout</a>
                <!-- <a class="nav-content"><?php echo "Hello, " . $_SESSION['email']
                                            ?></a> -->
            <?php } else {
            ?>
                <a class="nav-content" href="login.php">Log In/Sign Up</a>
            <?php
            }
            ?>
        </div>
    </header>

    <div class="dum-body">

    </div>


    <div class="head-ing ">
        <h1 style="width: 100%; text-align:center;">Meet Our Team<br></h1>
    </div>
    <div class="center-align">
        <div class="row row-img filter-btn-row">
            <div class="col-lg-12">
                <!-- <a data-filter="all" class="btn btn-blue filter-btn selected">All</a> -->
                <a data-filter="POV" class="btn btn-blue filter-btn selected">Patrons of VLabs</a>
                <a data-filter="Technical" class="btn btn-blue filter-btn">Technical</a>
                <a data-filter="Mentors" class="btn btn-blue filter-btn">Mentors</a>
                <a data-filter="WebsiteTeam" class="btn btn-blue filter-btn">Website Team</a>
                <a data-filter="ExperimentTeam" class="btn btn-blue filter-btn">Experiment Team</a>

                <!-- <a data-filter="Mentors" class="btn btn-blue filter-btn">Mentors</a> -->
            </div>
        </div>
    </div>

    <div class="head-ing card" data-filter="POV">
        <h2>Patrons of VLabs<br></h2>
    </div>

    <section class="container card" data-filter="POV">
        <div class="center-align">
            <div class="row row-img active-with-click center-align">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Dr. Bhavesh Patel</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Principal
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/bhaveshpatel.png">
                            </div>
                            <div class="mc-description" style="padding-top: 40%;">
                                Principal, Shah & Anchor Kutcchi Engineering College
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/profbhaveshpatel" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:aruna.sharma@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="center-align">
            <div class="row row-img active-with-click center-align">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Prof. Abdul Wajid Khan</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                F.E. Incharge
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/abdul-wajid-khan.png">
                            </div>
                            <div class="mc-description" style="padding-top: 40%;">
                                First Year Engineering Incharge, Shah & Anchor Kutcchi Engineering College
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/abdul-wajid-khan-0036127a/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:registrar@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Prof. Aruna Sharma</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                F.E. Deputy Incharge
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/aruna.png">
                            </div>
                            <div class="mc-description" style="padding-top: 40%;">
                                First Year Engineering Deputy Incharge, Shah & Anchor Kutcchi Engineering College
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/aruna-sharma-1aa66834/?originalSubdomain=in" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:aruna.sharma@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Dr. Nilakshi Jain</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Research Cell Chair Person
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Nilakshi Jain.png">
                            </div>
                            <div class="mc-description" style="padding-top: 40%;">
                                Research Cell Chair Person, Shah & Anchor Kutcchi Engineering College
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/dr-nilakshi-jain-7593a264/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:nilakshi.jain@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <div class="head-ing card" data-filter="Technical">
        <h2>Technical Team<br></h2>
    </div>
    
    <section class="container card" data-filter="Technical">
        <div class="center-align">
            <div class="row row-img active-with-click">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Jugal Gala</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Mentor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Jugal Gala.png">
                            </div>
                            <div class="mc-description">
                                I am a natural leader and always passionate about my work. Because I love what I do, I demonstrate a passion and creativity that is much appreciated by my colleagues and clients. I am looking for stimulating opportunities where I can fully use my skills
                                for the success of the organization.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/jugalgalaxyz" class="fa fa-fw fa-github"></a>
                                    <a href="https://twitter.com/jugalgalaxyz" class="fa fa-fw fa-twitter"></a>
                                    <a href="mailto:jugal.gala@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Atik Mujawar</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Executive
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/atik mujawar.png">
                            </div>
                            <div class="mc-description">
                                I constantly strive to be the best version of myself and to uplift the people I work with.
                                I'm a fast learner and can take any challenges with creativity and hard work.
                                Learning for better understanding in the technologies and looking forward to learn and contribute
                                in IT world

                                <div class="card-footer center-align">
                                    <a href="https://github.com/Atik-Mujawar" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/atik-mujawar" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:atikmujawar92@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Rummaan Ahmad</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Architect
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Rummaan.png">
                            </div>
                            <div class="mc-description">
                                I'm the kind of person who knows how to execute difficult tasks with precision. I pay attention to all the details of a project. I make sure that every task is just right and that it is completed in a timely manner.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/Rummaan" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/rummaan-ahmad-b742041b6/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:rummaanzahmad@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Dilipkumar Teli</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Executive
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Dilipkumar_Teli.png">
                            </div>
                            <div class="mc-description">
                                I constantly strive to be the best version of myself and to uplift the people I work with.
                                I'm a fast learner and can take any challenges with creativity and hard work.
                                Learning for better understanding in the technologies and looking forward to learn and contribute
                                in IT world

                                <div class="card-footer center-align">
                                    <a href="https://github.com/dilip1106" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/dilipkumarteli" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:dilipteli38@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Deep Adak</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Executive
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Deep_Adak.png">
                            </div>
                            <div class="mc-description">
                                I constantly strive to be the best version of myself and to uplift the people I work with.
                                I'm a fast learner and can take any challenges with creativity and hard work.
                                Learning for better understanding in the technologies and looking forward to learn and contribute
                                in IT world

                                <div class="card-footer center-align">
                                    <a href="https://github.com/Deep5317" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/deep-adak" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:deep.adak90@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Sachin Singh</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Backend Lead
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/sachinFormal.png">
                            </div>
                            <div class="mc-description">
                                I'm a creative thinker. I like to explore alternative solutions to problems, and I have an open mind about what will work best. My creativity has made me an effective team leader because I can anticipate problems and innovate solutions.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/sachin26240" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/sachin26240" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:sachin26240@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Shivam Prajapati</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Backend Co-Lead
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Shivam.png">
                            </div>
                            <div class=" mc-description ">
                                I'm a Software Developer with industry experience building web applications. My aim is to associate with a progressive organization that will provide me a platform to update my knowledge, skills in accordance with the latest trends & want to be a part
                                of active team that dynamically works towards the growth of the organization.
                                <br>
                                <div class="card-footer center-align">
                                    <a href="https://github.com/shivamsprajapati13 " class="fa fa-fw fa-github "></a>
                                    <a href="https://www.linkedin.com/in/shivam-prajapati-aa6a101aa " class="fa fa-fw fa-linkedin "></a>
                                    <a href="mailto:shivamsprajapati13@gmail.com" class="fa fa-fw fa-google-plus "></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action ">
                            <i class="fa fa-bars "></i>
                        </a>

                    </article>
                </div>



                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Himanshu Mukane</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Creative Director
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/himanshu mukane.png">
                            </div>
                            <div class="mc-description">
                                I am passionate about my work. Because I love what I do, I have a steady source of motivation that drives me to do my best. In my last job, this passion led me to challenge myself daily and learn new skills that helped me to do better work.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/HimanshuMukane" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/himanshu-mukane-998644215/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:himanshupm18@gmail.com " class="fa fa-fw fa-google-plus"></a>

                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Prathamesh Rane</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Creative Director
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/PRATHAMESH DINESH RANE.png">
                            </div>
                            <div class="mc-description">
                                I am a Frontend Web Developer and a UI Designer Who have the ability to positively work with my team and help establish new interest in the company. I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I'm not
                                comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/prathameshrane08" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/prathamesh-rane-907213192" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:prathamesh.r2018@gmail.com  " class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Yashika Shetty</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Administrator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/YASHIKA_SHETTY.png">
                            </div>
                            <div class="mc-description">
                                I am Yashika Shetty. I am a Web Developer, UI Designer and Content Creator who blends the best of design and writing into compelling and engaging content. I have played various roles as a Research Intern, Graphic Designer, and Ethical Hacker. I believe
                                in trying my best today, for a better tomorrow. Determination, Dedication, and Desperation are the 3Ds to success.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/Yashika-Shetty" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/yashika-shetty-0aa2771a9/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:yashikashetty15@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Eashwari Nagarkar</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Project Administrator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Eashwari_Nagarka.png">
                            </div>
                            <div class="mc-description">
                                I'm a natural leader. I've eventually been promoted to a leadership role in almost every job because I like to help people. I find co-workers usually come to me with questions or concerns even when I'm not in a leadership role because if I don't know
                                the answer, I will at least point them in the right direction.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/eashwari15" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/eashwari-nagarkar-105846215/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:eashunagarkar15@gmail.com " class="fa fa-fw fa-google-plus"></a>


                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Vishab Julka</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EP-I Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/VISHAB_JULKA.png">
                            </div>
                            <div class="mc-description">
                                I'm an aspiring web developer who would describe myself as performance focused,growth oriented and adaptable.
                                <div class="card-footer center-align">
                                    <a href="github.com/VishabJulka/" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/vishab-julka-135a151aa/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:vishab.julka_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ishita Patel</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EP-I Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Ishita_Patel.png">
                            </div>
                            <div class="mc-description">
                                I am a very ambitious individual who is very curious and eager to explore new technologies. I describe myself as a passionate web developer who loves coding and learning new things. My career objective is to utilize my technical skills to make an organization
                                successful.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/ishita1822" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/ishita-patel-6b99191a7/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:ishitapatel628@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Prutha Kudtarkar</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EC-I Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Prutha_Kudtarkar.png">
                            </div>
                            <div class="mc-description">
                                I'm a front-end web developer and UI designer, and I can actively work with my team to bring new interest to the company. I'm not good at calming down and I"m always looking for opportunities to do better and achieve greatness.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/Prutha11" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/prutha-kudtarkar" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:prutha.kudtarkar_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Ishita Sharma</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EC-I Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/ISHITA_SHARMA.png">
                            </div>
                            <div class="mc-description">
                                I am passionate Computer Engineering Student with robust coding, problem-solving and development skills. I aim to develop myself in a way that allows me to have equal shares of technical and non technical skills.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/Ishita11094" class="fa fa-fw fa-github"></a>
                                    <a href="linkedin.com/in/ishita-sharma-2b1a151aa" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:ishita11094@gmail.com" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Yogi Patil</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EM Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/YOGI_PATIL.png">
                            </div>
                            <div class="mc-description">
                                I'm a UI Designer and Front End Developer
                                I enjoy taking complex problems and turning them into simple and beautiful interface designs, I also love the logic and structure of coding and always strive to write elegant and efficient code, whether it be HTML. CSS or jQuery.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/ypatilgithub" class="fa fa-fw fa-github"></a>
                                    <a href="www.linkedin.com/in/yogi-patil-368292208" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:yogi.patil_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Omkar Rakshe</span>
                            <strong>

                                BEE Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Omkar_Rakshe.png">
                            </div>
                            <div class="mc-description">
                                I am a Student who is interested in learning and understanding of Web Development and basics of python. Motivated to learn new things and implementing it. I display both passion and creativity that are highly regarded by my colleagues as well as clients.
                                <div class="card-footer center-align">
                                    <a href="https://github.com/OMKARR10" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/omkar-rakshe-5b8292217/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:omkar.rakhse_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

            </div>
        </div>
        <div class="center-align">
            <div class="row row-img active-with-click center-align">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Satyam Gupta</span>
                            <strong>

                                BEE Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/SATYAM_GUPTA.png">
                            </div>
                            <div class="mc-description">
                                I'm Aspiring web development and a student. I am always ready to have new experiences, meet new people and learn new things. I like both software and hardware.
                                <div class="card-footer center-align">
                                    <a href="https:github.com/sgupta490" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/satyam-gupta-b472441b1" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:satyam.gupta_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Satyam Jagdale</span>
                            <strong>

                                BEE Simulation Developer
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Satyam_Jagdale.png">
                            </div>
                            <div class="mc-description">
                                I'm Satyam Jagdale, a student Looking/open for internship in core electronics domains like VLSI, Embedded Systems, RTOS, VHDL, SoC, CDMA/OFDMA, RTL Design, FPGA Development etc.
                                <div class="card-footer center-align">
                                    <a href="https:github.com/satyamjagdale" class="fa fa-fw fa-github"></a>
                                    <a href="https://www.linkedin.com/in/satyam-jagdale25" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:satyam.jagdale_19@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

            </div>
        </div>
    </section>



    <div class="head-ing card" data-filter="Mentors">
        <h2>Mentors<br></h2>
    </div>

    <section class="container card" data-filter="Mentors">
        <div class="center-align">
            <div class="row row-img active-with-click">


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Dr. Namrata Kkommineni</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                VLabs Project Incharge, <br>EP-I VLabs Co-ordinator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Namrata_Manglani.png">
                            </div>
                            <div class="mc-description">
                                14 years of teaching experience coupled with 6 years of research experience. Ph. D in Theoretical High Energy Particle Physics, University Department of Physics Mumbai University. I am very passionate about teaching and enjoy teaching intricate problems in a simple manner.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/dr-namrata-manglani-468a9135/?originalSubdomain=in" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:namrata.manglani@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Pink">
                            <h2>
                                <span>Dr. Sushma Srivastava</span>
                                <strong>
                                    <!-- <i class="fa fa-fw fa-star"></i> -->
                                    Associate Professor
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="./images/team-img/Sushma_Srivastava.png">
                                </div>
                                <div class="mc-description">
                                    My areas of interest and specialization are in the field of Physics (Electronics), Microelectronics and VLSI, Neuromorphic Engineering.
                                    <div class="card-footer center-align">
                                        <a href="https://www.linkedin.com/in/sushma-srivastava-b538671a8?originalSubdomain=in" class="fa fa-fw fa-linkedin"></a>
                                        <a href="sushma.srivastava@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                    </div>
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                        </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Dr. Archana Nath</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EC-I VLabs Co-ordinator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Archana_Nath.png">
                            </div>
                            <div class="mc-description">
                                Ph. D - Biosensor based on conducting polymer.
                                <br>Publication in National Journal-1, Publication In International Journal-3, Teaching experience- 12 years, Area Of Interest: Conducting Polymer, Development of Sensors and Nanotechnology, Innovative Teaching and Learning Methodologies
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/archana-nath-61a568143/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BJrI6lI5aRsSXibrZdMOjxw%3D%3D" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:archana.nath@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>

                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Ms. Anita Nalawade</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                BEE VLabs Co-ordinator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Anita_Nalawade.png">
                            </div>
                            <div class="mc-description">
                                I am a dynamic professor as I am capable of managing and handling task easily and finish it successfully.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/anita-nalawade-5317831a8" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:anita.nalawade@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Ms. Jayashree Dhawale</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                EM VLabs Co-ordinator
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Jayashri_Khose.png">
                            </div>
                            <div class="mc-description">
                                Assistant Professor. 10 years experience in teaching. M.E. in Civil Engineering. Published two international papers.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/jayashree-dhawale-14685122a" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:jayashri.khose@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Dr. Smita Srivastava</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Smita_Srivastava.png">
                            </div>
                            <div class="mc-description">
                                I am Dr. Smita Srivastava working assistant professor in Engineering Physics.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/smita-srivastava-5b7a101aa/?originalSubdomain=in" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:smita.srivastava@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Amber">
                        <h2>
                            <span>Ms. Neelam Jagtap</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/NEELAM_JAGTAP.png">
                            </div>
                            <div class="mc-description">
                                Passionate about learning and dissemination of information. Good at teamwork and communication.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/neelam-jagtap-96b492138" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:neelam.jagtap@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Mr. Swapnil More</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Swapnil_More.png">
                            </div>
                            <div class="mc-description">
                                Assistant Professor, Shah & Anchor Kutcchi Engineering College, Chembur
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/swapnil-more-b6653b60" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:swapnil.more@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Brown">
                        <h2>
                            <span>Mr. Abhay Nichite</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Abhay-Nichite.png">
                            </div>
                            <div class="mc-description">
                                B.E. Mechanical, M.E. (CAD/CAM & Robotics), Experience - 11 years, Area of Interest - Machine Design & Finite Element Analysis, I like to learn new technologies. I am passionate for teaching.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/abhay-nichite-110a721aa" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:abhay.nichite@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span>Ms. Pooja Polshetwar</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Pooja_Duddalwar.png">
                            </div>
                            <div class="mc-description">
                                Teaching Experience: 8.5 Years, Published Papers in International Journal and Conference. Organized Summer Internship on Design-E-Mania for Students in SAKEC , Summer Internship on System and Network Administration in December 2018. Received Instructor
                                Badge for Python from star certification.

                                <div class="card-footer center-align">
                                    <a href="http://www.linkedin.com/in/pooja-polshetwar-65452922" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:pooja.duddalwar@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ms. Manya Gidwani</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="././images/team-img/Manya_Gidwani.png">
                            </div>
                            <div class="mc-description">
                                I am currently pursuing a Ph.D. from NMIMS University Mumbai and working as an Assistant Professor in the Information Technology Department at Shah And Anchor Kutchhi Engineering College.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/manya-gidwani-4360251b1" class="fa fa-fw fa-linkedin"></a>
                                    <a href="mailto:manya.gidwani@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ms. Vaishali Chavan</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Vaishali_Chavan.png">
                            </div>
                            <div class="mc-description">
                                Assistant Professor, Technical Mentor, Shah & Anchor Kutcchi Engineering College, Chembur
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/vaishali-chavan-879a90218" class="fa fa-fw fa-linkedin"></a>
                                    <a href="vaishali.chavan@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ms. Madhura Pednekar</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Madhura_Pednekar.png">
                            </div>
                            <div class="mc-description">
                                13 years of teaching experience. Area of Interests: Software Programming, IOT, Embedded System, Microprocessors and Microcontrollers, Basic Electronics.
                                Mentored Projects: Deep Blue and Smart India Hackathon, Avishkar Research Convention.
                                2 International publications, 1 National Publication and 1 Copyright.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/madhura-pednekar-79a7861a8/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="madhura.pednekar@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                
            </div>
        </div>


    </section>

    <div class="head-ing card" data-filter="WebsiteTeam">
        <h2>Website Team<br></h2>
    </div>

    <section class="container card" data-filter="WebsiteTeam">
        <div class="center-align">
            <div class="row row-img active-with-click center-align">


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ms. Jalpa Mehta</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Jalpa_Mehta.png">
                            </div>
                            <div class="mc-description">
                                1. Working as nodal center coordinator for setting up Nodal Center of virtual Labs(An MHRD Govt. of India Initiative) at the Institute.<br> 2.working as coordinator for Institute Website Development
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/jalpa-mehta-45917a194/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="jalpa.mehta@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Mr. Atul Haribhau Kachare</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Atul_Haribhau_Kachare.png">
                            </div>
                            <div class="mc-description">
                                Assistant Professor, Shah & Anchor Kutcchi Engineering College, Chembur.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/atul-kachare-7692a9110" class="fa fa-fw fa-linkedin"></a>
                                    <a href="atul.kachare@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


            </div>
        </div>
    </section>

    <div class="head-ing card" data-filter="ExperimentTeam">
        <h2>Experiment Teams<br></h2>
    </div>

    <section class="container card" data-filter="ExperimentTeam">
        <div class="center-align">
            <div class="row row-img active-with-click center-align">


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Ms. Jalpa Mehta</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Jalpa_Mehta.png">
                            </div>
                            <div class="mc-description">
                                1. Working as nodal center coordinator for setting up Nodal Center of virtual Labs(An MHRD Govt. of India Initiative) at the Institute.<br> 2.working as coordinator for Institute Website Development
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/jalpa-mehta-45917a194/" class="fa fa-fw fa-linkedin"></a>
                                    <a href="jalpa.mehta@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Pink">
                        <h2>
                            <span>Mr. Atul Haribhau Kachare</span>
                            <strong>
                                <!-- <i class="fa fa-fw fa-star"></i> -->
                                Assistant Professor
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="./images/team-img/Atul_Haribhau_Kachare.png">
                            </div>
                            <div class="mc-description">
                                Assistant Professor, Shah & Anchor Kutcchi Engineering College, Chembur.
                                <div class="card-footer center-align">
                                    <a href="https://www.linkedin.com/in/atul-kachare-7692a9110" class="fa fa-fw fa-linkedin"></a>
                                    <a href="atul.kachare@sakec.ac.in" class="fa fa-fw fa-google-plus"></a>
                                </div>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                    </article>
                </div>


            </div>
        </div>
    </section>






    <section>
        <footer id="footer " class="section bg-footer ">
            <div class="container center-align">
                <div class="row ">
                    <div class="col-lg-3 ">
                        <div class=" ">
                            <h6 class="footer-heading text-uppercase ">Virtual Labs</h6>
                            <ul class="list-unstyled footer-link mt-4 ">
                                <li>Shah & Anchor Kutchhi Engineering College</li>
                                <li>Mahavir Education Trust Chowk, W. T. Patil Marg, Near Dukes Company, Chembur, Mumbai- 400 088.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 ">
                        <div>
                            <h6 class="footer-heading text-uppercase text-white ">Important Links</h6>
                            <ul class="list-unstyled footer-link mt-4 ">
                                <li>
                                    <a href="# ">Home</a>
                                </li>
                                <li>
                                    <a href="#objective ">Objectives</a>
                                </li>
                                <li>
                                    <a href="#vlab ">VLabs</a>
                                </li>
                                <li>
                                    <a href="#about ">About</a>
                                </li>
                                <li>
                                    <a href="login.php ">Login In/Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 ">
                        <div>
                            <h6 class="footer-heading text-uppercase text-white ">VLabs</h6>
                            <ul class="list-unstyled footer-link mt-4 ">
                                <li><a href="./list.php?subID=1 ">EP-I</a></li>
                                <li><a href="./list.php?subID=2 ">EC-I</a></li>
                                <li><a href="./list.php?subID=3 ">EM</a></li>
                                <li><a href="./list.php?subID=4 ">BEE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div>
                            <h6 class="footer-heading text-uppercase ">Contact Us</h6>
                            <p class="list-unstyled mt-4 ">Contact us if need help with anything</p>
                            <form action="" method="POST">
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Your Name">
                                </div>
                                <div class="mb-3 form-group">
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Your Email">
                                </div>
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="mb-3 form-group">
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Query"></textarea>
                                </div>
                                <button type="submit" name="contactUs" class="mb-2 btnp">Send Message</button>
                            </form>
                            <?php

                            use PHPMailer\PHPMailer\PHPMailer;
                            use PHPMailer\PHPMailer\SMTP;
                            use PHPMailer\PHPMailer\Exception;

                            if (isset($_POST["contactUs"])) {
                                // session_start();
                                // username and password sent from form 
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $message = $_POST['message'];

                                $sqlm = "INSERT INTO `query`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
                                mysqli_query($db, $sqlm);

                                require 'phpmailer/vendor/autoload.php';

                                //Create an instance; passing `true` enables exceptions
                                $mail = new PHPMailer(true);

                                try {
                                    //Server settings
                                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
                                    $mail->SMTPDebug = 0;                      //Enable verbose debug output
                                    $mail->isSMTP();                                            //Send using SMTP
                                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                    $mail->Username   = 'vlabs@sakec.ac.in';                     //SMTP username //EmailID
                                    $mail->Password   = 'Sakec@123';                               //SMTP password //Email passsword
                                    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                                    //Recipients
                                    $mail->setFrom('vlabs@sakec.ac.in', 'VLabs-Queries');
                                    $mail->addAddress($email, $name);     //Add a recipient
                                    //Content
                                    $mail->isHTML(true);                                  //Set email format to HTML
                                    $mail->Subject = $subject;
                                    $mail->Body    = $message;
                                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                    if ($mail->send()) {
                                        echo "<script>alert('Your message has been send. Thank you!');window.location='index.php';</script>";
                                    } else {
                                        echo '<script>alert(\'Your message has not send. Thank you!\');</script>';
                                    }
                                } catch (Exception $e) {
                                    echo '<script>document.getElementById("error-message").innerHTML=\'Your message has been not sent. Thank you!\';</script>';
                                }
                            }
                            ?>
                            <br>
                            <!-- Add number College -->
                            <p class="list-unstyled ">022-25580854</p>
                            <div class="mt-5 ">
                                <ul class="list-inline ">
                                    <li class="list-inline-item "><a href="https://www.facebook.com/shahanchor/ "><i class="fab facebook footer-social-icon fa-facebook-f "></i></i></a></li>
                                    <li class="list-inline-item "><a href="http://www.twitter.com/sakectweets "><i class="fab twitter footer-social-icon fa-twitter "></i></i></a></li>
                                    <li class="list-inline-item "><a href="https://www.youtube.com/channel/UCOjw5lBtEGWWDwiW1_x_yxw "><i class="fab youtube footer-social-icon fa-youtube "></i></i></a></li>
                                    <li class="list-inline-item "><a href="https://www.instagram.com/sakec_chembur/ "><i class="fab instagram footer-social-icon fa-instagram "></i></i></a></li>
                                    <li class="list-inline-item "><a href="https://www.linkedin.com/school/13290638/ "><i class="fab Linkedin footer-social-icon fa-linkedin "></i></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 ">
                <p class="footer-alt mb-0 f-14 ">© Shah & Anchor Kutchhi Engineering College.</p>
            </div>
        </footer>
    </section>
</body>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="./index.js "></script>
<script src="./js/teams.js "></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script id="rendered-js">
    $(document).ready(function() {

        /*FILTER/CARDS PAGES JS************************************/
        var filterBtns = $('.filter-btn');
        var cards = $('.card');
        document.getElementsByClassName("card")[2].style.display = "none"
        document.getElementsByClassName("card")[3].style.display = "none"
        document.getElementsByClassName("card")[4].style.display = "none"
        document.getElementsByClassName("card")[5].style.display = "none"
        document.getElementsByClassName("card")[6].style.display = "none"
        document.getElementsByClassName("card")[7].style.display = "none"
        document.getElementsByClassName("card")[8].style.display = "none"
        document.getElementsByClassName("card")[9].style.display = "none"

        function insideNav(event) {
            event.preventDefault();
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
            console.log(cards)
            /*Takes care of showing correct cards*/
            var currentFilter = $(this).attr('data-filter');
            if (currentFilter === 'all') {
                jQuery.each(cards, function(i, v) {
                    $(this).show();
                });
            } else {
                jQuery.each(cards, function(i, v) {
                    /*If statement checks if any of the filters are in the currentFilter*/
                    if (v.getAttribute('data-filter').indexOf(currentFilter) >= 0) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

        }
        filterBtns.click(function(event) {
            /*Takes care of highlighting current filter*/
            event.preventDefault();
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
            console.log(cards)
            /*Takes care of showing correct cards*/
            var currentFilter = $(this).attr('data-filter');
            if (currentFilter === 'all') {
                jQuery.each(cards, function(i, v) {
                    $(this).show();
                });
            } else {
                jQuery.each(cards, function(i, v) {
                    /*If statement checks if any of the filters are in the currentFilter*/
                    if (v.getAttribute('data-filter').indexOf(currentFilter) >= 0) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });



        /*Takes care of cutting extra chars from cards*/
        var bodyText = $('.card-body');
        bodyText.each(function() {
            $(this).text($(this).attr('data-short-text'));
        });


        /*Takes care of expanding card when more info is clicked*/
        var moreLinks = $('.more-link');

        moreLinks.click(function(event) {
            var cardClicked = $(this).parents('.card');
            var textContainer = cardClicked.find('.card-text-container');
            var cardClickText = cardClicked.find('.card-body');
            var locationInfo = cardClicked.find('p.card-location');

            /*Checks to see if card is already open*/
            if ($(this).html() === 'Back') {
                if ($(window).width() >= 768) {
                    $("html, body").animate({
                        scrollTop: 400
                    }, "slow");
                }
                cardClickText.text(cardClickText.attr('data-short-text'));
                locationInfo.fadeOut('easeOutExpo');

                cardClicked.css({
                    'width': '300px',
                    'height': '500px',
                    'margin': '10px',
                    'display': 'inline-block'
                });

                cardClicked.find('.card-img-container').css({
                    'height': '200px'
                });

                $(this).html('More Info');
                textContainer.removeClass('expanded');
            }

            /*If it isnt open, then depending on device transform width and height or just height*/
            else {
                $(this).html('Back');

                cardClickText.text(cardClickText.attr('data-orig-text'));
                locationInfo.fadeIn('easeInQuint');
                var pos = cardClicked.position();

                /*If desktop*/
                if ($(window).width() >= 768) {
                    cardClicked.css({
                        'display': 'block',
                        'margin': '0 auto',
                        'width': '750px',
                        'height': '750px'
                    });


                    cardClicked.find('.card-img-container').css({
                        'height': '350px'
                    });



                }
                /*If mobile*/
                else {
                    cardClicked.css('height', '750px');
                }
                textContainer.addClass('expanded');
                // $("html, body").animate({ scrollTop: pos.top + 900 }, "slow");
            }

        });
        /**/

    });
</script>
<script>
    var navContent = document.getElementsByClassName("nav-content")
    if (navContent.length > 6) {
        if (navContent.length > 8) {
            for (var i = 0; i < navContent.length; i++) {
                navContent[i].style.fontSize = "1.1vw"
                navContent[i].style.margin = "1% 1% 1% 1%"
            }
        } else {
            for (var i = 0; i < navContent.length; i++) {
                navContent[i].style.fontSize = "1.2vw"
                navContent[i].style.margin = "2% 2% 2% 2%"
            }
        }
        document.getElementsByClassName("nav")[0].style.width = "100%"
    }
</script>


</html>