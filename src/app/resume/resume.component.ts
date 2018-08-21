import {Component, OnInit} from "@angular/core";
import {Resume} from "../shared/classes/resume";
import {ResumeService} from "../shared/services/resume.service";
import {faBook, faBriefcase, faCode, faCodeBranch, faEnvelope, faGlobe, faGraduationCap, faPhone, faStar, faUser} from "@fortawesome/free-solid-svg-icons";
import {faGithub, faLinkedin, faTwitter} from "@fortawesome/free-brands-svg-icons";

@Component({
	template: require("./resume.component.html")
})

export class ResumeComponent implements OnInit {
	// fontawesome icons on parade
	faBook = faBook;
	faBriefcase = faBriefcase;
	faCode = faCode;
	faCodeBranch = faCodeBranch;
	faEnvelope = faEnvelope;
	faGithub = faGithub;
	faGlobe = faGlobe;
	faGraduationCap = faGraduationCap;
	faLinkedin = faLinkedin;
	faPhone = faPhone;
	faStar = faStar;
	faTwitter = faTwitter;
	faUser = faUser;

	constructor(private resumeService: ResumeService) {}

	resumeData: Resume = null;

	ngOnInit() {
		this.getResumeJson();
	}

	getResumeJson() {
		this.resumeService.getResumeJson()
			.subscribe(resumeData => this.resumeData = resumeData);
	}

	formatPhone(phone: string) {
		if(phone === undefined) {
			return;
		}

		let regex = /[^0-9\+]/g;
		return("tel:" + phone.replace(regex, ""));
	}
}
