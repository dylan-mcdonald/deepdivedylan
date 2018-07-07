import {Component, OnInit} from "@angular/core";
import {Resume} from "../shared/classes/resume";
import {ResumeService} from "../shared/services/resume.service";

@Component({
	template: require("./resume.component.html")
})

export class ResumeComponent implements OnInit {
	constructor(private resumeService: ResumeService) {}

	resumeData: Resume = null;

	ngOnInit() {
		this.getResumeJson();
	}

	getResumeJson() {
		this.resumeService.getResumeJson()
			.subscribe(
				resumeData => this.resumeData = resumeData
			);
	}

	formatPhone(phone: string) {
		if(phone === undefined) {
			return;
		}

		let regex = /[^0-9\+]/g;
		return("tel:" + phone.replace(regex, ""));
	}
}
