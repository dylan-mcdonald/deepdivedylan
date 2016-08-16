import {Component, OnInit} from "@angular/core";
import {ResumeService} from "../services/resume-service";
import {Resume} from "../classes/resume";

@Component({
	templateUrl: "./templates/resume.html"
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
}
