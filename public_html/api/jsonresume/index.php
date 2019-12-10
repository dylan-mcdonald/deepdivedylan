<?php
class Dylan {

	public $settings = ["icons" => true];

	public $firstname = "Dylan";
	public $familyname = "McDonald";
	public $linkedin_id = "deepdivedylan";
	public $github_id = "deepdivedylan";
	public $twitter_id = "deepdivedylan";

	public $bio_data = [
		"email" => "dylan@deepdivedylan.io",
		"phone" => "+1 505.715.3826",
		"website" => "https://www.deepdivedylan.io",
		"stars" => ["Full Stack Developer", "Instructor", "Certified Ethical Hacker", "Scrum Master", "Systems Administrator"],
		"summary" => ["points" => [
			"Experienced software developer in Angular, PHP, HTML5, CSS, Bootstrap, JavaScript, Java, React, and REST",
			"Strong believer in continuously learning new skills and constantly keeping his knowledge updated and relevant",
			"Full stack developer with a passion for frontend/backend interactions",
			"Passionate and dedicated developer and mentor who pushes his junior developers to the limits of their experience",
			"Agile project manager who demands a high quality of coding through rigorous unit testing",
			"Community leader who has lead the Angular Meetup for Albuquerque, New Mexico for several years",
			"Seasoned systems administrator and Certified Ethical Hacker who makes no compromises on enhancing security"
		]],
	];

	public $skills = ["details" => [
		[
			"type" => "Programming Languages",
			"items" => [
				["name" => "Angular"],
				["name" => "C"],
				["name" => "C++"],
				["name" => "CSS3"],
				["name" => "HTML5"],
				["name" => "Java"],
				["name" => "JavaScript"],
				["name" => "LaTeX"],
				["name" => "Perl"],
				["name" => "PHP"],
				["name" => "REST"]
			]
		],
		[
			"type" => "Frameworks",
			"items" => [
				["name" => "Angular"],
				["name" => "Bootstrap"],
				["name" => "Java EE"],
				["name" => "Java Persistence API (JPA)"],
				["name" => "JavaServer Faces (JSF)"],
				["name" => "jQuery"],
				["name" => "Laravel"],
				["name" => "React"],
				["name" => "Qt"],
				["name" => "Spring"],
				["name" => "Spring Boot"]
			]
		],
		[
			"type" => "Tools",
			"items" => [
				["name" => "gcc"],
				["name" => "git"],
				["name" => "gradle"],
				["name" => "IntelliJ IDEA"],
				["name" => "metasploit"],
				["name" => "nmap"],
				["name" => "npm"],
				["name" => "PhpStorm"],
				["name" => "Qt"],
				["name" => "webpack"]
			]
		],
		[
			"type" => "Databases",
			"items" => [
				["name" => "IBM Informix"],
				["name" => "Microsoft SQL Server"],
				["name" => "mySQL"],
				["name" => "Oracle Berkeley DB"]
			]
		],
		[
			"type" => "Servers",
			"items" => [
				["name" => "Apache"],
				["name" => "Docker"],
				["name" => "Dovecot"],
				["name" => "OpenSSH"],
				["name" => "Postfix"],
				["name" => "mySQL"],
				["name" => "nginx"],
				["name" => "SpamAssassin"],
				["name" => "Tomcat"],
				["name" => "Ubuntu Linux"]
			]
		]
	]];

	public $github_projects = [
		"details" => [
			[
				"project_name" => "deepdivedylan/bootcamp-coders",
				"tagline" => "Stable Curriculum Development",
				"description" => [
					"Complete and robust full stack curriculum for students",
					"Includes Active Directory integrated tools for internal staff",
					"Fully functional Learning Management System (LMS) for multiple topics"
					]
			],
			[
				"project_name" => "deepdivedylan/gasolinea",
				"tagline" => "Find Cheap Gas Across the Border",
				"description" => [
					"Personal project to solve the problem of whether to get gas in Mexico or USA",
					"Set in the unique international community of San Diego/Tijuana",
					"Fully localized solution that presents American and Mexican datasets"
				]
			],
			[
				"project_name" => "deepdivedylan/data-design",
				"tagline" => "Cutting Edge Curriculum Development",
				"description" => [
					"Example full stack application used as sample code for students",
					"Concepts are tested here before integrated into final curriculum",
					"Concepts such as Angular, PHP, security, and mySQL"
				]
			],
			[
				"project_name" => "deepdivedylan/misquote-of-the-day",
				"tagline" => "Misquote of the Day",
				"description" => [
					"Example full stack application for instructional purposes",
					"Full stack Angular application that allows modification of data",
					"Future development will record updates on the Ethereum blockchain"
				]
			],
			[
				"project_name" => "ussbernerslee/angularattack2017-twitter-ipsum",
				"tagline" => "Angular Attack 2017",
				"description" => [
					"48 hour Angular hackathon to write an Angular app from zero to 100",
					"Wrote an app that will harvest a given user's twitter and generates filler",
					"Stored and organized randomized twitter fueled filler using Laravel"
				]
			]
		]
	];

	public $education = [
		"show_gpa" => false,
		"schools" => [
			[
				"degree" => "PhD (pursued)",
				"major" => "Computer Science",
				"institution" => "Missouri University of Science and Technology",
				"graduation_year" => 2011,
				"gpa" => 3.5
			],
			[
				"degree" => "Master of Science",
				"major" => "Computer Science",
				"institution" => "Missouri University of Science and Technology",
				"graduation_year" => 2008,
				"gpa" => 3.5
			],
			[
				"degree" => "Bachelor of Science",
				"major" => "Computer Science",
				"institution" => "California State University, San Marcos",
				"graduation_year" => 2006,
				"gpa" => 3.0
			],
			[
				"degree" => "Associates of Arts",
				"major" => "Computer Science",
				"institution" => "Mira Costa College",
				"graduation_year" => 2005,
				"gpa" => 3.1
			]
		]
	];

	public $experience = ["items" => [
		[
			"title" => "Software Engineer Contractor",
			"organisation" => "Liberty Mutual Insurance",
			"location" => "Remote, USA",
			"from" => "August 2019",
			"to" => "December 2019",
			"details" => [
				"Collaborated and participated in a fully remote workplace. Used project management and communications tools such as JIRA and Slack to remain in sync with a team in a different time zone. Participated in stand ups and other meetings in a pure virtual environment.",
				"Followed strict rules regarding the use of git and version control tools. Ensured commit messages complied to commitizen standards. Collaborated closely with the team on thorough code review and pull requests.",
				"Conducted security scans of internally generated APIs in both Node and Spring Boot. Upgraded packages using gradle (Spring Boot) or yarn (Node) to address detected security vulnerabilities. Verified upgrades to packages did not cause any regression errors. Documented all changes and security scan results for internal and end user facing documentation.",
				"Wrote unit tests for classes and methods deficient in minimum unit test coverage thresholds in mocha. Developed unit tests where, in some cases, no unit tests existed in the first place. Refactored code where necessary to be more declarative to facilitate testability and maintainability. Verified that any changes to the main code base did not cause any regression errors. Wrote a blog post to inform end users of the changes.",
				"Updated internal and end user facing documentation detailing changes to everything mentioned above: improved unit tests, upgraded packages, and new declarative methods.",
				"Upgraded Node generated APIs to build on the Jenkins CI/CD pipeline from Node 8 to Node 10. Carefully verified the product built and executed locally. Followed the build pipeline and tested deployments and verified deployed products functioned identically to local builds and complied with published API contracts.",
				"Tested deployments to a Docker cluster and verified APIs generated by the product deployed correctly and fulfilled promised API contracts.",
			],
			"technology_used" => ["tools" => [
				["name" => "Docker"],
				["name" => "gradle"],
				["name" => "Jenkins"],
				["name" => "JIRA"],
				["name" => "Java"],
				["name" => "JavaScript"],
				["name" => "mocha"],
				["name" => "Node"],
				["name" => "npm"],
				["name" => "React"],
				["name" => "Spring Boot"],
				["name" => "webdriver"],
				["name" => "webpack"],
				["name" => "yarn"]
			]]
		],
		[
			"title" => "Frontend Software Engineer",
			"organisation" => "Intuit",
			"location" => "San Diego, CA",
			"from" => "December 2018",
			"to" => "August 2019",
			"details" => [
				"Assigned to a team that was responsible for a highly publicized feature to one of our flagship products. Created React components for the frontend elements and enrolled in, integrated, and tested backend functionality using RESTful APIs. Met a very tight deadline to deliver a quality feature in a timely manner.",
				"Developed and refactored React components to use the React Intl library in transitioning the product from a monolingual to a fully localized product supporting about a dozen languages.",
				"Involved in a migration of a legacy Angular 1 code base to React. Carefully created React components that would have feature parity with deprecated Angular components.",
				"In addition to migrating Angular code, was involved in creating new functionality in non deprecated aspects of the code base. Structured the code meticulously to make Angular and React as decoupled as possible to provide future compatibility for the eventual removal of Angular.",
				"Customized and improved development configuration driven by multiple nginx sites controlled by an nginx reverse proxy.",
				"Wrote unit tests in enzyme and jest. Also wrote end to end (E2E) tests in cucumber and web driver. Did not accept pull requests without sufficient coverage from jest or enzyme.",
				"Worked with continuous integration/continuous deployment (CI/CD) pipeline using Jenkins."
			],
			"technology_used" => ["tools" => [
				["name" => "Angular"],
				["name" => "cucumber"],
				["name" => "CSS"],
				["name" => "HTML5"],
				["name" => "JavaScript"],
				["name" => "Jenkins"],
				["name" => "nginx"],
				["name" => "npm"],
				["name" => "React"],
				["name" => "webdriver"],
				["name" => "webpack"]
			]]
		],
		[
			"title" => "DevOps (Volunteer Position)",
			"organisation" => "Vermilion Sea Institute",
			"location" => "Tijuana, BC, México",
			"from" => "October 2018",
			"to" => "Present",
			"details" => [
				"Migrated a site from a legacy hosting plan to a Docker container using nginx on DigitalOcean. Created a migration plan for site infrastructure and data.",
				"Migrated entire organization from a legacy mail provider to G Suite. Orchestrated the migration plan with constant communication with end users."
			],
			"technology_used" => ["tools" => [
				["name" => "DigitalOcean"],
				["name" => "Docker"],
				["name" => "DNS"],
				["name" => "G Suite"],
				["name" => "nginx"],
				["name" => "Ubuntu Server"],
				["name" => "WordPress"]
			]]
		],
		[
			"title" => "Lead Developer/Scrum Master/Bootcamp Instructor",
			"organisation" => "Deep Dive Coding",
			"location" => "Albuquerque, NM",
			"from" => "October 2013",
			"to" => "September 2018",
			"details" => [
				"Responsible for creating, iteratively improving, and updating a full curriculum based on HTML5, CSS3, JavaScript, jQuery, mySQL, and PHP 5 and, later, PHP 7. Strong emphasis was placed on agile development methods, object oriented design patterns, cyber-security, and RESTful APIs. Added Angular, npm, and webpack to the curriculum to provide a full experience with JavaScript frameworks and kept the curriculum constantly updated with the latest version of Angular.",
				"Created a full stack learning management system (LMS) to manage all aspects of the program. Front-facing technical material was developed in addition to backend tools for support staff to employ in the management and execution of the program.",
				"Continuously researched current versions and industry trends for consideration into the program. Lead a team that coded, evaluated, and collaboratively decided on which new elements to include.",
				"Modeled the entire object oriented curriculum after PHP Laravel and had projects create a clone of Laravel/Symfony's Object Relational Mapping (ORM) components.",
				"Introduced and strictly enforced good security practices in the development of security-minded software. Security practices also included offensive security in attacking sites in capture the flag scenarios with flags such as SQL Injection and XSS.",
				"Earned Certified Ethical Hacker (CEH) and Certified Ethical Instructor (CEI) from the EC Council.",
				"Developed lessons on network surveillance and attacks using nmap and metasploit. This included a deep discussion on social engineering on how to persuade victims to make themselves vulnerable.",
				"Lead several full stack projects simultaneously using agile methods. Responsibilities, feedback, and sprints were given using agile using scrum and agile methodologies. Signed off on all database designs and UX plans before coding commenced. Approximate total projects led: 50.",
				"Lead and facilitated the curriculum to students from varied backgrounds and technical skill levels. Continuously evaluated the students as junior developers and provided feedback using agile methods.",
				"Created a fully agile work environment from scratch using a combination of kanban and scrum methodologies. Used this method both externally with bootcamp attendees and internally with bootcamp support staff to manage all aspects of coding and day-to-day operations.",
				"Continuously assisted students in the classroom and held office hours for students requiring review and reinforcement of the concepts in the curriculum. Taught and presented the evolving program while evaluating student progress through online interactive activities, group projects, and tests.",
				"Planned and deployed a fully functional dual stack IPv4/IPv6 network and developed an interactive lesson on the impacts of IPv6 on web development.",
				"Evaluated, tested, and deployed a new toolset for the program. Deployed the entire program using Apache, mySQL, PHP, and Ubuntu Server. Integrated the server as member of an Active Directory domain. Explored future generalization using Docker.",
				"Continuously collaborated with outside departments for the improvement of the program and its daily operations. Helped train senior developers in other languages to run similar bootcamp programs."
			],
			"technology_used" => ["tools" => [
				["name" => "Angular"],
				["name" => "Apache"],
				["name" => "Bootstrap"],
				["name" => "CSS3"],
				["name" => "Curriculum Development"],
				["name" => "git"],
				["name" => "HTML5"],
				["name" => "IPv6"],
				["name" => "JavaScript"],
				["name" => "jQuery"],
				["name" => "mySQL"],
				["name" => "npm"],
				["name" => "PHP"],
				["name" => "PHPUnit"],
				["name" => "PhpStorm"],
				["name" => "Ubuntu Linux"],
				["name" => "webpack"]
			]]
		],
		[
			"title" => "Software Engineer",
			"organisation" => "Materialogic",
			"location" => "St Louis, MO",
			"from" => "May 2012",
			"to" => "October 2013",
			"details" => [
				"Maintained and supported an Apache Tomcat-based n-tiered warehouse management system (WMS) in Java. This included receiving and intrepeting user requests, writing solutions, and executing unit and acceptance tests.",
				"Conducted integrations with the WMS using ANSI X12 Electronic Data Interchange (EDI). After receiving EDI specifications, all documents were unit and acceptance tested. This included expanding the existing system's functionality to support additional documents not previously supported.",
				"Conducted integrations with the WMS using Magento. Clients with existing Magento stores used a custom plugin to integrate to the WMS. Full unit and system tests were conducted before live integrations were allowed. Any problems found in the plugin were addressed and fixed.",
				"Migrated multiple codebases from Subversion to git, including importing historical information and training the team to assist in the transition from Subversion to git.",
				"Involved in rewriting and reworking the WMS from the Tomcat platform to a JBOSS based platform using Spring and Hibernate. The new platforms includes extended support for Java EE interfaces and unit testing with higher coverage compared to the Tomcat based platform.",
				"Wrote and updated documentation on both new and existing processes and subsystems, targeted at end users, internal users, and developers."
			],
			"technology_used" => ["tools" => [
				["name" => "CSS"],
				["name" => "EDI"],
				["name" => "Hibernate"],
				["name" => "HTML"],
				["name" => "git"],
				["name" => "IBM Informix"],
				["name" => "Java EE"],
				["name" => "JPA"],
				["name" => "jUnit"],
				["name" => "JBOSS"],
				["name" => "Perl"],
				["name" => "Spring"],
				["name" => "Subversion"],
				["name" => "Tomcat"],
				["name" => "Velocity"]
			]]
		],
		[
			"title" => "Owner",
			"organisation" => "CCC Computer Consulting",
			"location" => "Rolla, MO",
			"from" => "May 2011",
			"to" => "May 2012",
			"details" => [
				"Setup a secure wireless network that is accessible to customers within a 1.5 km radius using off the shelf 802.11g/n products and 802.1x (WPA2 Enterprise) authentication using Ubuntu Linux Server to use mySQL based authentication.",
				"Setup a weather station that automatically publishes its data for scientific research to Weather Underground and an offsite mySQL database.",
				"Deployed a web and DNS proxy on Ubuntu Linux for a client with a slow internet connection to enhance throughput despite the unreliable connection.",
				"Designed a solution to securely share financial data using GNU Cash, using a client/server architecture using C on the server end and C++ and Qt on the client end.",
				"Designed and implemented web scraping programs to automatically harvest data from public web sites using Perl and Java.",
				"Consulted for various clients in Missouri, Baja California, and via Email. Baja California clients required assistance in English and Spanish."
			],
			"technology_used" => ["tools" => [
				["name" => "802.1x"],
				["name" => "C"],
				["name" => "C++"],
				["name" => "Java"],
				["name" => "mySQL"],
				["name" => "Perl"],
				["name" => "Qt"],
				["name" => "Ubuntu Linux"],
				["name" => "WPA2 Enterprise"]
			]]
		],
		[
			"title" => "GANN Research Fellow",
			"organisation" => "Missouri University of Science and Technology",
			"location" => "Rolla, MO",
			"from" => "January 2008",
			"to" => "May 2011",
			"details" => [
				"Supervised several undergraduate students while researching new algorithms in wireless sensor networks (WSNs).",
				"Developed, designed, and proved an algorithm that detected outliers in wireless sensor networks using an enhanced communication method and simulated annealing to self-organize the network.",
				"Researched all background and related work relevant to the algorithm. Mentored students on how to research peer reviewed literature and write about their findings using LaTeX.",
				"Developed a simulation of the algorithm using Castalia, an open source wireless sensor network framework in C++. Stored simulated data in mySQL. Wrote post processing tools in C++ that would analyze and graph the mySQL data using gnuplot.",
				"Debugged the algorithm and submitted a patch to the Castalia community."
			],
			"technology_used" => ["tools" => [
				["name" => "Algorithms"],
				["name" => "C"],
				["name" => "C++"],
				["name" => "Castalia"],
				["name" => "LaTeX"],
				["name" => "Subversion"],
				["name" => "Ubuntu Linux"],
				["name" => "Wireless Sensor Networks"]
			]]
		],
		[
			"title" => "Graduate Teaching Assistant",
			"organisation" => "Missouri University of Science and Technology",
			"location" => "Rolla, MO",
			"from" => "August 2006",
			"to" => "January 2008",
			"details" => [
				"Taught up to four sections of a lab for Introduction to C++. Topics included functions, classes, operator overloading, and templating.",
				"Responsible for the creation, execution, and evaluation of weekly assignments.",
				"Mentored students inside and outside of class to facilitate their development as programmers and people.",
				"Helped lead study sessions to assist students in assignments and the final and midterm exams.",
				"Wrote a grading tool in Perl that would automatically organize and compile the one hundred assignments that were submitted every day. Provided this grading tool to the next teaching assistant who became responsible for the same class.",
				"Rated #2 in departmental instructor and professor evaluations."
			],
			"technology_used" => ["tools" => [
				["name" => "C"],
				["name" => "C++"],
				["name" => "Curriculum Development"],
				["name" => "LaTeX"],
				["name" => "Linux"],
				["name" => "Perl"]
			]]
		],
		[
			"title" => "Instructional Student Aide",
			"organisation" => "California State University, San Marcos",
			"location" => "San Marcos, CA",
			"from" => "September 2005",
			"to" => "May 2006",
			"details" => [
				"Assisted students with computer science related assignments and questions in C++ and other programming languages.",
				"Provided free consultation to students wanting to learn about Windows, Microsoft Office, and other software products.",
				"Helped students pass the Computer Core Competency exam required by the university.",
				"Wrote a time clock program in PHP and mySQL that tracked the number of hours worked by employees and statistics on students who visited our office."
			],
			"technology_used" => ["tools" => [
				["name" => "C++"],
				["name" => "HTML"],
				["name" => "JavaScript"],
				["name" => "mySQL"],
				["name" => "PHP"],
				["name" => "Linux"]
			]]
		],
		[
			"title" => "Programmer",
			"organisation" => "HowToInternet.Com",
			"location" => "Encinitas, CA",
			"from" => "September 2005",
			"to" => "July 2006",
			"details" => [
				"Setup a Samba controlled Windows domain to seamlessly integrate the logins and profiles of Windows and UNIX clients.",
				"Setup secure remote access using FreeBSD and OpenSSH.",
				"Wrote programs to scrape specific information from web sites and write it to Access and mySQL databases.",
				"Wrote a program in Java to automatically search the web, scrape particular information, and write out in a tab-delimited file.",
				"Evaluated and tested software products for future employee use.",
				"Repaired and troubleshooted the network and employee workstations."
			],
			"technology_used" => ["tools" => [
				["name" => "FreeBSD"],
				["name" => "HTML"],
				["name" => "Java"],
				["name" => "Microsoft Access"],
				["name" => "mySQL"],
				["name" => "Perl"]
			]]
		],
		[
			"title" => "AVID Tutor",
			"organisation" => "La Costa Canyon High School",
			"location" => "Carlsbad, CA",
			"from" => "November 2004",
			"to" => "June 2005",
			"details" => [
				"Worked with high school students and helped them with homework and projects with an emphasis in mathematics, physics, computer science, and other life and physical sciences.",
				"Continuously worked with students from differing backgrounds and proficiencies in English. Provided instruction in Spanish where helpful.",
				"Assisted students and staff with basic use of Microsoft Windows and Microsoft Office."
			],
			"technology_used" => ["tools" => [
				["name" => "Bilingual Education"],
				["name" => "Mathematics"],
				["name" => "Microsoft Office"],
				["name" => "Physics"],
				["name" => "Spanish"]
			]]
		],
		[
			"title" => "Systems Administrator",
			"organisation" => "Avalon Equipment Corporation",
			"location" => "Vista, CA",
			"from" => "March 2002",
			"to" => "November 2004",
			"details" => [
				"Built and maintained a Linux-based mail server running sendmail, BIND9 DNS Server, POP3 and IMAP4 services, and SSL-Enabled Apache. All mail services included encrypted authentication using SSL. Implemented Sophos anti-virus protection with automatic updates for mail services. Setup SMTP Services for remote users.",
				"Setup and maintained a Windows 2000 Server Domain Controller. Integrated the Windows 2000 DNS Service with existing Linux-based DNS Servers.",
				"Implemented strong anti-virus protection, security, and password policies.",
				"Designed and implemented a system to automatically perform search engine optimization (SEO) on the company web site. Using C, PHP, and mySQL, product information pages were automatically created so they would show up in search engines. Our pages often showed up as the #1 search result on Google, even beating the original manufacturers' web sites.",
				"Assisted in the transition from a Peer-to-Peer Mac-based inventory system to a centralized Linux-based inventory and accounting system.",
				"Programmed, customized, supported, and troubleshooted a 4GL-based accounting system. Wrote code in C and PHP to synchronize the data to a mySQL-based data warehouse. Created a front end in PHP to facilitate easy access to the data in the mySQL data warehouse.",
				"Supported and maintained a Windows-based accounting system. Wrote code in C and PHP to synchronize the data to a Microsoft SQL Server-based data warehouse. Created and improved reports using Crystal Reports.",
				"Coordinated with consultants that were assisting in programming additional add ons to our accounting system. Enforced quality assurance (QA) of the code and that the add ons met all of our requirements."
		],
			"technology_used" => ["tools" => [
				["name" => "Apache"],
				["name" => "C"],
				["name" => "Crystal Reports"],
				["name" => "FreeBSD"],
				["name" => "HTML"],
				["name" => "Microsoft SQL Server"],
				["name" => "Microsoft Windows Server"],
				["name" => "mySQL"],
				["name" => "PHP"],
				["name" => "qmail"],
				["name" => "Quality Assurance"],
				["name" => "SuSE Linux"]
			]]
		]
	]];
}

header("Content-type: application/json");
$reply = new stdClass();
$reply->status = 200;
$reply->data = new Dylan();
echo json_encode($reply);
