@extends('layouts.static-master')

@section('content')
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="#">Jay Wang's Resume</a></h2>
                <p>It's supposed to be hard. If it were easy, everyone would do it.</p>
            </div>
            <div class="meta">
                <time class="published" datetime="{{ Carbon\Carbon::now() }}">
                    {{ Carbon\Carbon::now()->toFormattedDateString() }}
                </time>
                <a href="#" class="author"><span class="name">Jay Wang</span>
                    <img src="images/avatars/jay-wang.jpg" alt=""/></a>
            </div>
        </header>

        <div class="image featured"><img src="images/resume.jpg" alt="" /></div>

        <table>
            <tr>
                <td>
                    <strong>Jay Wang</strong>
                                        <br>
                    Full-stack PHP developer
                </td>
                <td>Christchurch New Zealand<br>
                    Mob.<strong> 021 669928</strong><br>
                    Email: <strong>me@jwang.cc</strong>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    Personal Information
                </td>
            </tr>
            <tr>
                <td>
                    <p class="resume-para">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <strong>Age:</strong> 28<br>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <strong>Education:</strong><br>
                        <span class="edu">-	Graduate Diploma, Ara Institute of Canterbury, New Zealand, 2015~2017</span><br>
                        <span class="edu">-	Bachelor degree, Guangxi Nationalities University, China, 2007~2011</span><br>
                        <span class="edu">Major in Information & Communications Technologies</span><br>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <strong>Work Experience:</strong> 3 years in Enterprise + 1 year plus on campus<br>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <strong>GitHub:</strong> <a
                                href="https://github.com/mimimhmh"
                                target="_blank">
                            https://github.com/mimimhmh</a><br>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <strong>Visa status:</strong> open work search
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    Show case:
                </td>
            </tr>
            <tr>
                <td>
                    <p class="resume-para">
                        URL:
                        <a href="http://www.jwang.cc"
                           target="_blank">
                            http://www.jwang.cc
                        </a>
                        <br />
                        Laravel 5.4 project deployed on Forge (AWS Elasticbean Stalk once).<br />
                        Feel free to check it out. Thanks.<br />
                        Git Hub Source Code Link:<br />
                        <a href="https://github.com/mimimhmh/bloggy" target="_blank">
                            https://github.com/mimimhmh/bloggy
                        </a>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    Work Experience on campus (2015.6 ~ 2017.1)
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        SocialWEB Sales Funnels development
                        <br>
                        (2016.2 – 2016.12)
                    </h3>

                    <div class="col-sm-4">Project description:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Help <i>socialWEB</i> to build sales funnels to expand the client base and capture data that will help to understand their client’s needs.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            <i>socialWEB</i> is a branding company that helps enterprises create synergy across all mediums, aiming at brand identity.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Company Website: <a href="https://socialweb.co.nz" target="_blank">
                                https://socialweb.co.nz/
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4">Project environment:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Laravel 5
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            PHP 7
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            MySql
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Scrum team
                        </p>
                    </div>
                    <div class="col-sm-4">Project description:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Help <i>socialWEB</i> to build sales funnels to expand the client base and capture data that will help to understand their client’s needs.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            <i>socialWEB</i> is a branding company that helps enterprises create synergy across all mediums, aiming at brand identity.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Company Website: <a href="https://socialweb.co.nz" target="_blank">
                                https://socialweb.co.nz/
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4">Responsibilities:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Installing and configuring dev environment
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Customized page logic and routing.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Implementing functionalities for sales funnel.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Setting up filters and analyse the data.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Pages design and connection.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Testing and evaluating.
                        </p>
                    </div>

                    <p>
                        &nbsp;
                    </p>

                    <h3>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        Community Contributions & forum system
                        <br>
                        (2015.12 – 2016.2)
                    </h3>

                    <div class="col-sm-4">Project description:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Help Ara to establish a community and forum systems which
                            encourage their students to discuss courses’ topics.
                        </p>
                    </div>
                    <div class="col-sm-4">Project environment:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Laravel 5
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            PHP 7
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            MySql
                        </p>
                    </div>
                    <div class="col-sm-4">Responsibilities:</div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Conducting documents of requirements and needs.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Data struct & framework establishment.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Creating validations for requests.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Customizing providers & events.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            UX design.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Routing with RESTful APIs.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Take the extra mile to engage testing.
                        </p>
                    </div>

                    <p>
                        &nbsp;
                    </p>

                    <h3>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        Associated project experience on campus
                        <br>
                        (2015.7 – 2015.12)
                    </h3>
                    <br>

                    <div class="col-sm-4">
                        <p>
                            Project - 1:
                        </p>
                        <p>
                            Summary:
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Web site extracting – Python + bootstrap + mysql
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Extracting and collecting
                            information from a specific web site to build web
                            pages which shows various charts for users analyse data.
                        </p>
                    </div>

                    <div class="col-sm-4">
                        <p>
                            Project - 2:
                        </p>
                        <p>
                            Summary:
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Maori culture game – ECMAScript2015 + HTML5 + CSS3
                        <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Using front-end tech to build a Maori Culture related game.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Work Experience in enterprises ( 2011 ~ 2014 )
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        Newland Software Engineering Ltd
                        <br>
                        ( 2012.3 – 2014.3 )
                    </h3>

                    <div class="col-sm-4">
                        Project:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            GuiNan Data Mart and CMCC Sales Reward System
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project roles:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            PHP developer
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project environment:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Linux + PHP 5 + MySql
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project description:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            GuiNan Data Mart is an analysis system based on BASS (Business Analysis Support System).
                            Operating data, collected from customers, is loaded into a data warehouse and is then used to
                            undertake multi- dimensional analysis. It also calculates sales commissions.
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Responsibilities:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Developed and provided various solutions to fulfill the business functionality.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Designed and developed back-end stored procedures.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Testing, Bugs fixing and maintenance of the products.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Mentoring junior members in the team.
                        </p>
                    </div>

                    <p>
                        &nbsp;
                    </p>

                    <h3>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        GuangXi XinBaiNa Electric Ltd
                        <br>
                        ( 2011.3 – 2012.3 )
                    </h3>

                    <div class="col-sm-4">
                        Project:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Supervisory Control Video System for Power Substations
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project roles:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            J2EE developer
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project environment:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Struct2 + Spring 3 + Hibernate + Unix
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Project description:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            To create an intelligent security system for The China Southern
                            Power Grid Company to ensure that their power substations can be operated safely
                            and effectively. Data (such as: equipment temperature, engine power, etc.) is
                            collected from substations and surrounding environment.
                            Alarms are activated when pre-set thresholds are exceeded.
                        </p>
                    </div>

                    <div class="col-sm-4">
                        Responsibilities:
                    </div>
                    <div class="col-sm-8">
                        <p class="resume-para">
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Designed monitoring modules and associated pages.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Built and integrated SSH2 framework.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Performed estimation and capacity planning work with the project
                            manager and product development teams before implementation.
                            <br>
                            <i class="fa fa-circle-o fa-fw" aria-hidden="true"></i>
                            Provided technical guidance to clients.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Tech Stack
                </td>
            </tr>
            <tr>
                <td>
                    <p class="resume-para">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Web Development:</strong> PHP / Python / Java<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Web Framework:</strong> Laravel<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Front-end Tools & Framework:</strong> NodeJS/ NPM/ VueJs/ Bootstrap <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Database:</strong> MySql / Oracle / SQLite <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Version Management Tool:</strong> Git <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>System Tools:</strong> Docker/Shell <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Test Framework:</strong> PHPUnit <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>Cloud:</strong> Amazon services <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <strong>UX Design:</strong> HTML5 / CSS3 / Adobe suits <br>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    IT Attributes
                </td>
            </tr>
            <tr>
                <td>
                    <p class="resume-para">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Ability to explain technical information in simple and easy terms.<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Friendly, well-spoken, energetic, confident, personable and a reliable person.<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Highly organised, able to meet deadlines, calm and composed under all circumstances. <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Flexible and easily adapts to new concepts, technologies and responsibilities. <br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Can work effectively in a team.<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Commitment to outcomes. <br>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    Availability & References
                </td>
            </tr>
            <tr>
                <td>
                    <p class="resume-para">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Available to start in two weeks.<br>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Can provide references on request.<br>
                    </p>
                </td>
            </tr>
        </table>

        <p>Blogs keep updating frequently, checkout often.</p>

        <footer>

            <div class="social actions">
                <ul class="icons">
                    <li><a target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="https://github.com/mimimhmh" target="_blank"><i class="fa fa-github"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-google-plus"></i> </a></li>

                </ul>
            </div>

            <ul class="stats">
                <li><a href="#">Thanks J Wang.</a></li>
            </ul>
        </footer>
    </article>
@endsection

<style>

    table h3 {
        text-align: center;
    }

    .edu {
        margin-left: 20px;
    }

    .resume-para {
        line-height: 150%;
    }

</style>